@extends ('layouts.admin') @section ('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Productoras Cinematográficas <a href="productora/create"><button type="button" class="btn btn-primary"><i class="fa fa-plus"> Nuevo</i></button></a></h3> @include('videos.productora.search')
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Logo</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </thead>

                @foreach ($productora as $pro)
                <tr>
                    <td>
                        <a href="{{$pro->web}}">
                            <img class="img-thumbnail" src="{{asset('/images/videos/productora/'.$pro->logo)}}" alt="{{$pro->nombre}}" width="100px" height="100px">
                        </a>
                    </td>
                    <td>{{$pro->nombre}}</td>
                    <td>
                        <a href="{{URL::action('Peliculas\ProductoraController@edit',$pro->idProductora)}}"><button type="button" class="btn btn-info"><i class="fa fa-refresh"> Editar</i></button></a>
                        <a href="" data-target="#modal-delete-{{$pro->idProductora}}" data-toggle="modal"><button type=" button " class="btn btn-danger "><i class="fa fa-trash-o "> Eliminar</i></button></a>
                    </td>
                </tr>
                @include('videos.productora.modal') @endforeach
            </table>
        </div>

        {{$productora->render()}}

    </div>
</div>
@endsection