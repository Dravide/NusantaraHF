<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\main\HomepageController as HomepageController;
use App\Http\Controllers\ProduksController;
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


Route::get('/', [HomepageController::class, 'index']);
Route::get('/single-product', fn() => view('main.single-product'));

Route::get('/product/{produk}', [\App\Http\Controllers\main\singleProduk::class, 'index']);

Route::get('/shop', [\App\Http\Controllers\main\ShopController::class, 'index']);

Route::group(['prefix' => 'shop'], function () {
    Route::get('{slug}', [\App\Http\Controllers\main\ShopController::class, 'kategori']);
});

Route::group(['prefix' => 'nara'], function () {
    Route::get('home', HomeController::class)->name('home');
    Route::resource('produk', ProduksController::class);
});

