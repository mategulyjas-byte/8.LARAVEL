<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('/login');
    }

    public function loginProcess(Request $request)
    {


$verifiedlist=User::wherenotNull("email_verified_at")->get();


Auth::attempt(["email"=> $request->email, "password"=> $request->password]);


$user= Auth::user();


if($verifiedlist->contains("email", $user->email)){

return redirect()->to("/profile");
}







// $verified= User::where("email", $request->email)->wherenotnull("email_verified_at")->first();



// if($verified){

//         $loginresult =Auth::attempt(['email' => $request->email, 'password' => $request->password,], $request->remember_);

        
//         if ($loginresult) {
//             return redirect()->to('/profile');}


//         }
        
        else {
            Auth::logout();
            return redirect()->back()->with('error', __('Incorrect login details'))->withInput();
        }
}}
