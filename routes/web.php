<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswa;

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
    return view('dashboard');
});

Route::get('/index',[siswa::class, 'index']);

Route::get('/index/tambah',[siswa::class , 'tambah']);

Route::post('/index/tambahData' ,[siswa::class, 'tambahData']);

Route::get('/index/update/{id}',[siswa::class, 'edit']);
// generateedit
Route::patch('/index/{id}', [siswa::class, 'update']);

Route::delete('/index/{id}', [siswa::class, 'delete']);
