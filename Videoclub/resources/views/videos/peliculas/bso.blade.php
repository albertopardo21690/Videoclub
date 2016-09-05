<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-bso-{{$pel->idpeliculas}}">
    {{Form::open(array('action'=>array('Peliculas\PeliculasController@show',$pel->idpeliculas)))}}
    <div class="modal-dialog" style="width: 50%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>

                <h4 class="modal-title">La BSO: {{$pel->titulo_peli}}</h4>
            </div>

            <div class="modal-body">
                <div>
                    <center><iframe width="850" height="500" src="{{$pel->banda_sonora}}" frameborder="0" allowfullscreen pl></iframe></center>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-facebook" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
    {{Form::close()}}
</div>