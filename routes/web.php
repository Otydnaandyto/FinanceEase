<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dasboard', function () {
    return view('dasboard/dasboard');
});

Route::get('/pemasukan', function () {
    return view('pemasukan/pemasukan');
});

Route::get('/pengeluaran', function () {
    return view('pengeluaran/pengeluaran');
});


