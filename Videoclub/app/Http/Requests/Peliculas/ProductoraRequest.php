<?php

namespace Videoclub\Http\Requests\Peliculas;

use Videoclub\Http\Requests\Request;

class ProductoraRequest extends Request
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
            'logo'=>'mimes:jpeg,bmp,png,gif,svg',
            'nombre'=>'required|max:250',
            'web'=>'required|max:500'
        ];
    }
}
