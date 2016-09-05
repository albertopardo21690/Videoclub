@extends ('layouts.admin') @section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar el País: {{$pais->nombre}}</h3> @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif {!!Form::model($pais,['method'=>'PATCH','route'=>['videos.pais.update',$pais->idPais],'files'=>'true'])!!} {{Form::token()}}

        <div class="form-group">
            <label for="escudo">Escudo</label>
            <input type="file" name="escudo" class="form-control">
        </div>

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{$pais->nombre}}" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="reset" class="btn btn-danger">Borrar</button>
            <a href="/videos/pais"><button type="button" class="btn btn-success">Atrás</button></a>
        </div>

        {!!Form::close()!!}

    </div>
</div>
@endsection