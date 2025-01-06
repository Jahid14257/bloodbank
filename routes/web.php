<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bloodbank;


Route::post('/bankreg', [bloodbank::class,'bank']);
Route::post('/bloodcllection', [bloodbank::class,'bloodcllection']);
Route::post('/user', [bloodbank::class,'user']);
Route::get('/viewallbank', [bloodbank::class,'viewallbank']);
Route::get('/viewalluser', [bloodbank::class,'viewalluser']);

    