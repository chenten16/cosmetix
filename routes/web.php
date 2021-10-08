<?php

use App\Models\Product;
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
    $products = Product::orderBy('created_at', 'desc')->skip(0)->take(10)->get();
    return view('storeViews.welcome', ['products' => $products]);
});

Route::get('/shop', function () {
    $products = Product::all();
    return view('storeViews.shop', ['products' => $products]);
});

Route::get('/product/{id}', function ($id) {
    $product = Product::find($id);
    if ($product)
        return view('storeViews.product', ['product' => $product]);
    else
        return abort(404);
});

Route::get('/contact', function () {
    return view('storeViews.contact');
});



Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('adminViews.index');
    })->name('adminIndex');

    Route::get('/products', function () {
        return view('adminViews.products');
    })->name('adminProducts');


    Route::get('/orders', function () {
        return view('adminViews.orders');
    })->name('adminOrders');

    Route::get('/categories', function () {
        return view('adminViews.categories');
    })->name('adminCategories');


    Route::get('/analytics', function () {
        return view('adminViews.analytics');
    })->name('adminAnalytics');

    
    Route::get('/settings', function () {
        return view('adminViews.settings');
    })->name('adminSettings');

    Route::post('/addProduct','ProductController@addProduct');
});
