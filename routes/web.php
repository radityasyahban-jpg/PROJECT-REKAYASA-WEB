<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswacontroller;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/profile',[Mahasiswacontroller::class, 'index']);

Route::get('/about', function () {
    return view('page.about');
});


