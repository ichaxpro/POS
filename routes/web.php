<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SaleController;


Route::get('/', [HomeController::class, 'index']);


Route::prefix('category')->group(function () {
    Route::get('/{category}', [ProductsController::class, 'category']);
});


Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);


Route::get('/sale', [SaleController::class, 'index']);


