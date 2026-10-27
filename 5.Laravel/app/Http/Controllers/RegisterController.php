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
            'password' => 'required|min:1|max:20|confirmed',  //vailálok
        ]);

        $user = User::create($validated);   // létrehozom a User táblában a felhaszlót
        $token = Str::random(64);           //generálok egy random stringet 64 karekter hossza
        $user->verification_token = $token;     //  usernek az érvényestő tokenje az egyenlő a küldött tokennel
        $user->save();                          //mentem
        Mail::to($user->email)->send(new EmailVerificationMail($user->name, $token));
        // emailt készítekt a user emailcímére küldöm ( példányostott at és átadom a nevet és a tokent)
        return redirect()->to('/login');  //visszírányítom  belépés oldalra
    }

    public function emailRegister($token)  //emailkontroller
    {$user = User::where('verification_token', $token)->first();
    // user megkeresem a User táblában ahol(a verifcazion_token egyenlő az érkezett tokennel)
        if (!$user)  // ha mincs user akkor 403 hibát dobok
            abort(403);
        if($user->email_verified_et)   //ha verifikálva volt már az email akkor 422 hibát dobok
            abort(422);
        $user->update(["email_verified_at" =>now(),  //egyébként updatelem a mostni időpontra az emailverified-ot
        "verification_token"=> Str::random(64) //  Vverification tokent is felülírom
        ]);
    return redirect()->to("login");    }  // elirányítok a belépés oldalra
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
