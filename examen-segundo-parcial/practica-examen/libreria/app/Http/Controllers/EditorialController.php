<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $editorial = Editorial::all();
        return view('editorial.index', [
            'editorial' => $editorial
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('editorial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $editorial = new Editorial();
        //print_r($input);
        $editorial->nombre = $request->input('nombre');
        $editorial->save();
        return redirect()->route('editorial.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Editorial $editorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editorial $editorial)
    {
        //
        return view('editorial.edit',[
            'editorial' => $editorial
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editorial $editorial)
    {
        //
        $input = $request->all();
        $editorial->update($input);
        return  view('editorial.show', [
            'editorial' => $editorial
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editorial $editorial)
    {
        //
        $editorial->delete();
        return redirect()->route('editorial.index');
    }
}
