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

Route::get('/signin', [App\Http\Controllers\Auth\LoginController::class, 'index']);
Route::post('/signin', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('/daftarAdmin', [App\Http\Controllers\Auth\RegisterController::class, 'create']);
Route::post('/daftarAdmin', [App\Http\Controllers\Auth\RegisterController::class, 'store']);