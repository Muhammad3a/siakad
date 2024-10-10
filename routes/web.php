<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiakadController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class,);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/gallery', [GalleryController::class, 'index']);

Route::get('/siakad', [SiakadController::class, 'index']);
