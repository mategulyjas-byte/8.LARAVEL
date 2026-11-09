<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function about()
    {

        $title = __('About');

        return view('/about', compact('title'));
    }
}
