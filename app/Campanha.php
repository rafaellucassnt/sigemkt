<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    protected $fillable = [
        'ID',
        'DATA_INICIO', 
        'DATA_TERMINO', 
        'MIDIA', 
        'FINALIZADA',
        'VARIAÇÃO_DE_VENDAS',
    ];
}
