@extends ('layouts.admin') @section ('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Editar Productora: {{$productora->nombre}}</h3>
        <center>
            <p>
                @if (($productora->logo)!="")
                <img class="img-responsive" src="{{asset('/images/videos/productora/'.$productora->logo)}}" alt="{{$productora->nombre}}" width="250px"> @endif
            </p>
        </center> @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif {!!Form::model($productora,['method'=>'PATCH','route'=>['videos.productora.update',$productora->idProductora],'files'=>'true'])!!} {{Form::token()}}

        <div class="col-lg-6 col-sm-6 col-md-6 col-lg-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$productora->nombre}}" required>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-lg-12">
            <div class="form-group">
                <label for="logo">Logo Productora</label>
                <input type="file" name="logo" class="form-control">
            </div>
        </div>

        <div class="col-lg-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <label for="web">Web</label>
                <input type="text" name="web" class="form-control" value="{{$productora->web}}" required>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-lg-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-danger">Borrar</button>
                <a href="/videos/productora"><button type="button" class="btn btn-success">Atrás</button></a>
            </div>
        </div>

        {!!Form::close()!!}

    </div>
</div>
@endsection