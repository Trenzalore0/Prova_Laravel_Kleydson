<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Tabeliao;
use Illuminate\Http\Request;

abstract class AbstractController extends Controller
{
    protected $class;
    protected $tipo;

    public function index(Request $req)
    {
        $data = $this->class::all();
        $forma = $this->tipo;
        return view('cartorio.index', compact('data', 'forma'));
    }

    public function create()
    {
        $forma = $this->tipo;
        $tabelioes = Tabeliao::all();
        return view('cartorio.cad', compact('forma', 'tabelioes'));
    }
   
    public function save(Request $req)
    {
        $this->class::create($req->all());
        return redirect()->route($this->tipo.'.index');
    }

    public function show($id)
    {
        $data = $this->class::find($id);
        $forma = $this->tipo;
        $tabelioes = Tabeliao::all();
        return view('cartorio.edit', compact('data', 'forma', 'tabelioes'));
    }

    public function update(Request $req, $id)
    {
        $data = $this->class::find($id);
        $data->update($req->all());
        return redirect()->route($this->tipo.'.index');
    }

    public function delete($id)
    {
        $this->class::destroy($id);
        return redirect()->route($this->tipo.'.index');
    }
}
