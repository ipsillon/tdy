<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    //
    public function index() 
    {
        $itens = Item::orderBy('id')->get();
        return view('admin.itens.index', compact('itens'));
    }

    public function adicionar()
    {
        return view('admin.itens.adicionar');
    }

    public function salvar(Request $request) 
    {
        Item::create($request->all());
        return redirect()->route('admin.itens');
    }

    public function editar($id) 
    {
        $item = Item::find($id);
        return view('admin.itens.editar', compact('item'));
    }

    public function atualizar(Request $request, $id)
    {
        Item::find($id)->update($request->all());
        return redirect()->route('admin.itens');
    }

    public function deletar($id)
    {
        Item::find($id)->delete();
        return redirect()->route('admin.itens');
    }
}
