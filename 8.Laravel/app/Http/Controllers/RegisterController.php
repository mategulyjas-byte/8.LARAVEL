<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        User::create($validated);

        return redirect()->back()->with('success', __('Successful registration'));

    }
}
