<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

// use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', action:[HomeController::class, 'my_home']);

Route::get('/home', [HomeController::class, 'index']);

// Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
