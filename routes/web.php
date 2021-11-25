<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CarianController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

Route::get('/', [PageController::class, 'halamanUtama']);
// Kaedah Routing Laravel 7 dan kebawah
// Route::get('/', 'PageController@halamanUtama');


Route::get('/login', [PageController::class, 'halamanLogin']);

Route::get('/carian', [CarianController::class, 'index']);

Route::get('/surat-masuk', [SuratMasukController::class, 'index']);
Route::get('/surat-masuk/create', [SuratMasukController::class, 'create']);
Route::post('/surat-masuk/create', [SuratMasukController::class, 'store']);

Route::get('/surat-keluar', [SuratKeluarController::class, 'index']);
Route::get('/surat-keluar/create', [SuratKeluarController::class, 'create']);
Route::post('/surat-keluar/create', [SuratKeluarController::class, 'store']);

Route::get('/surat-keluar/{id}', [SuratKeluarController::class, 'show'])
->where('id', '[0-9]+');
