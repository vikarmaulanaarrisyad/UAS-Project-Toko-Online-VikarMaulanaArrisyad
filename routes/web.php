<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\HistoryrController;


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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('pesan/{id}', [PesanController::class, 'index']);

Route::post('pesan/{id}', [PesanController::class, 'pesan']);

Route::get('check-out', [PesanController::class, 'check_out']);

Route::delete('check-out/{id}', [PesanController::class, 'delete']);

Route::get('konfirmasi-check-out',[PesanController::class, 'konfirmasi']);

Route::get('profile', [UserController::class, 'index']);
Route::post('profile', [UserController::class, 'update']);

Route::get('history', [HistoryrController::class, 'index'])->name('home');
Route::get('history/{id}', [HistoryrController::class, 'detail'])->name('home');
