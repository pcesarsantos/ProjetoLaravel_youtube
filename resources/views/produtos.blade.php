@extends('layouts.main')
@section('title', 'HDC Events | Produtos')
@section('content')
<h1>Produtos</h1>
@if($busca)
    <p>O usuario está procurando por {{ $busca }}</p>
@endif

<a href="/">Voltar para home</a> | <a href="/contato">Ir para tela de contato</a>
@endSection