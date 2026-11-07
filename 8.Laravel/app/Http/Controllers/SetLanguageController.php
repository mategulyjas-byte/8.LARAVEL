<?php

namespace App\Http\Controllers;

class SetLanguageController extends Controller
{
    public function language($lange)
    {

        session()->put('langkey', $lange);

        return redirect()->back();

    }
}
