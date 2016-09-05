@extends ('layouts.admin') @section ('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Países de Películas <a href="pais/create"><button type="button" class="btn btn-primary"><i class="fa fa-plus"> Nuevo</i></button></a></h3> @include('videos.pais.search')
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Escudos</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </thead>

                @foreach ($pais_peli as $pais)
                <tr>
                    <td>
                        <img src="{{asset('/images/videos/pais/'.$pais->escudo)}}" alt="{{$pais->nombre}}" class="img-responsive" width="50px">
                    </td>
                    <td>{{$pais->nombre}}</td>
                    <td>
                        <a href="{{URL::action('Peliculas\PaisPelisController@edit',$pais->idPais)}}"><button type="button" class="btn btn-info"><i class="fa fa-refresh"> Editar</i></button></a>
                        <a href="" data-target="#modal-delete-{{$pais->idPais}}" data-toggle="modal"><button type=" button " class="btn btn-danger "><i class="fa fa-trash-o "> Eliminar</i></button></a>
                    </td>
                </tr>
                @include('videos.pais.modal') @endforeach
            </table>
        </div>

        {{$pais_peli->render()}}

    </div>
</div>
@endsection