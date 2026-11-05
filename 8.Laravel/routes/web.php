<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SetLanguageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Middleware\OnlyforGuestsMiddleware;
use App\Http\Middleware\OnlyforuseresMiddlewre;
use App\Http\Middleware\SetlanguageMiddleware;
use Illuminate\Support\Facades\Route;

Route::get("/{lange}", [SetLanguageController::class, ("language")])->where("lange", "hu|en");




Route::middleware([SetlanguageMiddleware::class])->group(function(){
Route::get('/', [WelcomeController::class, ('welcome')]
);


Route::middleware([OnlyforGuestsMiddleware::class])->group(function(){

Route::get('/registration', [RegisterController::class, ('register')]);

Route::post('/registration', [RegisterController::class, ('registerprocess')]);

Route::get('/login', [LoginController::class, ('login')]);

Route::post('/login', [LoginController::class,  ('loginProcess')]);

});

Route::get('/profile', [ProfileController::class, ('profile')])->middleware([OnlyforuseresMiddlewre::class]);

Route::get("/logout", [LogoutController::class, ("logout")]) ;

});