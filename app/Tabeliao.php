<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabeliao extends Model
{
    protected $table = 'Tabelioes';

    protected $fillable = [
        'nome'
    ];
}
