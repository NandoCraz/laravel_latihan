<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AngkatanController;
use App\Http\Controllers\WalkelController;
use App\Http\Controllers\UserController;

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

Route::resource('data', DataController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('barang', BarangController::class);
Route::resource('kelas', KelasController::class);
Route::get('/kelas/delete/{id}', [KelasController::class,'destroy']);
Route::get('/data/delete/{id}', [DataController::class,'destroy']);
Route::get('/angkatan/delete/{id}', [AngkatanController::class,'destroy']);
Route::get('/siswa/delete/{id}', [SiswaController::class,'destroy']);
Route::get('/walkel/delete/{id}', [WalkelController::class,'destroy']);
Route::resource('angkatan', AngkatanController::class);
Route::resource('walkel', WalkelController::class);

Route::get('user',[UserController::class,'index']);
Route::get('user/edit/{id}',[UserController::class,'edit']);
Route::get('user/delete/{id}',[UserController::class,'destroy']);
Route::post('user/edit/{id}',[UserController::class,'update']);
Route::post('user/reset/{id}',[UserController::class,'reset']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

