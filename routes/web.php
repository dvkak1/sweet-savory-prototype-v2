<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

Route::get('/', action:[HomeController::class, 'my_home']);

Route::get('/home', [HomeController::class, 'index']);

Route::get(uri: '/add_food', action: [AdminController::class, 'add_food']);

Route::post(uri: '/upload_food', action: [AdminController::class, 'upload_food']);

Route::get(uri: '/view_food', action: [AdminController::class, 'view_food']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
