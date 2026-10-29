<?php

use App\Http\Controllers\LibroACVController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', [LibroACVController::class, 'index']);
