<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function profile()
    {

        $title = __('Profile');

        return view('/profile', compact('title'));
    }
}
