<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Animal;

class AnimalController extends Controller
{
    // táblázat lekérése 
    public function allatok()
    {
        $allatok = Animal::all();

        return view('animals', compact('allatok'));
    }   
// input a táblázatba
 public function store(Request $request)
    {
        Animal::create([
            'name' => $request->input('name'),
            'haziallat' => $request->input('haziallat'),
        ]);

        return redirect('/animals');
    }
// törlés a táblázatból
public function destroy($id)
{
    Animal::destroy($id);
    
    return redirect('/animals');
}
}








