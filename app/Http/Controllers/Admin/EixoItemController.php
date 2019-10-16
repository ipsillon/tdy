<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Eixo;
use App\Item;
use App\EixoItem;

class EixoItemController extends Controller
{
    //
    public function index() 
    {
        $eixos = Eixo::orderBy('id')->get();
        $itens = Item::orderBy('id')->get();

        return view('admin.eixos-itens.index', compact('eixos', 'itens'));
    }

}
