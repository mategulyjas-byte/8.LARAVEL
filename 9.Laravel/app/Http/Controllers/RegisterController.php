<?php

namespace App\Http\Controllers;

use App\Mail\EmailVM;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    public function register()
    {

        $title = __('Registration');

        return view('register', compact('title'));
    }

    public function registerProcess(Request $request)
    {

        $validated = $request->validate([

            'name' => 'required|min:1|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:1|max:20|confirmed',

        ]);

        if ($validated) {
          $user= User::create($validated);
        $token= Str::random(10);
          $user->verified_token= $token;
          $user->save();

        Mail::to($user->email)->send(new EmailVM ($user->name, $token) );

            return redirect()->to('/login')->with("success",__('Registration successful! To log in, open the confirmation email sent to your email account and click the confirmation button.'));
        } else {
            return redirect()->to('/register')->with("error",__('Registration failed! Correct the provided details and try again!
'));
        }

    }

function emailValidationMail($token){

$user= User::where("verified_token", $token )->first();

if(!$user){abort(404);}

if($user->email_verified_at){
    abort(402,__("You have already confirmed your email address."));}

// else{ $user->email_verified_at=now();
//         $user->verified_token= Str::random(20);
// $user->save();
// }

else{$user->update( ["email_verified_at"=>now(), "verified_token"=>Str::random(20)]);}

return redirect()->to("/login");
    }





}



