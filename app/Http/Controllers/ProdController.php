<?php

namespace App\Http\Controllers;

use App\Models\Prod;
use Illuminate\Http\Request;

class ProdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prod  =  Prod::all();
        return view('admin.prod.index',compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prod.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Prod::create($request->all());
        return redirect()->route('prod.create');
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
        $prod  =   Prod::find($id);
        //   echo $products;
           $prod->delete();
            return redirect()->route('prod.index');
    }
}
