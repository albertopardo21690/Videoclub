<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-trailer-{{$pel->idpeliculas}}">
    {{Form::open(array('action'=>array('Peliculas\PeliculasController@index',$pel->idpeliculas)))}}
    <div class="modal-dialog" style="width: 50%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>

                <h4 class="modal-title">Trailer: {{$pel->titulo_peli}}</h4>
            </div>

            <div class="modal-body">
                <div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{$pel->trailer}}"></iframe>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-facebook" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
    {{Form::close()}}
</div>