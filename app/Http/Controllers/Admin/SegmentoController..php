<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Segmento;

class SegmentoController extends Controller
{
    //
    public function index() 
    {
        $segmentos = Segmento::orderBy('id')->get();
        return view('admin.segmentos.index', compact('segmentos'));
    }

    public function adicionar()
    {
        return view('admin.segmentos.adicionar');
    }

    public function salvar(Request $request) 
    {
        Segmento::create($request->all());
        return redirect()->route('admin.segmentos');
    }

    public function editar($id) 
    {
        $segmento = Segmento::find($id);
        return view('admin.segmentos.editar', compact('segmento'));
    }

    public function atualizar(Request $request, $id)
    {
        Segmento::find($id)->update($request->all());
        return redirect()->route('admin.segmentos');
    }

    public function deletar($id)
    {
        Segmento::find($id)->delete();
        return redirect()->route('admin.segmentos');
    }
}
