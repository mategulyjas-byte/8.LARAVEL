<?php

use App\Http\Controllers\GuestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


 
Route::get("/", [GuestController::class, "registerview"]);



Route::post("/", [GuestController::class,"registerprocess"])
;

