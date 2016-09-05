<?php

namespace Videoclub\Http\Controllers\Peliculas;

use Illuminate\Http\Request;

use Videoclub\Http\Requests;
use Videoclub\Http\Controllers\Controller;

use Videoclub\Peliculas\Peliculas;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Videoclub\Http\Requests\Peliculas\PeliculasRequest;
use DB;

class PeliculasController extends Controller
{
    public function __construct()
    {

    }
    
    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('searchText'));
            $peliculas = DB::table('peliculas as peli')
            ->join('generos_pelis as gene','peli.idgeneros_pelis','=','gene.idGenerosPelis')
            ->join('productora as prod','peli.idproductora','=','prod.idProductora')
            ->join('pais_peli as pais','peli.idpais','=','pais.idPais')
            ->select('peli.idpeliculas','peli.caractura','peli.trailer','peli.banda_sonora',
                    'peli.titulo_peli','peli.ano','peli.duracion','peli.director',
                    'peli.musica','peli.guion','peli.fotografia','peli.reparto','peli.link_web',
                    'gene.nombre as genero','prod.nombre as productora','prod.logo as logoProductora',
                    'prod.web as web_productora', 'pais.nombre as pais', 'pais.escudo as escudo')
            ->where('peli.titulo_peli','LIKE','%'.$query.'%')
            ->orwhere('peli.ano','LIKE','%'.$query.'%')
            ->orderBy('peli.idpeliculas','desc')
            ->paginate(12);
            
            return view('videos.peliculas.index',["peliculas" => $peliculas,"searchText" => $query]);
        }
    }

    public function create()
    {
        $generos_pelis=DB::table('generos_pelis')->get();
        $productora=DB::table('productora')->get();
        $pais_peli=DB::table('pais_peli')->get();
        return view("videos/peliculas/create",["productora"=>$productora,"generos_pelis"=>$generos_pelis,"pais_peli"=>$pais_peli]);
    }

    public function store(PeliculasRequest $request)
    {
        $peliculas = new Peliculas;

        $peliculas->idgeneros_pelis = $request->get('idgeneros_pelis');;
        $peliculas->idproductora = $request->get('idproductora');
        $peliculas->idpais = $request->get('idpais');
        
        if (Input::hasFile('caractura'))
        {
            $caractura = Input::file('caractura');
            $caractura -> move(public_path().'/images/videos/peliculas/',$caractura->getClientOriginalName());
            $peliculas -> caractura = $caractura -> getClientOriginalName();
        }

        $peliculas->trailer = $request->get('trailer');
        $peliculas->banda_sonora = $request->get('banda_sonora');
        $peliculas->titulo_peli = $request->get('titulo_peli');
        $peliculas->ano = $request->get('ano');
        $peliculas->duracion = $request->get('duracion');
        $peliculas->director = $request->get('director');
        $peliculas->musica = $request->get('musica');
        $peliculas->guion = $request->get('guion');
        $peliculas->fotografia = $request->get('fotografia');
        $peliculas->reparto = $request->get('reparto');
        $peliculas->link_web = $request->get('link_web');
        $peliculas->sinopsis = $request->get('sinopsis');

        $peliculas->save();

        return Redirect::to('/videos/peliculas');
    }

    public function show($id)
    {        
        $peliculas=Peliculas::findOrFail($id);
        $generos_pelis=DB::table('generos_pelis')->get();
        $productora=DB::table('productora')->get();
        $pais_peli=DB::table('pais_peli')->get();
        return view("videos.peliculas.show",["peliculas"=>$peliculas,"productora"=>$productora,"generos_pelis"=>$generos_pelis,"pais_peli"=>$pais_peli]);
    }

    public function edit($id)
    {
        $peliculas=Peliculas::findOrFail($id);
        $generos_pelis=DB::table('generos_pelis')->get();
        $productora=DB::table('productora')->get();
        $pais_peli=DB::table('pais_peli')->get();
        return view("videos.peliculas.edit",["peliculas"=>$peliculas,"productora"=>$productora,"generos_pelis"=>$generos_pelis,"pais_peli"=>$pais_peli]);
    }

    public function update(PeliculasRequest $request, $id)
    {
        $peliculas=Peliculas::findOrFail($id);
        
        $peliculas->idgeneros_pelis = $request->get('idgeneros_pelis');;
        $peliculas->idproductora = $request->get('idproductora');
        $peliculas->idpais = $request->get('idpais');
        
        if (Input::hasFile('caractura'))
        {
            $caractura = Input::file('caractura');
            $caractura -> move(public_path().'/images/videos/peliculas/',$caractura->getClientOriginalName());
            $peliculas -> caractura = $caractura -> getClientOriginalName();
        }

        $peliculas->trailer = $request->get('trailer');
        $peliculas->banda_sonora = $request->get('banda_sonora');
        $peliculas->titulo_peli = $request->get('titulo_peli');
        $peliculas->ano = $request->get('ano');
        $peliculas->duracion = $request->get('duracion');
        $peliculas->director = $request->get('director');
        $peliculas->musica = $request->get('musica');
        $peliculas->guion = $request->get('guion');
        $peliculas->fotografia = $request->get('fotografia');
        $peliculas->reparto = $request->get('reparto');
        $peliculas->link_web = $request->get('link_web');
        $peliculas->sinopsis = $request->get('sinopsis');

        $peliculas->update();

        return Redirect::to('videos/peliculas');
    }

    public function destroy($id)
    {
        $peliculas = Peliculas::findOrFail($id);
        $peliculas->delete();
        return Redirect::to('videos/peliculas');
    }
}