<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

// Di dalam routes/web.php
Route::get('/', function () {
    return view('home'); // akan memanggil file resources/views/home.blade.php
});

Route::get('/journal', function () {
    return view('journal'); // akan memanggil file resources/views/journal.blade.php
});
