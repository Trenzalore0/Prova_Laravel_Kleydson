<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certidao extends Model
{
    protected $table = 'Certidoes';

    protected $fillable = [
        'tipo_certidao', 'envolvido1', 'envolvido2',
        'data_certidao', 'tabeliao'
    ];
}
