<?php

namespace Videoclub\Http\Requests\Peliculas;

use Videoclub\Http\Requests\Request;

class PaisPelisRequest extends Request
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
            'nombre'=>'required|max:100',
            'escudo'=>'required|max:300'
        ];
    }
}
