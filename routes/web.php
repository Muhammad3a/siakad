<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiakadController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class,);

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/contact', [ContactController::class, 'index'])->name('users.contact');

Route::get('/gallery', [GalleryController::class, 'index'])->name('users.gallery');

Route::get('/siakad', [SiakadController::class, 'index'])->name('users.siakad');


Route::resource('users', UserController::class)->middleware('auth');




Route::get('login', [LoginController::class, 'loginForm'])->name('login')->middleware('guest');

Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::post('logout', LogoutController::class)->name('logout')->middleware('auth');


// Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

// Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Route::get('/users/{user:id}', [UserController::class, 'show'])->name('users.show');

// Route::get('/users/{user:id}/edit', [UserController::class, 'edit'])->name('users.edit');

// Route::put('/users/{user:id}', [UserController::class, 'update'])->name('users.update');

// Route::delete('/users/{user:id}', [UserController::class, 'destroy'])->name('users.destroy');
