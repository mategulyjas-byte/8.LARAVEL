<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
function login(){
    return view("/login");
}


function loginProcess(Request $request){

$loginresult= Auth::attempt(["email"=>$request->email, "password"=>$request->password])

;
if($loginresult){
    return redirect()->to("/profile");
}

else{return redirect()->back();}
}

}
