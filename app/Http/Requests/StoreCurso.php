<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
     * @return array<string, mixed>
     */
    // Validaciones
    public function rules()
    {
        return [
            'nombre' => 'required|min:3|max:30',
            'descripcion' => 'required|min:10',
            'categoria' => 'required|min:3|max:25'
        ];
    }

    // Editar los atributos de los inputs
    public function attributes()
    {
        return [
            'categoria' => 'category'
        ];
    }

    // Personaliza los mensajes de error
    public function messages()
    {
        return [
            'nombre.required' => 'El campo nombre no puede ir vacío'
        ];
    }

}
