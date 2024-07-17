<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

use function Laravel\Prompts\note;

class NoteController extends Controller
{
    //index
    public function index(Request $request){
        $note = Note::where('prajurit_id', $request->user()->id)->orderBy('id', 'desc')->get();
        return response()->json(['note'=>$note], 200);
    }

    //create
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'note' => 'required',
        ]);

        $note = new Note();
        $note->prajurit_id = $request->user()->id;
        $note->title = $request->title;
        $note->note = $request->note;
        $note->save();

        return response()->json(['message'=>'Note Created Successfully'], 200);
    }
}
