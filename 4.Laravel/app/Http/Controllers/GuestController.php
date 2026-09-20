<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //


    function registerview()

    {
        return view("register");
    }




    function registerprocess(Request $request)
    {
       $validated= $request->validate([
            "name" => "required|min:3|max:30",
            "email" => "required|email",
            "password"=>"required|min:1|max:20|confirmed"
        ]);

print_r ($validated);

        User::create($validated);

        dump($request->all());
    }
} 
