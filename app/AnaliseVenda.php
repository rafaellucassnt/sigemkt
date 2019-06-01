<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnaliseVenda extends Model
{
    protected $fillable = [
        'ID',
        'COD_PROD', 
        'NOME_PROD', 
        'QUANT_VEND_ATUAL', 
        'QUANT_VEND_ANTERIOR', 
        'VARIACAO_VENDAS', 
        'ANUNCIADO',
    ];

}
