<?php

namespace Videoclub\Http\Controllers\Peliculas;

use Illuminate\Http\Request;

use Videoclub\Http\Requests;
use Videoclub\Http\Controllers\Controller;
use Videoclub\Peliculas\PaisPelis;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Videoclub\Http\Requests\Peliculas\PaisPelisRequest;
use DB;

class PaisPelisController extends Controller
{
    public function __construct()
    {

    }
    
    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('searchText'));
            $pais_peli = DB::table('pais_peli')
            ->where('nombre','LIKE','%'.$query.'%')
            ->orderBy('idPais','desc')
            ->paginate(5);

            return view('videos.pais.index',["pais_peli" => $pais_peli, "searchText" => $query]);
        }
    }
    
    public function create()
    {
        return view("videos/pais/create");
    }

    public function store(PaisPelisRequest $request)
    {
        $pais_peli = new PaisPelis;

        $pais_peli->nombre = $request->get('nombre');
        
        if (Input::hasFile('escudo'))
        {
            $escudo = Input::file('escudo');
            $escudo -> move(public_path().'/images/videos/pais/',$escudo->getClientOriginalName());
            $pais_peli -> escudo = $escudo -> getClientOriginalName();
        }

        $pais_peli->save();

        return Redirect::to('videos/pais');
    }

    public function show($id)
    {
        return view("videos.pais.show",["pais_peli" => PaisPelis::findOrFail($id)]);
    }

    public function edit($id)
    {
        $pais_peli = PaisPelis::findOrFail($id);
        return view("videos.pais.edit",["pais"=>PaisPelis::findOrFail($id)]);
    }

    public function update(PaisPelisRequest $request, $id)
    {
        $pais_peli = PaisPelis::findOrFail($id);
                
        $pais_peli->nombre = $request->get('nombre');
        
        if (Input::hasFile('escudo'))
        {
            $escudo = Input::file('escudo');
            $escudo -> move(public_path().'/images/videos/pais/',$escudo->getClientOriginalName());
            $pais_peli -> escudo = $escudo -> getClientOriginalName();
        }

        $pais_peli->update();

        return Redirect::to('videos/pais');
    }

    public function destroy($id)
    {
        $pais_peli = PaisPelis::findOrFail($id);
        $pais_peli->delete();
        return Redirect::to('videos/pais');
    }
}
