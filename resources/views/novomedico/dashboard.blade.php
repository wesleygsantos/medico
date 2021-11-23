@extends('layouts.main')

@section('title', 'Painel de Controle')

@section('content')

    <div class="col-md-10 dashboard-title-container">
        <h1>Painel de controle</h1>
    </div>

    <div id="search-container" class="col-md-4">
        <form action="/dashboard" method="GET">
            @csrf
            <b>Digite o CRM do médico: </b><input type="text" 
                id="search" name="search-crm" class="form-control" 
                placeholder="CRM do Médico">
        </form>
    </div>

    <div id="medicos-container" class="col-md-11">

        @if($search)
            <h3>Buscando por CRM: {{ $search }}</h3>
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

                        <p>
                            <a href="/novomedico/edit/{{ $medico->id }}" 
                                class="btn btn-info edit-btn">
                                <ion-icon name="create-outline"></ion-icon> Editar</a>
                        </p>
                        <form action="/novomedico/{{ $medico->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <p>
                                <button type="submit" 
                                class="btn btn-danger delete-btn">
                                <ion-icon name="trash-outline"></ion-icon>Deletar</button>
                            </p>
                        </form>
                        @endif
                    @endauth
                </div>
            </div>
        @endforeach
        @if(count($medicos)==0 && $search)
            <h4>Não foi possivel encontrar nenhum médico com número de CRM: <i>{{ $search }}.</i></h4>
            <p id="ver"><a href="/dashboard">Ver todos os cadastros</a></p>
        @elseif(count($medicos)==0)
            <h2>Não há médicos cadastrados.</h2>
        @endif
    </div>


@endsection
