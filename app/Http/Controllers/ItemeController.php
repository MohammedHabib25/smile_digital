<?php

namespace App\Http\Controllers;

use App\Models\Iteme;
use App\Models\Product;
use Illuminate\Http\Request;

class ItemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iteme = Iteme::with('product')->OrderBy('id' , 'desc')->paginate(12);

        return response()->view('front.iteme.index' , compact('iteme'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = Product::all();
        return response()->view('front.iteme.create' , compact('product'));    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Iteme::create($request->all());
        return redirect()->route('iteme.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
