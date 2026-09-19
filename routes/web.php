<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswacontroller;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/mahasiswa',[Mahasiswacontroller::class, 'index']);