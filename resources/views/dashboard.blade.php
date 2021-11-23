@extends('layouts.main')

@section('title', 'Painel de Controle')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Painel de controle</h1>
    </div>

    <div id="search-container" class="col-md-4">
        <form action="/" method="GET">
            <b>Digite o Nome do médico: </b><input type="text" 
                id="search" name="search-nome" class="form-control" 
                placeholder="Nome do Médico">
        </form>
    </div>

    <div id="medicos-container" class="col-md-11">

        @if($search)
            <h3>Buscando por {{ $search }}</h3>
        @else
            <h2>Médicos cadastrados</h2>
        @endif

        <div id="cards-container" class="row">
        @foreach($medicos as $medico)
            <div class="card col-md-3">
                <div class="card-body">
                    <h5 class="card-title"><b>{{ $medico->nome }} </b></h5>
                    <h5 class="card-title"><b>Numero CRM:</b> {{ $medico->CRM }}</h5>
                    <h5 class="card-title"><b>Especialidade:</b> {{ $medico->especialidade }}</h5>
                    <h5 class="card-title"><b>Telefone:</b> {{ $medico->telefone }}</h5>
                    @auth
                        @if($permissao == 1)
                        <hr>
                        <p id="ver2"><a href="#" >Editar Cadastro</a></p>
                        <p id="ver2"><a href="#" >Deletar Cadastro</a></p>
                        @endif
                    @endauth
                </div>
            </div>
        @endforeach
        @if(count($medicos)==0 && $search)
            <h4>Não foi possivel encontrar nenhum médico com nome de <i>{{ $search }}.</i></h4>
            <p id="ver"><a href="/">Ver todos os nossos médicos.</a></p>
        @elseif(count($medicos)==0)
            <h2>Não há médicos cadastrados.</h2>
        @endif
    </div>


@endsection
