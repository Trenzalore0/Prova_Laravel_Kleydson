<?php

namespace App\Http\Controllers\Site;

use App\Tabeliao;
use Illuminate\Http\Request;

class TabeliaoController extends AbstractController
{
    public function __construct()
    {
        $this->class = Tabeliao::class;
        $this->tipo = 'tabeliao';
    }
}
