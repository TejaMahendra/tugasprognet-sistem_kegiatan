<?php

use App\http\Controllers\detail_kegiatanController;
use App\http\Controllers\kegiatanController;
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

Route::resource('db_detail_kegiatan', detail_kegiatanController::class);
Route::resource('db_kegiatan', kegiatanController::class);