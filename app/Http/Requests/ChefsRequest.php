<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChefsRequest extends FormRequest
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
            'rut' => 'required|min:11|unique:chefs,rut',
            'nombre' => 'required',
            'especialidad' => 'required',
            'restaurante_id' => 'required',
        ];
    }

    public function messages(){
        return [
            'rut.required' => 'Debe ingresar el rut del chef.',
            'rut.min' => 'El rut debe ser de una longitud mínima de 11 carácteres, incluídos los puntos y guión.',
            'rut.unique' => 'El chef ya existe.',
            'nombre.required' => 'Debe ingresar el nombre del chef.',
            'especialidad.required' => 'Debe ingresar la especialidad del chef.',
            'restaurante_id.required' => 'Debe seleccionar el restaurante donde trabaja el chef.'
        ];
    }
}
