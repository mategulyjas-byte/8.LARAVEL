<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function language($lang)
    {

        Session::put('langkey', $lang);

        return redirect()->back();
    }
}
