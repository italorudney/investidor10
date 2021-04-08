<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Noticias;

use Flash;
use Response;
use DB;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        $json_return=Noticias::join('categorias', 'noticias.cat_id', '=', 'categorias.id')->get();

        return $json_return;
    }

    public function filtro(Request $request)
    {   

        $json_return=Noticias::join('categorias', 'noticias.cat_id', '=', 'categorias.id')
        ->where('titulo', 'like', '%' . $request->input('busca') . '%')
        ->orWhere('subtitulo', 'like', '%' . $request->input('busca') . '%')
        ->orWhere('descricao', 'like', '%' . $request->input('busca') . '%')
        ->get();

        return Response::json($json_return);
    }

    public function store(Request $request)
    {
        $Noticia= new Noticias();

        $Noticia->titulo = $request->input('titulo');
        $Noticia->subTitulo = $request->input('subTitulo');
        $Noticia->cat_id = $request->input('cat_id');
        $Noticia->descricao = $request->input('noticia');
        $Noticia->save();
    }

}
