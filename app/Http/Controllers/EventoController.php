<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function Index() {
        $nome = "Pedro";
        $idade = 32;
        $profissao = "Desenvolvedor Pleno";

        $arr = [1,2,3,4,5,6];
        $nomes = ["Pedro", "Flavia", "Capitu", "Marley"];

        return view('welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => $profissao,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function Criar() {
        return view('eventos.criar');
    }
}
