@extends('layouts.main')
@section('title', 'HDC Events')

@section('content')
        <h1>Laravel</h1>
        <img src="/img/banner.jpg" alt="Banner">
        @if(10 > 5)
            <p>A condição é true</p>
        @endif

        <p>{{ $nome }}</p>

        @if($nome == "João")
        <p>O nome é João</p>
        @elseif($nome == "Matheus")
        <p>O nome é Matheus</p>
        @else
        <p>O Nome é {{ $nome }} e ele tem  {{ $idade }} Anos, e trabalha como {{ $profissao }}
        @endif

        @for($i=0; $i < count($arr); $i++)
            <p>{{$arr[$i]}}</p>
        @endfor

        @php
            $name = "João";
            echo $name;
        @endphp

        @foreach($nomes as $nome)
            <p>{{ $loop->index }} - {{ $nome }}</p>
        @endforeach

@endSection