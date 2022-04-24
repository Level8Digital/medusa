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
Route::get('/insights', function () {
    return view('insights');
});
Route::get('/components', function () {
    return view('components');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/probability-and-random-distribution', function () {
    return view('insights/probability');
});
Route::get('/tipping-the-odds', function () {
    return view('insights/odds');
});
Route::get('/shaping-the-mind', function () {
    return view('insights/mind');
});

Route::get('/error', function () {
    return view('error');
});

Route::get('/terms-of-use', [BuyController::class, 'viewTerms']);
Route::get('/purchase/{accesss}', [BuyController::class, 'viewPurchase']);
Route::get('/checkout/{order}', [BuyController::class, 'viewCheckout'])->name('checkout');
Route::post('/proceed-to-payment', [BuyController::class, 'proceedToPayment']);
Route::post('/finalize-paypal', [BuyController::class, 'FinalizePayPal']);

Route::get('/dashboard', [DashboardController::class, 'viewDashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/notify-access/{purchase}', [DashboardController::class, 'notifyAccess'])->middleware(['auth'])->name('notify-access');

require __DIR__.'/auth.php';
