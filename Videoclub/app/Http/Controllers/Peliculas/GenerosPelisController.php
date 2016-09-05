<?php

namespace Videoclub\Http\Controllers\Peliculas;

use Illuminate\Http\Request;

use Videoclub\Http\Requests;
use Videoclub\Peliculas\GenerosPelis;
use Illuminate\Support\Facades\Redirect;
use Videoclub\Http\Controllers\Controller;
use Videoclub\Http\Requests\Peliculas\GenerosPelisRequest;
use DB;

class GenerosPelisController extends Controller
{
    public function __construct()
    {

    }
    
    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('searchText'));
            $generos_pelis = DB::table('generos_pelis')
            ->where('nombre','LIKE','%'.$query.'%')
            ->orderBy('idGenerosPelis','desc')
            ->paginate(8);

            return view('videos.generos.index',["generos_pelis" => $generos_pelis, "searchText" => $query]);
        }
    }
    
    public function create()
    {
        return view("videos/generos/create");
    }

    public function store(GenerosPelisRequest $request)
    {
        $generos_pelis = new GenerosPelis;
        $generos_pelis->nombre = $request->get('nombre');
        $generos_pelis->save();

        return Redirect::to('videos/generos');
    }

    public function show($id)
    {
        return view("videos.generos.show",["generos_pelis" => GenerosPelis::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view("videos.generos.edit",["generos_pelis"=>GenerosPelis::findOrFail($id)]);
    }

    public function update(GenerosPelisRequest $request, $id)
    {
        $generos_pelis = GenerosPelis::findOrFail($id);
        $generos_pelis->nombre = $request->get('nombre');
        $generos_pelis->update();

        return Redirect::to('videos/generos');
    }

    public function destroy($id)
    {
        $generos_pelis = GenerosPelis::findOrFail($id);
        $generos_pelis->delete();
        return Redirect::to('videos/generos');
    }
}
