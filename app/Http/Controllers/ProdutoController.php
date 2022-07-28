<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //
    public function Index() {
        $busca = request('search');
        return view('produtos', ['busca' => $busca]);
    }

    public function Produto($id = null) {
        return view('produto', ['id' => $id]);
    }
}
