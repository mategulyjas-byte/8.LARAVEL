<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class LanguageController extends Controller
{

function language($lang){

  Session::put("langkey",$lang);

return redirect()->back()
;}
};