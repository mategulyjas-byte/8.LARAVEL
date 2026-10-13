<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout()
    {

        Auth::logout();

        return redirect()->to('/login')->with('success', __('Successful logout'));

    }

    public function getlogout()
    {
        return redirect()->to('/login');
    }
}
