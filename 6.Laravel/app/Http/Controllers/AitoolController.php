<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Aitool;


use Illuminate\Http\Request;

class AitoolController extends Controller
{
    












/**
     * Display a listing of the resource.
     */
    public function index()
    {
 $aitools = Aitool::all();
        return view("aitools.index", compact("aitools"));



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
                return view("aitools.create",compact("categories"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

        "name"=>"required|string|max:255|min:3",
        "category_id"=>"required|exists:categories,id",
        "description"=>"required|string|min:1",
        "link"=>"required|url",
        "price"=>"nullable|numeric"
        ]);

        Aitool::create($request->all());

return redirect()->route("aitools.index")->with("success","Az Ai eszköz sikeresen hozzáadva")

    ;}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aitool =Aitool::find($id);
        return view("aitools.show", compact("aitool"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
