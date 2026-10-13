<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {

        $userdata = Auth::user();

        return view('profile', compact('userdata'));
    }
}
