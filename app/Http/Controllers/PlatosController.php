<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use App\Http\Requests\PlatosRequest;
use Illuminate\Http\Request;

class PlatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platos = Plato::all();
        foreach ($platos as $plato) {
            $plato->load('chef');
        }
        return $platos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlatosRequest $request)
    {
        $plato = new Plato();
        $plato->nombre = $request->nombre;
        $plato->descripcion = $request->descripcion;
        $plato->chef_id = $request->chef_id;
        $plato->precio = $request->precio;
        $plato->save();
        return $plato;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function show(Plato $plato)
    {
        $plato->load('chef');
        return $plato;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plato $plato)
    {
        $plato->nombre = $request->nombre;
        $plato->descripcion = $request->descripcion;
        $plato->chef_id = $request->chef_id;
        $plato->precio = $request->precio;
        $plato->save();
        return $plato;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plato $plato)
    {
        $plato->delete();
    }
}
