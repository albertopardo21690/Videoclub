@extends ('layouts.admin') @section ('contenido')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif {!!Form::model($peliculas,['method'=>'PATCH','route'=>['videos.peliculas.update',$peliculas->idpeliculas],'files'=>'true'])!!} {{Form::token()}}

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>Editar la Película: {{$peliculas->titulo_peli}}</h3>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                @if (($peliculas->caractura)!="")
                <p><img src="{{asset('/images/videos/peliculas/'.$peliculas->caractura)}}" class="img-responsive" width="357px" alt=""></p>
                @endif
            </div>
        </div>

        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="caractura">Caractura de la Película</label>
                <input type="file" name="caractura" class="form-control">
            </div>
        </div>

        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="nombre">Trailer</label>
                <input type="text" name="trailer" class="form-control" value="{{$peliculas->trailer}}">
            </div>
        </div>

        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="banda_sonora">Banda Sonora</label>
                <input type="text" name="banda_sonora" class="form-control" value="{{$peliculas->banda_sonora}}" required>
            </div>
        </div>

        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="titulo_peli">Título</label>
                <input type="text" name="titulo_peli" class="form-control" value="{{$peliculas->titulo_peli}}" required>
            </div>
        </div>

        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="ano">Año</label>
                <input type="text" name="ano" class="form-control" value="{{$peliculas->ano}}" required>
            </div>
        </div>

        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="duracion">Duración de la Película</label>
                <input type="text" name="duracion" class="form-control" value="{{$peliculas->duracion}}" required>
            </div>
        </div>

        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label>País</label>
                <select name="idpais" class="form-control">
                    @foreach ($pais_peli as $pais)
                        @if ($pais->idPais==$peliculas->idpais)
                            <option value="{{$pais->idPais}}" selected>{{$pais->nombre}}</option>
                        @else
                            <option value="{{$pais->idPais}}">{{$pais->nombre}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="director">Director de la Película</label>
                <input type="text" name="director" class="form-control" value="{{$peliculas->director}}" required>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="guion">Guionista de la Película</label>
                <input type="text" name="guion" class="form-control" value="{{$peliculas->guion}}" required>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="musica">Compositor de la Película</label>
                <input type="text" name="musica" class="form-control" value="{{$peliculas->musica}}" required>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="fotografia">Fotográfo de la Película</label>
                <input type="text" name="fotografia" class="form-control" value="{{$peliculas->fotografia}}" required>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="reparto">Reparto de la Película</label>
                <textarea class="form-control" name="reparto" id="reparto" cols="20" rows="5">{{$peliculas->reparto}}</textarea>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label>Productora</label>
                <select name="idproductora" class="form-control">
                    @foreach ($productora as $pro)
                        @if ($pro->idProductora==$peliculas->idproductora)
                            <option value="{{$pro->idProductora}}" selected>{{$pro->nombre}}</option>
                        @else
                            <option value="{{$pro->idProductora}}">{{$pro->nombre}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label>Género de la Película</label>
                <select name="idgeneros_pelis" class="form-control">
                    @foreach ($generos_pelis as $gen)
                        @if ($gen->idGenerosPelis==$peliculas->idgeneros_pelis)
                            <option value="{{$gen->idGenerosPelis}}" selected>{{$gen->nombre}}</option>
                        @else
                            <option value="{{$gen->idGenerosPelis}}">{{$gen->nombre}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="link_web">Link de la Web de la Película</label>
                <input type="text" name="link_web" class="form-control" value="{{$peliculas->link_web}}" required>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="sinopsis">Sinopsis</label>
                <textarea class="form-control" name="sinopsis" id="sinopsis" cols="20" rows="5">{{$peliculas->sinopsis}}</textarea>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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