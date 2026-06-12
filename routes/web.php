<?php

use App\Http\COntrollers\TreeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pohon', [TreeController::class, 'index']);
