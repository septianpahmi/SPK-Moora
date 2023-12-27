<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\SubkriteriaController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/kriteria', [KriteriaController::class, 'index']);
Route::post('/kriteria/post', [KriteriaController::class, 'post']);
Route::get('/kriteria/delete/{id}', [KriteriaController::class, 'delete']);
Route::get('/kriteria/edit/{id}', [KriteriaController::class, 'edit']);
Route::post('/kriteria/edit/update/{id}', [KriteriaController::class, 'update']);

Route::get('/dashboard/sub-kriteria', [SubkriteriaController::class, 'index']);
Route::post('/sub-kriteria/post/{id}', [SubkriteriaController::class, 'post']);
Route::get('/sub-kriteria/tambah/{id}', [SubkriteriaController::class, 'tambah']);
Route::get('/sub-kriteria/delete/{id}', [SubkriteriaController::class, 'delete']);
Route::get('/sub-kriteria/edit/{id}', [SubkriteriaController::class, 'edit']);
Route::post('/sub-kriteria/edit/update/{id}', [SubkriteriaController::class, 'update']);

Route::get('/dashboard/hotel', [HotelController::class, 'index']);
Route::post('/hotel/post', [HotelController::class, 'post']);
Route::get('/hotel/delete/{id}', [HotelController::class, 'delete']);
Route::get('/hotel/edit/{id}', [HotelController::class, 'edit']);
Route::post('/hotel/edit/update/{id}', [HotelController::class, 'update']);

Route::get('/dashboard/penilaian', [PenilaianController::class, 'index']);
Route::post('/penilaian/post/{id}', [PenilaianController::class, 'post']);
Route::get('/penilaian/tambah/{id}', [PenilaianController::class, 'tambah']);
Route::get('/penilaian/edit/{id}', [PenilaianController::class, 'edit']);
Route::post('/penilaian/edit/update/{id}', [PenilaianController::class, 'update']);

Route::get('/dashboard/perhitungan', [PenilaianController::class, 'MatriksKeputusan']);
Route::get('/dashboard/hasil-akhir', [PenilaianController::class, 'tampilkanPengurutan']);