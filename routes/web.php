<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//list all products
Route::get('/', [ProductController::class, 'index']);
//show single product
Route::get('/product/{product}', [ProductController::class, 'show']);

//show create form
Route::get('/products/create', [ProductController::class, 'create']);

//save form
Route::post('/product', [ProductController::class, 'store']);

//delete record
Route::delete('/products/{product}', [ProductController::class, 'destroy']);

//update form
Route::get('/product/{product}/edit', [ProductController::class, 'edit']);

//save update form
Route::put('/products/{product}', [ProductController::class, 'update']);