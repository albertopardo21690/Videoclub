<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$pel->idpeliculas}}">
    {{Form::open(array('action'=>array('Peliculas\PeliculasController@destroy',$pel->idpeliculas),'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>

                <h4 class="modal-title">Eliminar la Película: {{$pel->titulo_peli}}</h4>
            </div>

            <div class="modal-body">
                <p>Confirme si deseas eliminar {{$pel->titulo_peli}} de la lista de películas</p>
                <br> @if (($pel->caractura)!="")
                <center>
                    <p class="img-responsive"><img src="{{asset('/images/videos/peliculas/'.$pel->caractura)}}" alt="{{$pel->titulo_peli}}" width="200px"></p>
                </center> @endif
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger">Confirmar</button>
            </div>
        </div>
    </div>
    {{Form::close()}}
</div>