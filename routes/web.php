<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/item',[CobaController::class,'index']);

Route::get('/krs/{kode}/detail', function ($kode) {
    return view ('krs',['kode'=>$kode]);
});

use App\Http\Controllers\CobaController;
Route::get('/khs/{par1}/{par2}',[CobaController::class,'index'])->where(['par1'=>'[0-9]+','par2' => '[0-9]+']);

// folder master
Route::get('/master', function () {
    return view ('coba');
});

Route::get('/master2', function () {
    return view ('master2.layoutadminlte');
});
