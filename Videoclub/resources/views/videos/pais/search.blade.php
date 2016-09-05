{!!Form::open(array('url'=>'videos/pais','method'=>'GET','autocomplete'=>'on','role'=>'search')) !!}
<div class="form-group">
    <div class="input-group">
        <input type="text" class="form-control" name="searchText" placeholder="Buscar Países" value="{{$searchText}}">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-warning"> <i class="fa fa-search"> Buscar</i></button>
        </span>
    </div>
</div>
{{Form::Close()}}