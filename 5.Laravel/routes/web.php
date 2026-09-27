<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LogoutController;




Route::get('/', [IntroductionController::class,"introductionView"]);


Route::get('/register', [RegisterController::class,"registerView"]);


Route::post('/register', [RegisterController::class,"registerProcess"]);


Route::get('/login', [LoginController::class,"loginView"]);

Route::post('/login', [LoginController::class,"loginProcess"]);


Route::get('/profile', [ProfileController::class,"profile"]);


Route::post('/logout', [LogoutController::class,"logout"]);
