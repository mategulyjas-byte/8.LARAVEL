<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/rolunk', function () {

    $emberek = DB::table('gyakorlas3')->get();

    return view('rolunk', ['emberek' => $emberek]);

});

Route::get('/users', function () {

    $emberek = DB::table('_gyak4')->get();

    return view('users', ['emberek' => $emberek]);

});





Route::get('/info', function () {
    return view('info');
});


Route::get('/teszt1', [App\Http\Controllers\TesztController::class, 'koszontes'] 
    
);
