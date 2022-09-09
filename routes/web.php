<?php

use App\Http\Controllers\API\MahasiswaController;
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

Route::get('/mahasiswa/show/{id}', [MahasiswaController::class, 'show']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/asx', [MahasiswaController::class, 'testing']);
Route::get('/destroy/{id}', [MahasiswaController::class, 'destroy']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/token', function () {
    return csrf_token();
});
