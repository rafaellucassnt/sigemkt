<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = [
        'ID',
        'CODIGO_MELHORIA', 
        'MELHORIA_REQ', 
        'MELHORIA_APLIC', 
        'DATA', 
        'DATA_LIMITE', 
        'NOME_PROD', 
        'FORMA_PAG', 
        'ID_CAMPANHA', 
        'DATA_CAMPANHA', 
        'CPF_FUNC', 
        'NOME_FUNC', 
        'CARGO_FUNC', 
        'COD_PROD', 
        'VARIACAO_VENDAS', 
        'MIDIA', '
        CUSTO',
    ];

}
