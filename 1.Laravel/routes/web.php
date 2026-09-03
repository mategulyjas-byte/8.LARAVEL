<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/rolunk', function () {
    return view('rolunk');
});

Route::get('/info', function () {
    return view('info');
});


Route::get('/teszt1', [App\Http\Controllers\TesztController::class, 'koszontes'] 
    
);
