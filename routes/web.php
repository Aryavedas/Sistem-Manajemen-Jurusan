<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JurusanController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftarMahasiswa'])
    ->middleware('auth');

Route::get('/tabel-mahasiswa', [MahasiswaController::class, 'tebelMahasiswa'])
    ->middleware('auth');

Route::get('/blog-mahasiswa', [MahasiswaController::class, 'blogMahasiswa'])
    ->middleware('auth');

Route::get('/', [JurusanController::class, 'index'])->middleware('auth');

Route::resource('jurusans', JurusanController::class)->middleware('auth');

Route::get('jurusans/{jurusan}', [JurusanController::class, 'show'])
    ->name('jurusan.show')->middleware('auth')->middleware('can:view,jurusan');

