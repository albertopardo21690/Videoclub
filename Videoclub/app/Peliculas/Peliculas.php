<?php

namespace Videoclub\Peliculas;

use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    protected $table = 'peliculas';

    protected $primaryKey = 'idpeliculas';

    public $timestamps = false;

    protected $fillable = [
        'idgeneros_pelis',
        'idproductora',
        'idpais_peli',
        'caractura',
        'trailer',
        'banda_sonora',
        'titulo_peli',
        'ano',
        'duracion',
        'director',
        'musica',
        'guion',
        'fotografia',
        'reparto',
        'link_web',
        'sinopsis'
    ];

    protected $guarded = [

    ];
}