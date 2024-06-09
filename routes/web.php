<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\BuktiController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/detail/{slug}', [DetailController::class, 'index'])
    ->name('detail');
// memproses data itu sendiri
Route::post('/checkout/{id}', [CheckoutController::class, 'process'])
    ->name('checkout_process')
    ->middleware(['auth']);
Route::get('/checkout/{id}', [CheckoutController::class, 'index'])
    ->name('checkout')
    ->middleware(['auth']);
// menambah member
Route::post('/checkout/create/{detail_id}', [CheckoutController::class, 'create'])
    ->name('checkout-create')
    ->middleware(['auth']);
Route::post('/checkout/create/bukti/{detail_id}', [CheckoutController::class, 'bukti'])
    ->name('checkout-bukti')
    ->middleware(['auth']);
Route::get('/checkout/remove/{detail_id}', [CheckoutController::class, 'remove'])
    ->name('checkout-remove')
    ->middleware(['auth']);
Route::get('/checkout/confirm/{id}', [CheckoutController::class, 'success'])
    ->name('checkout-success')
    ->middleware(['auth']);

Route::prefix('admin')
    ->name('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get(
            '/',
            [DashboardController::class, 'index']
            // Matches The "/admin/users" URL
        )
            ->name('dashboard');

        Route::resource('travel-package', TravelPackageController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('transaction', TransactionController::class);


    });

Auth::routes(['verify' => true]);



