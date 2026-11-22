<?php

namespace App\Http\Controllers;

use App\Mail\ForgottPass;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgottPassController extends Controller
{
    public function forgottPassView()
    {

        $title = __('Forgot password');

        return view('forgottpass', compact('title'));
    }

    public function forgottPass(Request $request)
    {

        $forgottuser = User::where('email', $request->email)->first();

        if ($forgottuser) {
            $forgottuser->password_token = Str::random(50);
            $forgottuser->save();

            Mail::to($forgottuser->email)->send(new ForgottPass($forgottuser->password_token, $forgottuser->name));

            return redirect()->to('/login')->With('success', __('To access your account, open your email inbox, click the button in the email you received, enter your new password, and you will be able to log in to your account.'));
        }
    }

    public function forgottPassVerified($password_token)
    {
        $activuser = User::where('password_token', $password_token)->first();

        if ($activuser) {
            Auth::login($activuser);
            $activuser->password_token = Str::random(50);
            $activuser->save();

            return redirect()->to('newpass');

        } else {
            return redirect()->to('/');
        }
    }
}

// function forgottPassView(){

// $title=__("Forgot password");

// return view("forgottpass", compact("title"));}

// function forgottPassSend(Request $request){

//  $forgettuser= User::where("email",$request->email)->first();

//  if($forgettuser){

//  $newpass= $forgettuser->password= Str::random(1);

//  //$forgettuser->save();

//  Mail::to($forgettuser->email)->send(new ForgottPass($forgettuser->name, $forgettuser->email, $newpass));

//  }

// }

// function forgottPassProcess($newpass, $email){

// $activuser=User::where("email",$email)->first();

// if($activuser){
//     $activuser->password = $newpass;

//     $activuser->save();
// }

// }

// }
