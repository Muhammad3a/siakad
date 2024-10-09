<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/profile', 'profile');

Route::view('/visi-misi', 'visi-misi');

Route::view('/contact', 'contact');

Route::view('/gallery', 'gallery');
