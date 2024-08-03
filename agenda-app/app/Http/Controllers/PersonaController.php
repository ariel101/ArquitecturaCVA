<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Persona::all();

        return view('personas.index', [
            'personas' => $personas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $persona = Persona::create($input);
        return  view('personas.show', [
            'persona' => $persona
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
       return view('personas.show',[
        'persona'=>$persona
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        return view('personas.edit',[
            'persona'=>$persona
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        $input = $request->all();
        $persona->update($input);
        return  view('personas.show', [
            'persona' => $persona
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
