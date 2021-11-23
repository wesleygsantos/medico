@extends('layouts.main')

@section('title', 'Home')

@section('content')

{{-- Busca de médicos por nome --}}
<div id="search-container" class="col-md-4">
    <h3>Procure o seu médico:</h3>
    <form action="/" method="GET">
        <b>Digite o Nome do médico: </b><input type="text" id="search" name="search-nome" class="form-control" placeholder="Nome do Médico">
    </form>
</div>

<hr>

<div id="medicos-container" class="col-md-11">
    @if($search)
        <h3>Buscando por {{ $search }}</h3>
    @else
        <h2>Nossos Médicos</h2>
        <p>Encontre o médico que você precisa!</p>
    @endif
    

    <div id="cards-container" class="row">
        @foreach($medicos as $medico)
            <div class="card col-md-3">
                <div class="card-body">
                    <h5 class="card-title"><b>{{ $medico->nome }} </b></h5>
                    <h5 class="card-title"><b>Numero CRM:</b> {{ $medico->CRM }}</h5>
                    <h5 class="card-title"><b>Especialidade:</b> {{ $medico->especialidade }}</h5>
                    <h5 class="card-title"><b>Telefone:</b> {{ $medico->telefone }}</h5>
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


</div>
@endsection

   