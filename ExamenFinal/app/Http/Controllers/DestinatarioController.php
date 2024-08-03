<?php

namespace App\Http\Controllers;

use App\Models\Destinatario;
use Illuminate\Http\Request;

class DestinatarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $destinatario = Destinatario::all();
        return view('destinatario.index', [
            'destinatario' => $destinatario
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('destinatario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        //print_r($input);

        $destinatario = new Destinatario();

        $destinatario->nombre = $input['nombre'];
        $destinatario->cargo = $input['cargo'];
        

        $destinatario->save();
        return redirect()->route('destinatario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destinatario $destinatario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destinatario $destinatario)
    {
        //
        return view ('destinatario.edit',[
            'destinatario' => $destinatario
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destinatario $destinatario)
    {
        //
        $input = $request->all();
        $destinatario->update($input);
        return  view('destinatario.show', [
            'destinatario' => $destinatario
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destinatario $destinatario)
    {
        //
        $destinatario->delete();
        return redirect()->route('destinatario.index');
    }
}
