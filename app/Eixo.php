<?php

namespace App;
use \App\EixoItem;

use Illuminate\Database\Eloquent\Model;

class Eixo extends Model
{
    //
    protected $fillable = [
        'nome'
    ];

    public function itens() {
        return $this->hasMany(EixoItem::class, 'eixo_id');
    }
}
