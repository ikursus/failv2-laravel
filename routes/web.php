<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SuratKeluarController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'halamanUtama']);
// Kaedah Routing Laravel 7 dan kebawah
// Route::get('/', 'PageController@halamanUtama');


Route::get('/login', [PageController::class, 'halamanLogin']);

Route::get('/surat-masuk', function () {
    return view('welcome');
});

Route::get('/surat-keluar', [SuratKeluarController::class, 'index']);
Route::get('/surat-keluar/create', [SuratKeluarController::class, 'create']);
Route::post('/surat-keluar/create', [SuratKeluarController::class, 'store']);

Route::get('/surat-keluar/{id}', [SuratKeluarController::class, 'show'])
->where('id', '[0-9]+');
