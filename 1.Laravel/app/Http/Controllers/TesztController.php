<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesztController extends Controller
{
        public function koszontes()
    {
        return "Szia! Ezt a szöveget a TesztController küldte neked!";
    }

}
   