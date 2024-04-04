<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', [\App\http\Controllers\Frontend\HomepageController::class, 'index'])->name('homepage');
Route::get('daftar-mobil', [\App\http\Controllers\Frontend\CarController::class, 'index'])->name('car.index');
Route::get('daftar-mobil/{car}', [\App\http\Controllers\Frontend\CarController::class, 'show'])->name('car.show');
Route::post('daftar-mobil', [\App\http\Controllers\Frontend\CarController::class, 'store'])->name('car.store');
Route::get('kontak', [\App\http\Controllers\Frontend\ContactController::class, 'index']);
Route::post('kontak', [\App\http\Controllers\Frontend\ContactController::class, 'store'])->name('contact.store');
Route::get('pengembalian-mobil', [\App\http\Controllers\Frontend\ReturnCarController::class, 'index']);
Route::post('pengembalian-mobil', [\App\http\Controllers\Frontend\ReturnCarController::class, 'store'])->name('returncar.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'is_admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::resource('cars', \App\Http\Controllers\Admin\CarController::class);
    Route::resource('types', \App\Http\Controllers\Admin\TypeController::class);
    Route::resource('bookings', \App\Http\Controllers\Admin\BookingController::class)->only(['index', 'destroy']);
});
