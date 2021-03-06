<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use App\Http\Requests\RestaurantesRequest;
use Illuminate\Http\Request;

class RestaurantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Restaurante::all();
        //returnar por orden
        //return Restaurante::orderBy('ciudad')->get();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RestaurantesRequest $request)
    {
        $restaurante = new Restaurante();
        $restaurante->nombre = $request->nombre;
        $restaurante->calle = $request->calle;
        $restaurante->ciudad = $request->ciudad;
        $restaurante->save();
        return $restaurante;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurante $restaurante)
    {
        return $restaurante;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurante $restaurante)
    {   
        $restaurante->nombre = $request->nombre;
        $restaurante->calle = $request->calle;
        $restaurante->ciudad = $request->ciudad;
        $restaurante->save();
        return $restaurante;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurante $restaurante)
    {
        $restaurante->delete();
    }
}
