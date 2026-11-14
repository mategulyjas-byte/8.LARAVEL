<?php

namespace App\Http\Controllers;

class LanguageController extends Controller
{
    public function languageController($lang)
    {

        session()->put('language', $lang);

        return redirect()->back();
    }
}
