<?php

use App\Http\Controllers\TreeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pohon', [TreeController::class, 'index']);

use App\Http\Controllers\EventController;

// Route untuk menampilkan halaman form
Route::get('/event/create', [EventController::class, 'create'])->name('events.create');

// Route untuk menerima kiriman data form
Route::post('/event/store', [EventController::class, 'store'])->name('events.store');

// Route untuk menampilkan halaman form
Route::get('/tree/create', [TreeController::class, 'create'])->name('trees.create');

// Route untuk menerima kiriman data form
Route::post('/tree/store', [TreeController::class, 'store'])->name('trees.store');

Route::get('/menu', function(){
    return view('components.menu');
});