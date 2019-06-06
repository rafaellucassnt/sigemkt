<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integracao extends Model
{
    protected $table = 'integracao';
    protected $fillable = [
        'ID', 
        'PROD_MAIS_VEND', 
        'ITENS_EM_ANUNCIO', 
        'NOME_PROMOCAO', 
        'CUSTO_CAMPANHA', 
        'VALOR_GASTO', 
        'VALOR_PREVISTO',
        'QNT_VENDIDO',
    ];
}
