<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $libros = Libro::all();
        return view('libros.index', [
            'libros' => $libros
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $libro = new Libro();
        //print_r($input);
        $libro->titulo = $request->input('titulo');
        $libro->editorial_id = $request->input('editorial_id');
        $libro->edicion = $request->input('edicion');
        $libro->pais = $request->input('pais');
        $libro->precio = $request->input('precio');
        $libro->save();
        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        //
        return view('libros.edit',[
            'libros' => $libro
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {
        //
        $input = $request->all();
        $libro->update($input);
        return  view('libros.show', [
            'libros' => $libro
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        //
        $libro->delete();
        return redirect()->route('libros.index');
    }
}
