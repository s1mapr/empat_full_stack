<?php

use App\Http\Controllers\Api as Controllers;
use Illuminate\Support\Facades\Route;


Route::prefix('/auth')
    ->name('auth.')
    ->controller(Controllers\AuthController::class)
    ->group(function () {
        Route::post('/register', 'register')->name('register');
        Route::post('/login', 'login')->name('login');
    });

Route::prefix('/categories')
    ->name('categories.')
    ->controller(Controllers\CategoryController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}', 'show')->name('show')->middleware('auth:api');
        Route::get('/{id}/products', 'products')->name('products')->middleware('auth:api');
        Route::post('/', 'store')->name('store')->middleware('auth:api');
        Route::patch('/{id}', 'update')->name('update')->middleware('auth:api');
    });

Route::prefix('/products')
    ->name('products.')
    ->controller(Controllers\ProductController::class)
    ->middleware('auth:api')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}', 'show')->name('show');
        Route::post('/', 'store')->name('store');
        Route::patch('/{id}', 'update')->name('update');
    });

