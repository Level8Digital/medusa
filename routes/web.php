<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\DashboardController;

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
    return view('landing');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/bar-range-oscillator', function () {
    return view('bro');
});
Route::get('/price-action-oscillator', function () {
    return view('pao');
});
Route::get('/m-nas', function () {
    return view('m-nas');
});
Route::get('/m-spy', function () {
    return view('m-spy');
});
Route::get('/error', function () {
    return view('error');
});

Route::get('/terms-of-use', [BuyController::class, 'viewTerms']);
Route::get('/buy-now', [BuyController::class, 'viewBuyNow']);
Route::post('/proceed-to-payment', [BuyController::class, 'proceedToPayment']);
Route::get('/checkout/{order}', [BuyController::class, 'viewCheckout'])->name('checkout');
Route::post('/finalize-paypal', [BuyController::class, 'FinalizePayPal']);

Route::get('/dashboard', [DashboardController::class, 'viewDashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/notify-access/{purchase}', [DashboardController::class, 'notifyAccess'])->middleware(['auth'])->name('notify-access');

require __DIR__.'/auth.php';
