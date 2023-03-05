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

Route::get('/shop', fn() => view('main.product-list'));

Route::group(['prefix' => 'shop'], function () {
    Route::get('{kategori}', fn(string $kategori) => view('main.product-list'));
});

Route::group(['prefix' => 'nara'], function () {
    Route::get('home', HomeController::class)->name('home');
    Route::resource('produk', ProduksController::class);
});

