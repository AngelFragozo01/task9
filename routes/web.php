<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/photos', [PageController::class, 'photos'])->name('photos');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');