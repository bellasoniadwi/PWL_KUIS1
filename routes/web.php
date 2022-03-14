<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\BarangController;
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


Route::get('/', [PageController::class, 'beranda']);
Route::get('/beranda', [PageController::class, 'beranda']);
Route::get('/produk', [BarangController::class, 'index']);
Route::get('/klien', [PageController::class, 'klien']);
Route::get('/tim', [PageController::class, 'tim']);
Route::get('/supplier', [PageController::class, 'supplier']);
Route::get('/tentang', [PageController::class, 'tentang']);
Route::get('/hubungi', [PageController::class, 'hubungi']);