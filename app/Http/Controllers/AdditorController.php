<?php

namespace App\Http\Controllers;

use App\Models\Additor;
use App\Models\Prod;
use Illuminate\Http\Request;

class AdditorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addit = Additor::with('prod')->OrderBy('id' , 'desc')->paginate(12);

        return response()->view('en.additor.index' , compact('addit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prod = Prod::all();
        return response()->view('en.additor.create' , compact('prod')); 
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Additor::create($request->all());
        return redirect()->route('additor.create');
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
