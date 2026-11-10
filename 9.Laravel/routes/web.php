<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginContorller;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WelcomeController;
use App\Http\Middleware\LoginMiddleware;
use App\Mail\EmailVM;
use Illuminate\Support\Facades\Route;

Route::get("/emailVM/{token}" ,[RegisterController::class, ("emailValidationMail")]);

Route::get('/', [WelcomeController::class, ('Welcome')]);

Route::get('/about', [AboutController::class, ('about')]);

Route::get('/register', [RegisterController::class, ('register')]);

Route::post('/register', [RegisterController::class, ('registerProcess')]);

Route::get('/login', [LoginContorller::class, ('login')]);

Route::post('/login', [LoginContorller::class, ('loginProcess')]);

Route::middleware([LoginMiddleware::class])->group(function(){
Route::get('/profile', [ProfileController::class, ('profile')]);});

Route::get("/logout", [LogoutController::class, ("logout")]);

Route::fallback([WelcomeController::class, ('Welcome')]);
