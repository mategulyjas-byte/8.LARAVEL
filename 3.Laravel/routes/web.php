<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function (Request $request) {
//     dump($request->valami);
//     return view('welcome');
    
// });


Route::get('/a', function (Request $request) { 
$request->session()->put("kulcs", "érték");
   
});

Route::get('/b', function (Request $request) {   
dump($request->session()->get("kulcs"));
});


Route::get('/c', function (Request $request) {  
dump($request->session()->forget("kulcs"));
    
});



//Route::post("/", function(){ dump($_POST);});

//Route::post("/", function(Request $request ){ dump($request->all());});

//Route::post("/", function(Request $request ){ dump($request->name);});

// Route::post("/", function(Request $request ){ 
    
// dump($request->all());

// dump($_POST);
// ;});


Route::post("/", function(Request $request ){ 
    
dump($request->valami);

dump($_POST);

;});
