<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DeleteProfileController extends Controller
{
    public function deleteProfile()
    {

        Auth::user()->delete();

        return redirect()->to('/register')->with('success', Auth::user()->name.__("profile's was deleted"));
    }
}
