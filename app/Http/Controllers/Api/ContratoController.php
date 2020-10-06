<?php

namespace App\Http\Controllers\Api;

use App\Contrato;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContratoController extends AbstractController
{
    public function __construct()
    {
        $this->class = Contrato::class;
    }
}
