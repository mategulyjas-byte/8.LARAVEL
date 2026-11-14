<?php

namespace App\Http\Controllers;

class StyleController extends Controller
{
    public function colorProcess($color)
    {

        if (in_array($color, ['dark', 'light'])) {
            session()->put('colorstyle', $color);

            return redirect()->back();
        }
    }
}
