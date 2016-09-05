<?php

namespace Videoclub\Peliculas;

use Illuminate\Database\Eloquent\Model;

class Productora extends Model
{
    protected $table = 'productora';

    protected $primaryKey = 'idProductora';

    public $timestamps = false;

    protected $fillable = [
        'logo',
        'nombre',
        'web'
    ];

    protected $guarded = [

    ];
}
