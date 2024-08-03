<?php

namespace App\Http\Controllers;

use App\Models\Correspondencia;
use App\Models\Destinatario;
use Illuminate\Http\Request;

class CorrespondenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $correspondencia = Correspondencia::all();
        return view('correspondencia.index', [
            'correspondencia' => $correspondencia
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('correspondencia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        //print_r($input);

        $correspondencia = new Correspondencia();

        $correspondencia->fecha = $input['fecha'];
        $correspondencia->remitente = $input['remitente'];
        $correspondencia->asunto = $input['asunto'];
        $correspondencia->asunto = $input['cite'];

        $correspondencia->save();
        return redirect()->route('correspondencia.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Correspondencia $correspondencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Correspondencia $correspondencia)
    {
        //
        return view ('correspondencia.edit',[
            'correspondencia' => $correspondencia
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Correspondencia $correspondencia)
    {
        //
        $input = $request->all();
        $correspondencia->update($input);
        return  view('correspondencia.show', [
            'correspondencia' => $correspondencia
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Correspondencia $correspondencia)
    {
        //
        $correspondencia->delete();
        return redirect()->route('correspondencia.index');
    }
}
