<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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



Route::get('/telepulesek', function () {

    //$telepulesek = DB::table('telepulesek')->get();

        $telepulesek = \App\Models\Telepules::all();


    return view('telepulesek', ['telepulesek' => $telepulesek]);

});


Route::post('/telepulesek/mentes', function (Request $adatok) {
    
  //  DB::table('telepulesek')->insert([//
    
        \App\Models\Telepules::create([

    
        'city' => $adatok->input('city'),
        'population' => $adatok->input('population'),
        'bigcity' => $adatok->input('bigcity'),


        // 'created_at' => now(), 
        // 'updated_at' => now(),
    ]);

    return redirect('/telepulesek');
});



Route::get('/info', function () {
    return view('info');
});


Route::get('/teszt1', [App\Http\Controllers\TesztController::class, 'koszontes'] 
    
);
