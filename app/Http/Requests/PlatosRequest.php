<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlatosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|unique:platos,nombre',
            'descripcion' => 'required',
            'chef_id' => 'required',
            'precio' => 'required|gte:1000',
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'Debe ingresar el nombre del del plato.',
            'nombre.unique' => 'El nombre del plato ya existe.',
            'descripcion.required' => 'Debe ingresar una descripción para el plato.',
            'chef_id.required' => 'Debe seleccionar el chef que creó el plato.',
            'precio.required' => 'Debe ingresar el precio del plato.',
            'precio.gte' => 'El precio debe ser mayor o igual a 1.000',
        ];
    }
}
