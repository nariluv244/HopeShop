<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

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
    return Redirect::to('login');
});

Auth::routes();


Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/about', function () {
        return view('user.about');
    });
    Route::get('/contact', function () {
        return view('user.contact');
    });
    Route::get('/shop', function () {
        return view('user.shop');
    });    
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {  
Route::get('/homeAdmin', [App\Http\Controllers\HomeController::class, 'indexAdmin'])->name('homeAdmin');

Route::get('/user/index', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('/user/tambah', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');

Route::get('/user/hapus/{id}',[App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');

Route::get('/pesanan/index', [App\Http\Controllers\PesananaController::class, 'index'])->name('pesanan.index');

Route::get('/pembayaran/index', [App\Http\Controllers\PembayaranController::class, 'index'])->name('pembayaran.index');

Route::get('/barang/index', [App\Http\Controllers\BarangController::class, 'index'])->name('barang.index');

Route::get('/saran/index', [App\Http\Controllers\SaranController::class, 'index'])->name('saran.index');




});

Route::get('logout',function() {
    auth()->logout();
    return Redirect::to('/login');
})->name('logout');
