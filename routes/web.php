<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [Controller::class, 'viewlogin']);
Route::get('/dashboard',[Controller::class, 'viewdashboard']);
Route::post('/login',[Controller::class,'verifikasi']);
Route::get('/alternatif',[Controller::class,'viewalternatif']);
Route::get('/kriteria',[Controller::class,'viewkriteria']);
Route::get('/nilai_alternatif',[Controller::class,'viewnilaialternatif']);
Route::get('/hasil_hitung',[Controller::class,'viewhasilhitung']);
Route::get('/editkriteria/{id}',[Controller::class,'editkriteria']);
Route::get('/proses_hitung',[Controller::class,'viewproseshitung']);