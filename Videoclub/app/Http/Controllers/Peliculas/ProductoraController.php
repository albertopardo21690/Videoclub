<?php

namespace Videoclub\Http\Controllers\Peliculas;

use Illuminate\Http\Request;

use Videoclub\Http\Requests;
use Videoclub\Http\Controllers\Controller;
use Videoclub\Peliculas\Productora;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Videoclub\Http\Requests\Peliculas\ProductoraRequest;
use DB;

class ProductoraController extends Controller
{
    public function __construct()
    {

    }
    
    public function index(Request $request)
    {
        if ($request)
        {
            $query = trim($request->get('searchText'));
            $productora = DB::table('productora')
            ->where('nombre','LIKE','%'.$query.'%')
            ->orderBy('idProductora','desc')
            ->paginate(5);

            return view('videos.productora.index',["productora" => $productora, "searchText" => $query]);
        }
    }
    
    public function create()
    {
        return view("videos/productora/create");
    }

    public function store(ProductoraRequest $request)
    {
        $productora = new Productora;

        if (Input::hasFile('logo'))
        {
            $logo = Input::file('logo');
            $logo -> move(public_path().'/images/videos/productora/',$logo->getClientOriginalName());
            $productora -> logo = $logo -> getClientOriginalName();
        }

        $productora->nombre = $request->get('nombre');
        $productora->web = $request->get('web');
        $productora->save();

        return Redirect::to('videos/productora');
    }

    public function show($id)
    {
        return view("videos.productora.show",["productora" => Productora::findOrFail($id)]);
    }

    public function edit($id)
    {
        $productora = Productora::findOrFail($id);
        return view("videos.productora.edit",["productora"=>Productora::findOrFail($id)]);
    }

    public function update(ProductoraRequest $request, $id)
    {
        $productora = Productora::findOrFail($id);
        
        if (Input::hasFile('logo'))
        {
            $logo = Input::file('logo');
            $logo -> move(public_path().'/images/videos/productora/',$logo->getClientOriginalName());
            $productora -> logo = $logo -> getClientOriginalName();
        }

        $productora->nombre = $request->get('nombre');
        $productora->web = $request->get('web');
        $productora->update();

        return Redirect::to('videos/productora');
    }

    public function destroy($id)
    {
        $productora = Productora::findOrFail($id);
        $productora->delete();
        return Redirect::to('videos/productora');
    }
}
