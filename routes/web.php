<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MahasiswaController;

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
Route::get('form', function () {
    return view('form');
});

Route::get('/mahasiswa',[MahasiswaController::class, 'create']);
Route::post('/simpan', [MahasiswaController::class, 'store']);
Route::get('/data',[MahasiswaController::class, 'index']);
Route::get('/edit/{id}',[MahasiswaController::class, 'edit']);
Route::post('/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/delete/{id}',[MahasiswaController::class, 'destroy']);

