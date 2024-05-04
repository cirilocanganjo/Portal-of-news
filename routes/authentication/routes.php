<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

Route::controller(AuthenticationController::class)->group(function(){
    
    Route::get('/login','pagelogin')->name('login.index');
    Route::get("/autenticacao", 'login')->name('login.authentication');
});
