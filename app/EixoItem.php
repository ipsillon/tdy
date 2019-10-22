<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class EixoItem extends Model
{
    //
    protected $table = 'eixos_itens';

    protected $fillable = [
        'eixo_id', 
        'item_id'
    ];
    
}
