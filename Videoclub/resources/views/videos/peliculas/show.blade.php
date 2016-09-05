<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-show-{{$pel->idpeliculas}}">
    {{Form::open(array('action'=>array('Peliculas\PeliculasController@index',$pel->idpeliculas)))}}
    <div class="modal-dialog">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>

                <h3 class="modal-title">{{$pel->titulo_peli}}</h3>
            </div>

            <div class="modal-body">
                <div class="row" id="info_peli" style="display: block;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        @if (count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            @if (($pel->caractura)!="")
                            <center>
                                <p><img src="{{asset('/images/videos/peliculas/'.$pel->caractura)}}" class="img-responsive" width="600px" alt=""></p>
                            </center>
                            @endif
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <label for="">Año</label>
                            <p>
                                {{$pel->ano}}
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <label for="">Duración</label>
                            <p>
                                {{$pel->duracion}}
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <label for="">País</label>
                            <p>
                                <img src="{{asset('/images/videos/pais/'.$pel->escudo)}}" alt="{{$pel->pais}}" class="img-responsive" width="50px">
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <label for="">Director</label>
                            <p>
                                {{$pel->director}}
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <label for="">Música</label>
                            <p>
                                {{$pel->musica}}
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <label for="">Fotografía</label>
                            <p>
                                {{$pel->fotografia}}
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <label for="">Género</label>
                            <p>
                                {{$pel->genero}}
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <label for="">Página Web</label>
                            <p>
                                <a href="{{$pel->link_web}}">{{$pel->titulo_peli}}</a>
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <label for="">Productora</label>
                            <p>
                                <img src="{{asset('/images/videos/productora/'.$pel->logoProductora)}}" alt="{{$pel->productora}}" class="img-responsive" width="130px">
                            </p>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <label for="">Guion</label>
                            <p>
                                {{$pel->guion}}
                            </p>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <label for="">Reparto</label>
                            <p>
                                {{$pel->reparto}}
                            </p>
                        </div>

                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                            <button type="button" class="btn btn-facebook" data-dismiss="modal">Atrás</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{Form::close()}}
</div>