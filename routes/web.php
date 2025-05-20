<?php

use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PrestasiController;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\Route;
use App\Models\Informasi;
use App\Models\Prestasi;

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

Route::get('/', [FrontController::class, 'index']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/team', [FrontController::class, 'team']);
Route::get('/informasi', [FrontController::class, 'informasi']);
Route::get('/fasilitas', [FrontController::class, 'fasilitas']);
Route::get('/eskul', [FrontController::class, 'eskul']);
Route::get('/prestasi', [FrontController::class, 'prestasi']);
Route::get('/detail-informasi/{id}', [FrontController::class, 'detailinformasi'])->name('detail.informasi');


Auth::routes(['register' => false]); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {
Route::resource('informasi', InformasiController::class);
Route::resource('karyawan', KaryawanController::class);
Route::resource('eskul', EskulController::class);
Route::resource('fasilitas', FasilitasController::class);
Route::resource('prestasi', PrestasiController::class);
});