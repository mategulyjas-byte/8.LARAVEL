<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function welcome()
    {

        $title = __('Welcome');

        return view('welcome', compact('title'));
    }
}
