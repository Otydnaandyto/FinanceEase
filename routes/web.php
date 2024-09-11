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

//



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard', [
        "title" => "dasboard"

    ]);
});

Route::get('/pemasukan', function () {
    return view('pemasukan/pemasukan', [
        "title" => "pemasukan"
    ]);
});

Route::get('/pengeluaran', function () {
    return view('pengeluaran/pengeluaran', [
        "title" => "pengeluaran"
    ]);
});


