<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;


class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $input = $request->all();
        $pais = Pais::create($input);
        return $pais;
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $pais = Pais::find($id);
        if($pais==null)
        {
            return 
        }
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $pais = Pais::find($id);
        if($pais == null){
            return response()->json([
                'mensaje'=>'no se encontro el pais'
            ],404);
        }
        $input = 

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
