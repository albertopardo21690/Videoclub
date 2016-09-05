<?php

namespace Videoclub\Peliculas;

use Illuminate\Database\Eloquent\Model;

class PaisPelis extends Model
{
    protected $table = 'pais_peli';

    protected $primaryKey = 'idPais';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'escudo'
    ];

    protected $guarded = [

    ];
}
