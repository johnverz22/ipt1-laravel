<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
Route::get('/products/create', [ProductController::class, 'create'])->middleware('auth');

//save form
Route::post('/product', [ProductController::class, 'store'])->middleware('auth');

//delete record
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->middleware('auth');

//update form
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->middleware('auth');

//save update form
Route::put('/products/{product}', [ProductController::class, 'update'])->middleware('auth');

//manage products
Route::get('/products/manage', [ProductController::class, 'manage'])->middleware('auth');


//register here
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//save registration
Route::post('/users', [UserController::class, 'store'])->middleware('guest');


//show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

