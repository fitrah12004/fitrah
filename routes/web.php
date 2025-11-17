<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioController;

Route::get('/index', [PortofolioController::class, 'index']);
Route::get('/blog', [PortofolioController::class, 'blog']);
Route::get('/contact', [PortofolioController::class, 'contact']);