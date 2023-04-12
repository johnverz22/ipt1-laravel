<?php


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

Route::get('/', function () {
    return view('products', [
        'heading' => 'Product Catalog',
        'products' => Product::all()
    ]);
});

Route::get('/product/{product}', function(Product $product){ //model-route binding
    return view('product',[
        'product' => $product
    ]);
});

// Route::get('/products', function(){
//     return "this is the product page";
// });
