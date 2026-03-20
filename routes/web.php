<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/products', [ProductController::class, 'index']);
Route::resource('/products', ProductController::class);
Route::resource('/user', Controller::class);
