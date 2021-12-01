<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantesRequest extends FormRequest
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
            'nombre' => 'required|unique:restaurantes,nombre',
            'calle' => 'required',
            'ciudad' => 'required',
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'Debe ingresar el nombre del restaurante.',
            'nombre.unique' => 'El restaurante ya existe.',
            'calle.required' => 'Debe ingresar la calle del restaurante.',
            'ciudad.required' => 'Debe ingresar la ciudad donde se localiza el restaurante.'
        ];
    }
}
