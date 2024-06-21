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

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index']);

Route::get('/signin', [App\Http\Controllers\Auth\LoginController::class, 'index']);
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index']);
Route::post('/signin', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('/menu', [App\Http\Controllers\Auth\IntegratedController::class, 'index']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::post('/ubahGudang', [App\Http\Controllers\Auth\GudangController::class, 'store'])->name('ubahGudang');
Route::get('/editGudang/{id}', [App\Http\Controllers\Auth\GudangController::class, 'edit'])->name('gudang.edit');
Route::get('/editGudang/{id}', [App\Http\Controllers\Auth\GudangController::class, 'update'])->name('gudang.update');

Route::get('/barang', [App\Http\Controllers\Auth\BarangController::class, 'index']);
Route::post('/addBarang', [App\Http\Controllers\Auth\BarangController::class, 'store'])->name('tambah');
Route::post('/addKategori', [App\Http\Controllers\Auth\BarangController::class, 'storeKat'])->name('tambahKat');

Route::get('/editBarang/{id}', [App\Http\Controllers\Auth\BarangController::class, 'edit'])->name('barang.edit');
Route::put('/editBarang/{id}', [App\Http\Controllers\Auth\BarangController::class, 'update'])->name('barang.update');

Route::delete('/editBarang/{id}', [App\Http\Controllers\Auth\BarangController::class, 'destroy'])->name('barang.destroy');

Route::get('/historiBarang',[App\Http\Controllers\Auth\BarangController::class, 'tampilRecord']);
Route::delete('/historiBarang/{id}', [App\Http\Controllers\Auth\BarangController::class, 'destroyRecord'])->name('log.destroy');

Route::get('/pengiriman', [App\Http\Controllers\Auth\ShipmentController::class, 'index']);
Route::get('/addShipmentView', [App\Http\Controllers\Auth\ShipmentController::class, 'create']);
Route::post('/addShipment', [App\Http\Controllers\Auth\ShipmentController::class, 'store']);
Route::get('/shipmentDetail/{id}', [App\Http\Controllers\Auth\ShipmentController::class, 'show'])->name('shipDetail.show');
Route::post('/shipmentEdit/{id}', [App\Http\Controllers\Auth\ShipmentController::class, 'edit'])->name('shipDetail.edit');

Route::get('/admin', [App\Http\Controllers\Auth\RegisterController::class, 'indexAdmn']);
Route::post('/daftarAdmin', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('daftar');
Route::get('/updateAdmin/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'edit'])->name('admin.edit');
Route::put('/updateAdmin/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'update'])->name('admin.update');
Route::delete('/updateAdmin/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'destroy'])->name('admin.destroy');
