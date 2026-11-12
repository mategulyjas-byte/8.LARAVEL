<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ChangingdataController extends Controller
{
    function changingdataView(){

    $title=__("Changin data");

    return view("changingdata", compact("title"));
    
    }



    function changingdataProcess(Request $request){

   $validated= $request->validate([

        "name"=>"required|min:1|max:50",

        "email"=>["required","email",Rule::unique("users")->ignore(Auth::id())],
        
    ]);

if($validated){
    Auth::user()->update($validated);

    return redirect()->to("/profile")->with("success",__("Your details have been successfully updated!"))
;}
    }
}
