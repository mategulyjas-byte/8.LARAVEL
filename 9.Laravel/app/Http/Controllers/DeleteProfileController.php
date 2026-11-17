<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DeleteProfileController extends Controller
{
    function deleteProfile(){

        Auth::user()->delete();

        return redirect()->to("/register")->with("success", Auth::user()->name. __("profile's was deleted"))

    ;}
}
