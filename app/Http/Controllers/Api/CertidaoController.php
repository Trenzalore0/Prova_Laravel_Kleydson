<?php

namespace App\Http\Controllers\Api;

use App\Certidao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertidaoController extends AbstractController
{
    public function __construct()
    {
        $this->class = Certidao::class;
    }
}
