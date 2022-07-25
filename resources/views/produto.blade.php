@extends('layouts.main')
@section('title', 'HDC Events | Produto')
@section('content')

@if($id != null)
    <p>Exibindo produto id: {{ $id }}
@endif

@endSection