<?php

namespace App\Http\Controllers;

use App\Mail\ForgottPass;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;



class ForgottPassController extends Controller
{
    

function forgottPassView(){

$title=__("Forgot password");

return view("forgottpass", compact("title"));}


function forgottPassSend(Request $request){

 $forgettuser= User::where("email",$request->email)->first();

 if($forgettuser){

 $newpass= $forgettuser->password= Str::random(1);

 //$forgettuser->save();

 Mail::to($forgettuser->email)->send(new ForgottPass($forgettuser->name, $forgettuser->email, $newpass));

 }

}


function forgottPassProcess($newpass, $email){

$activuser=User::where("email",$email)->first();

if($activuser){
    $activuser->password = $newpass;

    $activuser->save();
}

}

}
