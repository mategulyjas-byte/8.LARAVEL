<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FallbackController extends Controller
{
    
function fallBack(){
    return redirect()->to("/")->with("error",__("The provided address did not exist"));
}

}
