<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    //


    function registerView()

    {
        return view("/register");
    }

  function loginView()

    {
        return view("/login");
    }






    
function loginProcess(Request $request){
$loginresult= Auth::attempt(["email"=>$request->email, "password"=>$request->password ], $request->remember)    
;
if ($loginresult) {
    return redirect()->to('/profile');
}
else{return redirect()->back()->with("error",__("Failled"));};




}






    function registerProcess(Request $request)
    {
       $validated= $request->validate([
            "name" => "required|min:3|max:30",
            "email" => "required|email",
            "password"=>"required|min:1|max:20|confirmed"
        ]);

//print_r ($validated);

        User::create($validated);


       // $request->session()->flash("success", __("It's okay"));

      // ez vagy a back  return redirect()->to("/");

       // return redirect()->back();

//vagy rövídítve a with

return redirect()->back()->with("success", __("OK"));


    }
} 
