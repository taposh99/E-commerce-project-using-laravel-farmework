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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[\App\Http\Controllers\EcommerceController:: class,'index'])->name('/');
Route::get('/product-details',[\App\Http\Controllers\EcommerceController:: class,'productDetails'])->name('product-details');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[\App\Http\Controllers\AdminController:: class,'index'])->name('dashboard');
    Route::get('/add-product',[\App\Http\Controllers\ProductController:: class,'addProduct'])->name('add-product');
    Route::get('/manage-product',[\App\Http\Controllers\ProductController:: class,'manageProduct'])->name('manage-product');
    Route::post('/new-product',[\App\Http\Controllers\ProductController:: class,'saveProduct'])->name('new-product');
    Route::get('/status/{id}',[\App\Http\Controllers\ProductController:: class,'status'])->name('status');

});
