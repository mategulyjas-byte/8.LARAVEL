<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {


$name= "Angéla";
$age= 37;


    return view('welcome', compact( "name", "age"));
});


Route::get("/registration", function(){

return view("registrationform");
});

Route::post("/registration", function(Request $request){

print ($request->name);

});



Route::get("/make", function(Request $request){
    $request->session()->put("kulcs", "érték");
});

Route::get("/see", function(Request $request){
return($request->session()->get("kulcs"));

});

Route:: get("/unset" ,function(Request $request){

$request->session()->forget("kulcs");
});