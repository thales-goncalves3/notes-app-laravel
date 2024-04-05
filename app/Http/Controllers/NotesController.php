<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NotesController extends Controller
{
    //

    public function index()
    {
        $notes = Notes::all();

        // $notes = Notes::where('status', '=', 0)->get();

        return view('dashboard', ['notes' => $notes]);
    }

    public function insertNote(Request $request)
    {
        $note = new Notes;

        $note->title = $request->title;
        $note->description = $request->description;
        $note->status = false;

        $note->save();


        return redirect()->route('dashboard');
    }

    public function findNoteById($id)
    {
        $note = Notes::find($id);

        return view('tarefa', ['note' => $note]);
    }

    public function updateNote(Request $request, $id)
    {
        $note = Notes::find($id);

        $note->title = $request->title;
        $note->description = $request->description;

        $note->save();

        return redirect()->route('dashboard');
    }

    public function deleteNote($id)
    {
        $note = Notes::find($id);

        $note->delete();

        return redirect()->route('dashboard');
    }

    public function finishNote($id)
    {
        $note = Notes::find($id);

        $note->status = !$note->status;

        $note->save();

        return redirect()->route('dashboard');
    }

    public function showResume()
    {



        $finished = Notes::where('status', 1)->count();
        $notFinished = Notes::where('status', 0)->count();

        $obj = [
            'finalizada' => $finished,
            'emAndamento' => $notFinished
        ];

        return view('estatistica', ['resume' => $obj]);
    }
}
