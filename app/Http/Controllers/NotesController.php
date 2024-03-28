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
}
