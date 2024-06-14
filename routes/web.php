<?php

use App\Http\Controllers\PortoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortoController::class, 'about']);
Route::get('/experiences', [PortoController::class, 'experiences']);
Route::get('/projects', [PortoController::class, 'projects']);
Route::get('/contact', [PortoController::class, 'contact']);
