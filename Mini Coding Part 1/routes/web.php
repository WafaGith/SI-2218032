<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenumpangController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('data_pemesanan', function () {
    return view('admin/data_pemesanan');
})->name('datapemesanan');

// Perhatikan penggunaan sintaks array di sini
Route::get('/data-penumpang', [PenumpangController::class, 'index'])->name('data-penumpang');
Route::get('/create-penumpang', [PenumpangController::class, 'create'])->name('create-penumpang');
Route::post('/store-penumpang', [PenumpangController::class, 'store'])->name('store-penumpang');

Route::get('/penumpang/{id}/edit', [PenumpangController::class, 'edit'])->name('data-edit');
Route::put('/penumpang/{id}', [PenumpangController::class, 'update'])->name('penumpang.update');
