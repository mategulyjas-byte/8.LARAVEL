<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SetLanguageController extends Controller
{
    function language($lange){

    session()->put("langkey", $lange);
   
    return redirect()->back();
   
    }
}
