<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/buy-now', function () {
    return view('buy-now');
});
// Route::get('/', 'HomeController@index')->name('home');
// Route::post('/import-xls', 'HomeController@importXls');
