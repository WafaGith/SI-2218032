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
    return view('dashboard');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('create-penumpang', function () {
    return view('create-penumpang');
})->name('penumpang');

// Route Penumpang
Route::get('/penumpang', [PenumpangController::class, 'index'])->name('penumpang');
Route::get('/create-penumpang', [PenumpangController::class, 'create'])->name('create-penumpang');
Route::post('/store-penumpang', [PenumpangController::class, 'store'])->name('store-penumpang');
Route::get('/edit-penumpang/{id}', [PenumpangController::class, 'edit'])->name('edit-penumpang');
Route::PUT('/update-penumpang/{id}', [PenumpangController::class, 'update'])->name('update-penumpang');
Route::get('/delete-penumpang/{id}', [PenumpangController::class, 'destroy'])->name('delete-penumpang');
Route::get('/pdf-penumpang', [PenumpangController::class, 'exportpdf'])->name('pdf-penumpang');



Route::get('data_pemesanan', function () {
    return view('admin/data_pemesanan');
})->name('datapemesanan');
