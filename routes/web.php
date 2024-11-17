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
    return view('welcome');
});
use App\Http\Controllers\PageController;
Route::get('5026221156', [PageController::class, 'show5026221156'])->name('5026221156');
Route::get('Style', [PageController::class, 'style'])->name('style');
Route::get('Style 2', [PageController::class, 'style2'])->name('style2');
Route::get('form', [PageController::class, 'form'])->name('form');
Route::get('hello', [PageController::class, 'hello'])->name('hello');
Route::get('tugasLinktreeRiotGames', [PageController::class, 'tugasLinktreeRiotGames'])->name('tugasLinktree');
Route::get('responsive1', [PageController::class, 'responsive1'])->name('responsive1');

use App\Http\Controllers\PegawaiDBController;
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);
