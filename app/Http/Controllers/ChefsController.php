<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Http\Requests\ChefsRequest;
use Illuminate\Http\Request;

class ChefsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefs = Chef::all();
        foreach ($chefs as $chef) {
            $chef->load('restaurante');
        }
        return $chefs;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChefsRequest $request)
    {
        $chef = new Chef();
        $chef->rut = $request->rut;
        $chef->nombre = $request->nombre;
        $chef->especialidad = $request->especialidad;
        $chef->restaurante_id = $request->restaurante_id;
        $chef->save();
        return $chef;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function show(Chef $chef)
    {
        $chef->load('restaurante');
        return $chef;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chef $chef)
    {
        $chef->rut = $request->rut;
        $chef->nombre = $request->nombre;
        $chef->especialidad = $request->especialidad;
        $chef->restaurante_id = $request->restaurante_id;
        $chef->save();
        return $chef;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef $chef)
    {
        $chef->delete();
    }
}
