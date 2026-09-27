<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    function profile(){

    $userdata= Auth::user();

    return  view("profile", compact("userdata"));
    }
};
