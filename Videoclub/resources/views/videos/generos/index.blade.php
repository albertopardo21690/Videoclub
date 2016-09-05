@extends ('layouts.admin') @section ('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Géneros de Películas <a href="generos/create"><button type="button" class="btn btn-primary"><i class="fa fa-plus"> Nuevo</i></button></a></h3> @include('videos.generos.search')
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </thead>

                @foreach ($generos_pelis as $gen)
                <tr>
                    <td>{{$gen->nombre}}</td>
                    <td>
                        <a href="{{URL::action('Peliculas\GenerosPelisController@edit',$gen->idGenerosPelis)}}"><button type="button" class="btn btn-info"><i class="fa fa-refresh"> Editar</i></button></a>
                        <a href="" data-target="#modal-delete-{{$gen->idGenerosPelis}}" data-toggle="modal"><button type=" button " class="btn btn-danger "><i class="fa fa-trash-o "> Eliminar</i></button></a>
                    </td>
                </tr>
                @include('videos.generos.modal') @endforeach
            </table>
        </div>

        {{$generos_pelis->render()}}

    </div>
</div>
@endsection