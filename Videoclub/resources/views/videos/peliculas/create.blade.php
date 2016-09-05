@extends ('layouts.admin') @section ('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Nueva Película</h3> @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif {!!Form::open(array('url'=>'videos/peliculas','method'=>'POST','autocomplete'=>'off','files'=>true))!!} {{Form::token()}}

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="caractura">Caractura de la Película</label>
                <input type="file" name="caractura" class="form-control">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="titulo_peli">Título</label>
                <input type="text" name="titulo_peli" class="form-control" placeholder="Título de la película" required>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="ano">Año</label>
                <input type="text" name="ano" class="form-control" placeholder="Año de la película" required>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="duracion">Duración de la Película</label>
                <input type="text" name="duracion" class="form-control" placeholder="Duración de la película" required>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>País</label>
                <select name="idpais" class="form-control">
                    @foreach ($pais_peli as $pais_peli)
                        <option value="{{$pais_peli->idPais}}">{{$pais_peli->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="director">Director de la Película</label>
                <input type="text" name="director" class="form-control" placeholder="Director de la película" required>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="guion">Guionista de la Película</label>
                <input type="text" name="guion" class="form-control" placeholder="Guinista de la película" required>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="musica">Compositor de la Película</label>
                <input type="text" name="musica" class="form-control" placeholder="Compositor de la película" required>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="fotografia">Fotográfo de la Película</label>
                <input type="text" name="fotografia" class="form-control" placeholder="Fotográfo de la película" required>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="reparto">Reparto de la Película</label>
                <textarea class="form-control" name="reparto" id="reparto" cols="20" rows="5"></textarea>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Productora</label>
                <select name="idproductora" class="form-control">
                    @foreach ($productora as $pro)
                        <option value="{{$pro->idProductora}}">{{$pro->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label>Género de la Película</label>
                <select name="idgeneros_pelis" class="form-control">
                    @foreach ($generos_pelis as $gen)
                        <option value="{{$gen->idGenerosPelis}}">{{$gen->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="link_web">Link de la Web de la Película</label>
                <input type="text" name="link_web" class="form-control" placeholder="Link de la Web de la película" required>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="sinopsis">Sinopsis</label>
                <textarea class="form-control" name="sinopsis" id="sinopsis" cols="20" rows="5"></textarea>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="trailer">Trailer</label>
                <input type="text" name="trailer" class="form-control" placeholder="Trailer de la película">
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="banda_sonora">Banda Sonora</label>
                <input type="text" name="banda_sonora" class="form-control" placeholder="Banda Sonora de la película" required>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-danger">Borrar</button>
                <a href="/videos/peliculas"><button type="button" class="btn btn-success">Atrás</button></a>
            </div>
        </div>

        {!!Form::close()!!}

    </div>
</div>
@endsection