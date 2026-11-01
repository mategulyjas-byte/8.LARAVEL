<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, ('welcome')]
);


Route:: get("/registration", [RegisterController::class, ("register")]);

Route:: post("/registration",[RegisterController:: class, ("registerprocess")]);