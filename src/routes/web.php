<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', [ProductController::class, 'getAllProducts'])->name('products.getAllProducts');
Route::get('/products/create', [ProductController::class, 'createProductView']);
Route::get('/products/{id}', [ProductController::class, 'getProductById']);
Route::post('/products', [ProductController::class, 'createProduct']);


