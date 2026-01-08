<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('login');
});

// route login
Route::post('/login', [LoginController::class, 'login']);

// route admin
Route::get('/admin', [AdminController::class, 'admin']);

// routing CRUD Barang
Route::get('/admin/barang', [AdminController::class, 'barang']);
Route::get('/admin/barang/tambah', [AdminController::class, 'tambah_barang']);
Route::get('/admin/barang/edit/{id}', [AdminController::class, 'edit_barang']);
Route::get('/admin/barang/delete/{id}', [AdminController::class, 'delete_barang']);
Route::post('/admin/barang/simpan', [AdminController::class, 'simpan_barang']);
Route::post('/admin/barang/update/{id}', [AdminController::class, 'update_barang']);

// route kasir
Route::get('/kasir', function () {
    return view('kasir.beranda');
});

// routing laporan
Route::get('/admin/laporan', [LaporanController::class, 'index']);
Route::get('/admin/laporan/barang', [LaporanController::class, 'cetak_barang']);
