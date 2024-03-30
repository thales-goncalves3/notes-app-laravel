<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [NotesController::class, 'index'])->name('dashboard');

Route::get('/nova-tarefa', function () {
    return view('criar-tarefa');
});

Route::put('tarefa/{id}', [NotesController::class, 'updateNote'])->name('update.note');

Route::delete('tarefa/{id}', [NotesController::class, 'deleteNote'])->name('delete.note');

Route::get('tarefa/{id}', [NotesController::class, 'findNoteById'])->name('tarefa');

Route::post('/', [NotesController::class, 'insertNote'])->name('dashboard');
