<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
    </head>
    <body>
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

    </body>
</html>
