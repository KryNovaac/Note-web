<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home'); 
})->name('home');

use App\Http\Controllers\NoteController;

Route::resource('notes', NoteController::class);
