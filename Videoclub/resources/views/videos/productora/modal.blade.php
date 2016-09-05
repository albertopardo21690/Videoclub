<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$pro->idProductora}}">
    {{Form::open(array('action'=>array('Peliculas\ProductoraController@destroy',$pro->idProductora),'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>

                <h4 class="modal-title">Eliminar la Productora: {{$pro->nombre}}</h4>
            </div>

            <div class="modal-body">
                <p>Confirme si deseas eliminar {{$pro->nombre}} de la lista de productoras</p>
                <br> @if (($pro->logo)!="")
                <center>
                    <p class="img-responsive"><img src="{{asset('/images/videos/productora/'.$pro->logo)}}" alt="{{$pro->nombre}}" width="200px"></p>
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