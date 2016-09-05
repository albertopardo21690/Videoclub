<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$pais->idPais}}">
    {{Form::open(array('action'=>array('Peliculas\PaisPelisController@destroy',$pais->idPais),'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>

                <h4 class="modal-title">Eliminar el País: {{$pais->nombre}}</h4>
            </div>

            <div class="modal-body">
                <p>Confirme si deseas eliminar {{$pais->nombre}} de la lista de los paises</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger">Confirmar</button>
            </div>
        </div>
    </div>
    {{Form::close()}}
</div>