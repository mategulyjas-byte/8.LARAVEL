<?php

namespace App\Http\Controllers;

use App\Mail\EmailVerificationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function registerView()
    {
        return view('register');
    }

    public function registerProcess(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|min:1|max:60',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:1|max:20|confirmed',
        ]);

        $user = User::create($validated);

        $token = Str::random(64);

        $user->verification_token = $token;

        $user->save();

        Mail::to($user->email)->send(new EmailVerificationMail($user->name, $token));

        return redirect()->to('/login');
    }

    //     public function emailRegister($token)
    //     {

    //         $user = User::where('verification_token', $token)->first();
    //         if ($user == null) {
    //             return redirect()->to('/register');
    //         }
    //         $user->verification_token = null;

    //         $user->save();

    //         Auth::login($user);

    //         return redirect()->to('/profile');
    //     }
    // }

    public function emailRegister($token)
    {

        $user = User::where('verification_token', $token)->first();

        if (!$user) 
            abort(403);
        

        if($user->email_verified_et)
            abort(422);


        $user->update(["email_verified_at" =>now(),
        "verification_token"=> Str::random(64)
        
        
        ]);
    
    
    return redirect()->to("login");    }
}
