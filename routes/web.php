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
Route::get('/insights', function () {
    return view('insights');
});
Route::get('/terms-of-use', function () {
    return view('terms');
});
// ERROR VIEW - CONTROLLER SENDS MESSAGE
Route::get('/problem', function () {
    return view('problem');
});

// NOT IN USE

// Route::get('/olympus-suite', function () {
//     return view('olympus-suite');
// });
// Route::get('/pricing', function () {
//     return view('pricing');
// });

// BLOG/INSIGHTS ROUTES
Route::get('/probability-and-random-distribution', function () {
    return view('insights/probability');
});
Route::get('/the-truth-about-technical-analysis', function () {
    return view('insights/real-ta');
});
Route::get('/mastering-your-mind', function () {
    return view('insights/mind');
});
Route::get('/accuracy-and-profitability', function () {
    return view('insights/accuracy');
});
Route::get('/trading-signals-versus-results', function () {
    return view('insights/signals-results');
});
Route::get('/the-truth-about-leverage', function () {
    return view('insights/truth-leverage');
});

// SHOP/PURCHASE/CHECKOUT ROUTES
Route::get('/purchase/{accesss}', [BuyController::class, 'viewPurchase'])->name('purchase');
Route::post('/start-purchase', [BuyController::class, 'startPurchase']);
Route::get('/view-terms/{order}', [BuyController::class, 'viewTerms'])->name('view-terms');

Route::post('/finalize-paypal', [BuyController::class, 'FinalizePayPal']);
Route::get('/transaction-complete', function () {
    return view('transaction-complete');
});
Route::group(['middleware' => 'prevent-back-history'],function(){
    Route::post('/confirm-terms', [BuyController::class, 'confirmTerms']);
});

// ADMIN DASHBOARD ROUTES
Route::get('/dashboard', [DashboardController::class, 'viewDashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/notify-access/{purchase}', [DashboardController::class, 'notifyAccess'])->middleware(['auth'])->name('notify-access');
Route::get('/notify-update', [DashboardController::class, 'notifyUpdate'])->middleware(['auth'])->name('notify-update');

require __DIR__.'/auth.php';
