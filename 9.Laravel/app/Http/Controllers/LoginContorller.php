<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginContorller extends Controller
{
    public function login()
    {
        $title = __(('Login'));

        return view('login', compact('title'));
    }

    public function loginProcess(Request $request)
    {

        $guest = User::where('email', $request->email)->wherenotNull('email_verified_at')->first();

        if ($guest) {

            $user = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

            if ($user) {
                return redirect()->to('/profile');
            }
        } else {
            return redirect()->back();
        }
    }
}
