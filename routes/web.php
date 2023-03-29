<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategorisController;
use App\Http\Controllers\main\cartController;
use App\Http\Controllers\main\HomepageController;
use App\Http\Controllers\main\ShopController;
use App\Http\Controllers\main\singleProduk;
use App\Http\Controllers\ProduksController;
use App\Http\Controllers\TransaksiController;
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
//Route::get('/', function () {
//    return redirect(app()->getLocale());
//});
//Route::prefix('{locale}')
//    ->where(['locale' => '[a-zA-Z]{2}'])
//    ->middleware('setlocale')
//    ->group(function () {
Route::get('/', [HomepageController::class, 'index'])->name('rootRoute');
Route::get('/single-product', fn() => view('main.single-product'));
Route::get('/cart', [cartController::class, 'index'])->name('cartRoute');
Route::post('/cart', [cartController::class, 'checkout']);

Route::get('/product/{produk}', [singleProduk::class, 'index']);
Route::get('/product/', [singleProduk::class, 'index'])->name('single');

Route::get('/login-reseller', fn() => view('main.login'));
Route::post('/login-reseller-auth', [AuthController::class, 'loginReseller'])->name('loginReseller');
Route::get('/register-reseller', [\App\Http\Controllers\pageController::class, 'index']);
Route::get('/about', [\App\Http\Controllers\pageController::class, 'about']);
Route::get('/contact', [\App\Http\Controllers\pageController::class, 'contact']);


Route::get('/cekSession', [AuthController::class, 'cekSession']);


Route::get('/shop', [ShopController::class, 'index'])->name('shopRoute');
Route::get('/shop/getProduct/{produk}', [singleProduk::class, 'getForAjax'])->name('getForAjax');
Route::post('/shop/atc', [ShopController::class, 'atc'])->name('shop.atc');

Route::group(['prefix' => 'shop'], function () {
    Route::get('{slug}', [ShopController::class, 'kategori']);
});

//    });
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('getLogin', [AuthController::class, 'login'])->name('getLogin');
Route::group(['prefix' => 'nara', 'middleware' => 'auth'], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [HomeController::class, 'logout'])->name('logout');
    Route::resource('produk', ProduksController::class);
    Route::resource('kategori', KategorisController::class);

    Route::get('whatsapp-admin', [HomeController::class, 'whatsapp']);
    Route::post('aktifkanWA', [HomeController::class, 'aktifkanwa']);
    Route::post('tambahwa', [HomeController::class, 'tambahwa']);

    Route::resource('transaksi', TransaksiController::class);

});



