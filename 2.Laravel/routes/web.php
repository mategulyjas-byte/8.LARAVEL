<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

//$list = file_get_contents("https://jsonplaceholder.typicode.com/users");
//print_r ($list);

//$list = file_get_contents("https://jsonplaceholder.typicode.com/users");
//dd($list);

// $list = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/users"));
// dd($list);



$list = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/users"));


    return view('welcome', ["listaablédnek"=>$list]);
});



Route::get('/rolunk',function(){

return view('rolunk');});















Route::get("/json", function(){return view("json");});


 Route::get('/view/api', function () {
    return view('api');
});
