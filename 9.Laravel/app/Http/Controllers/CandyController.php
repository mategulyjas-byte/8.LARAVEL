<?php

namespace App\Http\Controllers;

use App\Models\Candy;
use Illuminate\Http\Request;

class CandyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {$title=__("candies");

        return view("Candies.candy", compact("title") );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate(
    ["name"=>"required|min:1|max:80",
    "taste"=>"required|in:chocolate,fruits",
    "diet"=>"required|in:lactosfree,vegan"]);

    if ($validated) {
    Candy::create($validated);}
    ;}



    /**
     * Display the specified resource.
     */
    public function show(Candy $candy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candy $candy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candy $candy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candy $candy)
    {
        //
    }
}
