<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    function logout(){

    Auth::logout(); 
    return redirect()->to("/login")->with("success",__("Successful logout"));

    }

    function getlogout(){return redirect()->to("/login");}
}
