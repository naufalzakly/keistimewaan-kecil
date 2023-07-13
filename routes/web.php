<?php

use App\Http\Controllers\AbkController;
use App\Http\Controllers\GejalaController;
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
    return view('home.index');
})->name('home.index');
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact.index');

Route::resource('/penyakit', GejalaController::class);
Route::resource('/abk', AbkController::class);
