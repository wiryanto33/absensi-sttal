<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\prajurit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //login user
    public function login(Request $request){
        $loginData = $request->validate([
            'nrp'=> 'required',
            'password'=> 'required',
        ]);

        $prajurit = prajurit::where('nrp', $loginData['nrp'])->first();

        // check prajurit
        if(!$prajurit){
            return response(['message' => 'Invalid Credentials'], 401);
        }

        //check password
        if(!Hash::check($loginData['password'], $prajurit->password)){
            return response(['message' => 'Invalid Credentials'], 401);
        }

        $token = $prajurit->createToken('auth_token')->plainTextToken;

        return response(['prajurit'=>$prajurit, 'token'=>$token], 200);
    }

    //logout
    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();

        return response(['message' => 'Logged Out'], 200);
    }

    //update image profile & face_embedding
    public function updateProfile(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'face_embedding' => 'required',
        ]);

        $prajurit = $request->user();
        $image = $request->file('image');
        $face_embedding = $request->face_embedding;

        //save image
        $image->storeAs('public/images', $image->hashName());
        $prajurit->image_url = $image->hashName();
        $prajurit->face_embedding = $face_embedding;
        $prajurit->save();

        return response([
            'message' => 'Profile updated',
            'user' => $prajurit,
        ], 200);
    }

}
