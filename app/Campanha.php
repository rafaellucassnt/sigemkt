<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    protected $fillable = [
        'ID',
        'ID_CAMPANHA', 
        'DATA_CAMPANHA', 
        'MIDIA', 
        'FINALIZADA',
    ];
}
