
@extends('layouts.main')

@section('title', 'Login')

@section('content')

@if($id != null)
    <h1>
        Area de Trabalho com id: {{ $id }}
    </h1>
@endif

@if($busca != null)
    <p>O usuário esta buscando por: {{ $busca }}</p>
@endif


<a href="/">VOLTAR PARA HOME</a>

@endsection
