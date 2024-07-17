<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    //show
    public function show($id){
        $satuan = Satuan::find(1);
        return view('pages.satuan.show', compact('satuan'));
    }

    //edit
    public function edit($id){
        $satuan = Satuan::find($id);
        return view('pages.satuan.edit', compact('satuan'));
    }
    //update
    public function update(Request $request, Satuan $satuan){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'radius_km' => 'required',
            'time_in' => 'required',
            'time_out' => 'required',
        ]);

        $satuan->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'radius_km' => $request->radius_km,
            'time_in' => $request->time_in,
            'time_out' => $request->time_out,
        ]);

        return redirect()->route('satuans.show', 1)->with('success', 'Satuan Update Successfully');
    }
}
