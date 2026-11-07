<?php

namespace App\Http\Controllers;

use App\Mail\EmailVerificationMail;
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

    public function registerprocess(Request $request)
    {

        $validated = $request->validate(
            ['name' => 'required|min:1|max:50',
                'email' => 'required|email|',
                'password' => 'required|min:1|max:50|confirmed']
        );
        $user = User::create($validated);

        $token = Str::random(20);
        $user->verification_token = $token;
        $user->save();

        Mail::to($user->email)->send(new EmailVerificationMail($user->name, $token));

        return redirect()->to('/');
    }

    public function emailRegister($token)
    {

        $user = User::where('verification_token', $token)->first();

        if (! $user) {
            abort(403);
        }

        if ($user->email_verified_at) {
            abort(422);
        } else {
            $user->update(['email_verified_at' => now(),

                'verification_token' => Str::random(10)]);

            return redirect()->to('/login');
        }

    }

    // return redirect()->back()->with('success', __('Successful registration'));

}
