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


// Ha be vagyok jelentkezve és a főoldalt írom be akor a profilba irányít
// if (Auth::check()) {return redirect()->to("profile");  return $next($request);}
Route::get('/', [IntroductionController::class,"introductionView"])->middleware(OnlyGuests::class);


// Ha be vagyok jelentkezve és a regisztert írom be akor a profilba irányít
Route::get('/register', [RegisterController::class,"registerView"])->middleware(OnlyGuests::class);
Route::post('/register', [RegisterController::class,"registerProcess"]);


// Ha be vagyok jelentkezve és a bejelentkezést írom be akor a profilba irányít
Route::get('/login', [LoginController::class,"loginView"])->middleware(OnlyGuests::class);
Route::post('/login', [LoginController::class,"loginProcess"]);


// Ha nem vagyok belépve de beírom a profilt akkor a login oldalra irányít
// if (!Auth::check()) {return  redirect()->to("/login")->with("error",__("Log in first"); }return $next($request);}
Route::get('/profile', [ProfileController::class,"profile"])
->middleware([OnlyForUsers::class]);


// a get-es logoutot írok be miközben be vagyok lépve, akkor elirányít a főoldalra,
// de mivel be vagyok lépve ezért rögtön visszaíránytt a profilba
Route::get('/logout', [LogoutController::class,"getlogout"]);
Route::post('/logout', [LogoutController::class,"logout"]);




