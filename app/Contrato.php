<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = 'Contratos';

    protected $fillable = [
        'tipo_contrato', 'envolvido1', 'envolvido2',
        'data_contrato', 'valor', 'tabeliao'
    ];

}
