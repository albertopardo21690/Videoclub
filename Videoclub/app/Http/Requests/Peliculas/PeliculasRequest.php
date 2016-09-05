<?php

namespace Videoclub\Http\Requests\Peliculas;

use Videoclub\Http\Requests\Request;

class PeliculasRequest extends Request
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
            'idgeneros_pelis'=>'required',
            'idproductora'=>'required',
            'idpais'=>'required',
            'caractura'=>'mimes:jpeg,png,gif,bmp,svg,tiff',
            'trailer'=>'required|max:500',
            'banda_sonora'=>'required|max:500',
            'titulo_peli'=>'required|max:200',
            'ano'=>'required|max:5',
            'duracion'=>'required|max:50',
            'director'=>'required|max:250',
            'musica'=>'required|max:100',
            'guion'=>'required|max:100',
            'fotografia'=>'required|max:100',
            'reparto'=>'required|max:1000',
            'link_web'=>'required|max:200',
            'sinopsis'=>'required|max:1000'
        ];
    }
}
