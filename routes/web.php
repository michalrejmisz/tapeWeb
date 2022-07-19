<?php

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
    return view('main');
})->name('main');

//Route::get('/product', function () {
//    return view('product_list');
//})->name('product');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin', function () {
    return view('dashboard.product.product');
})->name('admin');



Route::get('/products/{id}', [App\Http\Controllers\HomeController::class, 'product_by_category'])->name('products_by_category');
Route::get('/products', [App\Http\Controllers\HomeController::class, 'products_all'])->name('products_all');

Route::get('/dashboard/product', function (){
    return view('dashboard.product.product');
})->name('dashboard.products.table');
Route::get('/dashboard/product/create', [\App\Http\Controllers\ProductController::class, 'create']);
Route::post('/dashboard/product', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
Route::post('/dashboard/product/delete/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');
Route::post('/dashboard/product/update/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update');

Route::get('/dashboard/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');

//Route::get('contact-us', [ContactController::class, 'index']);
Route::post('/', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.us.store');
Route::post('/products', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.us.store');


