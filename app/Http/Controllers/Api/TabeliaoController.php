<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Tabeliao;
use Illuminate\Http\Request;

class TabeliaoController extends AbstractController
{
    public function __construct()
    {
        $this->class = Tabeliao::class;
    }
}
