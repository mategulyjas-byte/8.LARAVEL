<?php

namespace App\Http\Controllers;

class FallbackController extends Controller
{
    public function fallBack()
    {
        return redirect()->to('/')->with('error', __('The provided address did not exist'));
    }
}
