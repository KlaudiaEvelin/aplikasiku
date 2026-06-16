<?php

use App\Http\Controllers\TreeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
Route::get('/test', function () {
    return User::all();
});

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/pohon');
    }

    return redirect('/login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/registrasi', [AuthController::class, 'registerView'])->name('register');
    Route::post('/registrasi', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::get('/pohon', [TreeController::class, 'index'])->name('pohon');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');



Route::get('/debug-auth', function () {
    return [
        'check' => Auth::check(),
        'id' => Auth::id(),
        'user' => Auth::user()?->username,
    ];
});
    
Route::middleware('auth')->group(function () {
    Route::get('/pohon', [TreeController::class, 'index'])->name('pohon');

    Route::get('/profil', [AuthController::class, 'profile'])
        ->name('profil');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});

Route::middleware('auth')->group(function () {

    Route::get('/profil', [AuthController::class, 'profile'])
        ->name('profil');

    Route::get('/profil/edit', [AuthController::class, 'editProfile'])
        ->name('profil.edit');

    Route::post('/profil/edit', [AuthController::class, 'updateProfile'])
        ->name('profil.update');
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