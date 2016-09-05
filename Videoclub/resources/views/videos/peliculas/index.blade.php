@extends ('layouts.admin') @section ('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="lista" style="display: block">
        <h3>Listado de Películas <a href="peliculas/create"><button type="button" class="btn btn-instagram"><i class="fa fa-plus"> Nuevo</i></button></a></h3> @include('videos.peliculas.search')
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="row container-fluid">
            @foreach ($peliculas as $pel)
            <div class="col-lg-2">
                <a href="{{$pel->link_web}}">
                    <p>
                        <img style="width: 500px; height: 350px" class="img-thumbnail" src="{{asset('/images/videos/peliculas/'.$pel->caractura)}}" alt="{{$pel->titulo_peli}}">
                    </p>
                </a>

                <p>
                    <center>
                        <a href="" data-target="#modal-trailer-{{$pel->idpeliculas}}" data-toggle="modal"><button type="button" class="btn btn-github"><i> Ver Trailer</i></button></a>
                        <a href="" data-target="#modal-bso-{{$pel->idpeliculas}}" data-toggle="modal"><button type="button" class="btn btn-warning"><i> Oír BSO</i></button></a>
                    </center>
                </p>
                <p>
                    <a href="" data-target="#modal-show-{{$pel->idpeliculas}}" data-toggle="modal"><button type="button" class="btn btn-success"><i class="fa fa-eye"> Ver</i></button></a>
                    <a href="{{URL::action('Peliculas\PeliculasController@edit',$pel->idpeliculas)}}"><button type="button" class="btn btn-info"><i class="fa fa-refresh"> Editar</i></button></a>
                    <a href="" data-target="#modal-delete-{{$pel->idpeliculas}}" data-toggle="modal"><button type=" button " class="btn btn-danger "><i class="fa fa-trash-o "> Eliminar</i></button></a>
                </p>
            </div>
            @include('videos.peliculas.modal') @include('videos.peliculas.show') @include('videos.peliculas.trailer') @include('videos.peliculas.bso') @endforeach
        </div>

        {{$peliculas->render()}}

    </div>
</div>

</div>
@endsection