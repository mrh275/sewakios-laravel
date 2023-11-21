<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListRukoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SewaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LoginController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/sewa', [SewaController::class, 'index']);
Route::get('/admin/sewa/tambah', [SewaController::class, 'tambah']);
Route::post('/admin/sewa/store', [SewaController::class, 'store']);
Route::get('/admin/sewa/edit/{nomorKontrak}', [SewaController::class, 'edit']);
Route::get('/admin/sewa/hapus/{nomorKontrak}', [SewaController::class, 'hapus']);
Route::post('/admin/sewa/update', [SewaController::class, 'update']);
Route::get('/admin/ruko', [ListRukoController::class, 'index']);
Route::get('/admin/ruko/tambah', [ListRukoController::class, 'tambah']);
Route::post('/admin/ruko/store', [ListRukoController::class, 'store']);
Route::get('/admin/ruko/edit/{no_unit}', [ListRukoController::class, 'edit']);
Route::get('/admin/ruko/hapus/{no_unit}', [ListRukoController::class, 'hapus']);
Route::post('/admin/ruko/update', [ListRukoController::class, 'update']);
