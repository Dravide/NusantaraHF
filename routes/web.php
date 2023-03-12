<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategorisController;
use App\Http\Controllers\main\HomepageController;
use App\Http\Controllers\main\ShopController;
use App\Http\Controllers\main\singleProduk;
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

Route::get('/product/{produk}', [singleProduk::class, 'index']);

Route::get('/shop', [ShopController::class, 'index']);

Route::group(['prefix' => 'shop'], function () {
    Route::get('{slug}', [ShopController::class, 'kategori']);
});


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('getLogin', [AuthController::class, 'login'])->name('getLogin');
Route::group(['prefix' => 'nara', 'middleware' => 'auth'], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [HomeController::class, 'logout'])->name('logout');
    Route::resource('produk', ProduksController::class);
    Route::resource('kategori', KategorisController::class);
});

