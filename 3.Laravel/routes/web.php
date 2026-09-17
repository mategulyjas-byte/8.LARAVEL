<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function (Request $request) {
//     dump($request->valami);
//     return view('welcome');
    
// });



// Route::get('/a', function (Request $request) { 

// $request->user()->name;

// Auth::user()->name;

// Auth::logout();  

// });





// Route::get('/a', function (Request $request) { 
// $request->session()->put("kulcs", "érték");
   
// });

// Route::get('/b', function (Request $request) {   
// dump($request->session()->get("kulcs"));
// });


// Route::get('/c', function (Request $request) {  
// dump($request->session()->forget("kulcs"));
    
// });


// post, get session, cookies, auth user




//Route::post("/", function(){ dump($_POST);});

//Route::post("/", function(Request $request ){ dump($request->all());});

//Route::post("/", function(Request $request ){ dump($request->name);});

// Route::post("/", function(Request $request ){ 
    
// dump($request->all());

// dump($_POST);
// ;});


Route::get("/", function(){ return view("welcome");});




Route::post("/", function(Request $request){ 
    
$request->validate([

    "name"=> "required|min:3|max:70",
    
    "email"=> "required|email"
]);

dump($request->all());});



// Route::post("/", function(Request $request ){ 
    
// dump($request->valami);

// dump($_POST);

// ;});



    //  unique:users, email"
