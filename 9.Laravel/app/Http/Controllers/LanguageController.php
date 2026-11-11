<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    function languageController($lang){

    session()->put("language",$lang);
    return redirect()->back();
    }
}
