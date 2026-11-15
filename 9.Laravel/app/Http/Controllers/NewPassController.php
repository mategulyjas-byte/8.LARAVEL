<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewPassController extends Controller
{
    public function newPassView()
    {

        $title = __("New password");

        return view('newpass', compact('title'));
    }

    public function newPassProcess(Request $request)
    {

        $validated = $request->validate(['password' => 'required|min:1|max:60']);

        if ($validated) {
            Auth::user()->update($validated);

            return redirect()->to('/profile');
        }

    }
}
