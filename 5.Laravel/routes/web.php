<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LogoutController;
use App\Http\Middleware\OnlyForUsers;
use App\Http\Middleware\OnlyGuests;
use App\Http\Middleware\OnlyLogoutUsers;
use App\Http\Middleware\NotLogout;



Route::get('/', [IntroductionController::class,"introductionView"])->middleware(OnlyGuests::class);


Route::get('/register', [RegisterController::class,"registerView"])->middleware(OnlyGuests::class);


Route::post('/register', [RegisterController::class,"registerProcess"]);


Route::get('/login', [LoginController::class,"loginView"])->middleware(OnlyGuests::class);

Route::post('/login', [LoginController::class,"loginProcess"]);


Route::get('/profile', [ProfileController::class,"profile"])
->middleware([OnlyForUsers::class]);


Route::post('/logout', [LogoutController::class,"logout"]);
Route::get('/logout', [LogoutController::class,"getlogout"])->middleware([NotLogout::class]);



