<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    

function loginView(){
    return view("login");
}

function loginProcess(Request $request){
   $result= Auth::attempt(["email"=>$request->email, "password"=>$request->password], $request->remember);

   if ($result) {
return redirect()->to("/profile")   ; }

else {
    return redirect()->back()->with("error", __("Unsuccessful login, incorrect login details")); }
   

}
}