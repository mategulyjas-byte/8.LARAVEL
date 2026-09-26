<?php

use App\Http\Controllers\GuestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


 
Route::get("/", [GuestController::class, "registerView"]);



Route::post("/", [GuestController::class,"registerProcess"]);


Route::get("/login", [GuestController::class, "loginView"]);



Route::post("/login", [GuestController::class,"loginProcess"]);




Route::get("/profile", function(){

return "Üdv kedves". Auth::user()->name."! <a href=\"/logout\">Kilépés</a>";
})
;


Route::get("/logout", function(){
Auth::logout(); return redirect()->to("/login")->with("success",__("Logout"));
});