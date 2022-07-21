<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

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
});

Route::get('/produtos', function() {
    return view('produtos');
});

Route::get('/contato', function() {
    return view('contato');
});
