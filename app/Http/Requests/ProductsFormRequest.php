<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsFormRequest extends FormRequest
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
            
            'codigo'=>'required|max:50',
            'nombre'=>'required|max:100',
            'slug'=>'max:100',
            'stock'=>'required|numeric',
            'tipo'=>'required',
            'descripcion'=>'max:512',
            'imagen'=>'mimes:jpeg,bmp,png',
            'precio'=>'max:100',
            'idlocal'=> 'required'
        ];
    }
}
