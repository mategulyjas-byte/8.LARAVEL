<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $title = __('Welcome');


        $comments= json_decode(file_get_contents("https://jsonplaceholder.typicode.com/comments"));





        return view('welcome', compact('title',"comments"));
    }
}
