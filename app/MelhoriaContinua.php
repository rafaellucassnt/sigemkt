<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MelhoriaContinua extends Model
{
    protected $fillable = [
        'ID',
        'COD_MELHORIA', 
        'MELHORIA_REQ', 
        'AREA_FUNCIONAL',
    ];
}
