<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Eixo;

class EixoController extends Controller
{
    //
    public function index() 
    {
        $eixos = Eixo::orderBy('id')->get();
        return view('admin.eixos.index', compact('eixos'));
    }

    public function adicionar()
    {
        return view('admin.eixos.adicionar');
    }

    public function salvar(Request $request) 
    {
        Eixo::create($request->all());
        return redirect()->route('admin.eixos');
    }

    public function editar($id) 
    {
        $eixo = Eixo::find($id);
        return view('admin.eixos.editar', compact('eixo'));
    }

    public function atualizar(Request $request, $id)
    {
        Eixo::find($id)->update($request->all());
        return redirect()->route('admin.eixos');
    }
}
