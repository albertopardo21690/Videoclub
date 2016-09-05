<?php

namespace Videoclub\Peliculas;

use Illuminate\Database\Eloquent\Model;

class GenerosPelis extends Model
{
    protected $table = 'generos_pelis';

    protected $primaryKey = 'idGenerosPelis';

    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];

    protected $guarded = [

    ];
}
