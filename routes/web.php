<?php

use App\Http\Controllers\Pengadaan;
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

Route::get('/azis', function () {
    return view('welcome');
});

Route::get('dashboardsip', function () {
return view('template.template');
});


Route::get('pembelian', [Pengadaan::class,'tampilPengadaan'])->name('pembelian');



