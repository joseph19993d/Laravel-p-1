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
     * @return array
     */
    public function rules()
    {
        return [
            //

                'name'=>'required|max:55',
                'descripcion'=>'required|min:5',
                'categoria'=>'required'




        ];
    }
    public function attributes()
    {
        return[
            'name'=>'nombre de curso '
        ];
    }
    public function messages()
    {
        return[

            'descripcion.required'=>'debe ingresar una descripcion del curso'
        ];
    }
}
