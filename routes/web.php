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
Route::get('/videos', function () {
    return view('videos');
});
Route::get('/faq', function () {
    return view('faq');
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
Route::get('/real-technical-analysis', function () {
    return view('insights/real-ta');
});
Route::get('/mastering-your-mind', function () {
    return view('insights/mind');
});

// SHOP/PURCHASE/CHECKOUT ROUTES
Route::get('/purchase/{accesss}', [BuyController::class, 'viewPurchase'])->name('purchase');
Route::post('/start-purchase', [BuyController::class, 'startPurchase']);
Route::get('/view-terms/{order}', [BuyController::class, 'viewTerms'])->name('view-terms');
Route::post('/confirm-terms', [BuyController::class, 'confirmTerms']);
Route::post('/finalize-paypal', [BuyController::class, 'FinalizePayPal']);

// ADMIN DASHBOARD ROUTES
Route::get('/dashboard', [DashboardController::class, 'viewDashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/notify-access/{purchase}', [DashboardController::class, 'notifyAccess'])->middleware(['auth'])->name('notify-access');

require __DIR__.'/auth.php';
