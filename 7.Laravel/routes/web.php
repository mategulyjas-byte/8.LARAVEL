<?php

use App\Http\Controllers\GuestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name = 'Angéla';
    $age = 37;

    return view('welcome', compact('name', 'age'));
});

Route::get('/registration', function (Request $request) {

    return view('registrationform');
});

Route::post('/registration', function (Request $request) {

    // print ($request->name);

    // dump($_POST);
    // dump($request->all());

    $request->validate([
        'name' => 'required|min:1|max:20',

    ]);
    dump($request->all());
});

Route::get('/make', function (Request $request) {
    $request->session()->put('kulcs', 'érték');
});

Route::get('/see', function (Request $request) {
    return $request->session()->get('kulcs');

});

Route::get('/unset', function (Request $request) {

    $request->session()->forget('kulcs');
});

Route::get('/register1', [GuestController::class, 'registerview']);

Route::post('/register1', [GuestController::class, 'registerprocess']);
