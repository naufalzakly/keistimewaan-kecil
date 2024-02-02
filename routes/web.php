<?php

use App\Http\Controllers\AbkController;
use App\Http\Controllers\AnalisaController;
use App\Http\Controllers\ConfusionController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\AdminController;
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
Route::get('/analisa', [AnalisaController::class, 'index'])->name('analisa.index');
Route::get('/confusion', [ConfusionController::class, 'index'])->name('confusion.index');
Route::get('/rekap', [RekapController::class, 'index'])->name('rekap.index');

Route::get('/penyakit', [GejalaController::class, 'index'])->name('penyakit.index');
Route::post('/penyakit/store', [GejalaController::class, 'store'])->name('abk.index');

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.auth.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.auth.post.login');
    Route::post('/dashboard', [AdminController::class, 'login'])->name('admin.dashboard');
    Route::get('/home', [AdminController::class, 'home'])->name('admin.home');

    Route::post('/dashboard', [AdminController::class, 'dashboard']); // Adjust if necessary
    Route::match(['get', 'post'], '/dashboard/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/dashboard/create', [AdminController::class, 'store'])->name('admin.store.create');
    Route::get('/dashboard/edit/{id}', [AdminController::class , 'edit'])->name('admin.edit');
    Route::put('/dashboard/update/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/dashboard/delete/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Add other admin routes as needed
});