<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/projects', [HomeController::class, 'projects']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/pricing', [HomeController::class,'pricing']);
