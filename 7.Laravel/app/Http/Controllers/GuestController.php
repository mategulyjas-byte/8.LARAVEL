<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function registerview()
    {

        return view('/register1');
    }

    public function registerprocess(Request $request)
    {

        $request->validate([
            'name' => 'required|min:1|max:20',
            'email' => 'required|email', ]
        );
    }
}
