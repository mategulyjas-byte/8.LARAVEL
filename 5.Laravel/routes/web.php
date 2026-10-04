<?php

use App\Http\Controllers\FallbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LogoutController;
use App\Http\Middleware\OnlyForUsers;
use App\Http\Middleware\OnlyForGuests;
use App\Http\Middleware\OnlyLogoutUsers;
use App\Http\Middleware\NotLogout;
use App\Http\Middleware\SetLanguage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\LangueageController;



Route::middleware([SetLanguage::class])->group(function(){

Route::get("/{lang}", [LanguageController::class,"language"])->where("lang","hu|en");

Route::middleware([SetLanguage::class])->group(function(){

Route::get('/', [IntroductionController::class,"introductionView"]);

Route::middleware([OnlyForGuests::class])->group( function(){
Route::get('/register', [RegisterController::class,"registerView"]);
Route::post('/register', [RegisterController::class,"registerProcess"]);
Route::get('/login', [LoginController::class,"loginView"])->middleware(OnlyForGuests::class);
Route::post('/login', [LoginController::class,"loginProcess"])

;});
Route::middleware([OnlyForUsers::class])->group(function(){
Route::get('/profile', [ProfileController::class,"profile"]);
Route::get('/logout', [LogoutController::class,"getlogout"]);
Route::post('/logout', [LogoutController::class,"logout"]);
;});

;});

Route::fallback([FallbackController::class, "fallback"]);

});