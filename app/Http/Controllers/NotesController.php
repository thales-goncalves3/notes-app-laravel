<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NotesController extends Controller
{
    //

    public function index(){
        $notes = Notes::all();

        return view('dashboard', ['notes' => $notes]);
    }

    public function insertNote(Request $request){
        $note = new Notes;

        $note->title = $request->title;
        $note->description = $request->description;

        $note->save();


        return redirect()->route('dashboard');
    }

    public function findNoteById($id){
        $note = Notes::find($id);

        return view('tarefa', ['note' => $note]);
    }

    public function updateNote(Request $request, $id){
        $note = Notes::find($id);

        $note->title = $request->title;
        $note->description = $request->description;

        $note->save();

        return redirect()->route('dashboard');
    }
}
