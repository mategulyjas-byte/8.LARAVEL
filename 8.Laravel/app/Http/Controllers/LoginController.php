<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('/login');
    }

    public function loginProcess(Request $request)
    {

        $loginresult = Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember_);
        if ($loginresult) {
            return redirect()->to('/profile');
        } else {
            return redirect()->back()->with('error', __('Incorrect login details'))->withInput();
        }
    }
}
