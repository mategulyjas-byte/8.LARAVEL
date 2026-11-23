<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CandyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangingdataController;
use App\Http\Controllers\DeleteProfileController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ForgottPassController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LoginContorller;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NewPassController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\WelcomeController;
use App\Http\Middleware\LaguageMiddlevare;
use App\Http\Middleware\LoginMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/{color}', [StyleController::class, ('colorProcess')])->where('color', 'dark|light');

Route::get('/emailVM/{token}', [RegisterController::class, ('emailValidationMail')]);

Route::middleware([LaguageMiddlevare::class])->group(function () {

    Route::get('/{lang}', [LanguageController::class, ('languageController')])->where('lang', 'en|hu');

    Route::get('/', [WelcomeController::class, ('Welcome')]);

    Route::get('/about', [AboutController::class, ('about')]);

    Route::get('/register', [RegisterController::class, ('register')]);

    Route::post('/register', [RegisterController::class, ('registerProcess')]);

    Route::get('/login', [LoginContorller::class, ('login')]);

    Route::post('/login', [LoginContorller::class, ('loginProcess')]);

    Route::get('/forgottpass', [ForgottPassController::class, ('forgottPassView')]);
    Route::post('/forgottpass', [ForgottPassController::class, ('forgottPass')]);

    Route::get('/forgottpass/{password_token}', [ForgottPassController::class, ('forgottPassVerified')]);

    Route::get('/newpass', [NewPassController::class, ('newPassView')]);

    Route::post('/newpass', [NewPassController::class, ('newPassProcess')]);

    // Route::get("/forgottpass", [ForgottPassController::class, ("forgottPassView")]);
    // Route::post("/forgottpass", [ForgottPassController::class, ("forgottPassSend")]);
    // Route::get("/forgottpass/{newpass}/{email}", [ForgottPassController::class, ("forgottPassProcess")]);

    Route::middleware([LoginMiddleware::class])->group(function () {
        Route::get('/profile', [ProfileController::class, ('profile')]);

        Route::get('/changingdata', [ChangingdataController::class, ('changingdataView')]);

        Route::post('/changingdata', [ChangingdataController::class, ('changingdataProcess')]);

        Route::get('/delete', [DeleteProfileController::class, ('deleteProfile')]);

        Route::resource('/candy', CandyController::class);

        Route::resource("/Category", CategoryController::class);

        Route::resource("/Foods", FoodController::class);


    });

    Route::get('/logout', [LogoutController::class, ('logout')]);

    Route::fallback([WelcomeController::class, ('Welcome')]);

});
