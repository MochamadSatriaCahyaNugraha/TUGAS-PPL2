<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

Route::view('/', 'index');

// Register User
Route::post('/user/register', [UserController::class, 'register'])->name('user.register');

// Login User
Route::post('/user/login', [UserController::class, 'login'])->name('user.login');

// Update User
Route::put('/user/{id}/update', [UserController::class, 'update'])->name('user.update');

// Get User
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');

// Logout User
Route::post('/user/logout', [UserController::class, 'logout'])->name('user.logout');

// Show Contact form using controller
Route::get('/contact', [ContactController::class, 'showContactForm']);

// Show Address form
Route::get('/address', function () {
    return view('address');
});
