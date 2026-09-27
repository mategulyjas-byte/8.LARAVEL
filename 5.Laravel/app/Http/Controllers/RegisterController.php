<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    function registerView(){
        return view("register");
    }


    
function registerProcess(Request $request){
    $validated=$request->validate([
    "name"=>"required|min:1|max:60",
    "email"=>"required|email",
    "password"=>"required|min:1|max:20|confirmed",
    ]);
    
        $user= User::create($validated);

        Auth::login($user);

     return    redirect()->to("/profile");
        

    }}

