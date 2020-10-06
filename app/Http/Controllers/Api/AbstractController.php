<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class AbstractController extends Controller
{
    protected $class;

    public function listAll(Request $req)
    {
        return response()->json($this->class::paginate($req->per_page), 200);
    }

    public function Save(Request $req)
    {
        return response()->json($this->class::create($req->all()), 201);
    }

    public function Show($id)
    {
        $data = $this->class::find($id);

        if (is_null($data)) {
            return response()->json('Item não encontrado', 404);
        }

        return response()->json($data, 200);
    }

    public function Update(Request $req, $id)
    {
        $data = $req->all();

        $dice = $this->class::find($id);

        if (is_null($dice)) {
            return response()->json(['error' => 'Item não encontrado'], 404);
        }

        return response()->json($dice->update($data), 200);
    }

    public function Delete($id)
    {
        if (is_null($this->class::find($id))) {
            return response()->json(['error' => 'Item não encontrado'], 404);
        }

        $this->class::destroy($id);

        return response()->json('Item removido', 200);
    }
}
