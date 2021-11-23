@extends('layouts.main')

@section('title', 'Editando: ' .  $med->nome)

@section('content')

    <div id="novomedico-create-container" class="col-md-6 offset-md-3">
        <h1>Editando: {{ $med->nome }}</h1>
        <form action="/novomedico/update/{{ $med->id  }}" method="POST">
            @csrf
            @method('PUT')
            <div id="cadastro" class="form-group">
                <label for="nomeMedico">Nome:</label>
                <input type="text" class="form-control" 
                id="nomeMedico" name="nome" placeholder="Nome" value = "{{$med->nome}}" >
            </div>
            <div id="cadastro" class="form-group">
                <label for="crmMedico">CRM:</label>
                <input type="text" class="form-control" 
                id="crmeMedico" name="CRM" placeholder="CRM" value = "{{$med->CRM}}" >
            </div>
            <div id="cadastro" class="form-group">
                <label for="especialidadeMedico">Especialidade:</label>
                <select id="especialidadeMedico" name="especialidade" class="form-control">
                    <option value="">SELECIONE UMA ESPECIALIDADE</option>    
                    <option value="ALERGOLOGIA" {{ $med->especialidade == 'ALERGOLOGIA' ? "selected='selected'" : ""}}>ALERGOLOGIA</option>
                    <option value="ANGIOLOGIA" {{ $med->especialidade == 'ANGIOLOGIA' ? "selected='selected'" : ""}}>ANGIOLOGIA</option>
                    <option value="BUCO MAXILO" {{ $med->especialidade == 'BUCO MAXILO' ? "selected='selected'" : ""}}>BUCO MAXILO</option>
                    <option value="CARDIOLOGIA CLINICA" {{ $med->especialidade == 'CARDIOLOGIA CLINICA' ? "selected='selected'" : ""}}>CARDIOLOGIA CLINICA</option>
                    <option value="CARDIOLOGIA INFANTIL" {{ $med->especialidade == 'CARDIOLOGIA INFANTIL' ? "selected='selected'" : ""}}>CARDIOLOGIA INFANTIL</option>
                    <option value="CIRURGIA CABEÇA E PESCOÇO" {{ $med->especialidade == 'CIRURGIA CABEÇA E PESCOÇO' ? "selected='selected'" : ""}}>CIRURGIA CABEÇA E PESCOÇO</option>
                    <option value="CIRURGIA CARDÍACA" {{ $med->especialidade == 'CIRURGIA CARDÍACA' ? "selected='selected'" : ""}}>CIRURGIA CARDÍACA</option>
                    <option value="CIRURGIA DE TORAX" {{ $med->especialidade == 'CIRURGIA DE TORAX' ? "selected='selected'" : ""}}>CIRURGIA DE TORAX</option>
                    <option value="CIRURGIA GERAL" {{ $med->especialidade == 'CIRURGIA GERAL' ? "selected='selected'" : ""}}>CIRURGIA GERAL</option>
                    <option value="CIRURGIA PEDIÁTRICA" {{ $med->especialidade == 'CIRURGIA PEDIÁTRICA' ? "selected='selected'" : ""}}>CIRURGIA PEDIÁTRICA</option>
                    <option value="CIRURGIA PLÁSTICA" {{ $med->especialidade == 'CIRURGIA PLÁSTICA' ? "selected='selected'" : ""}}>CIRURGIA PLÁSTICA</option>
                    <option value="CIRURGIA TORÁCICA" {{ $med->especialidade == 'CIRURGIA TORÁCICA' ? "selected='selected'" : ""}}>CIRURGIA TORÁCICA</option>
                    <option value="CIRURGIA VASCULAR" {{ $med->especialidade == 'CIRURGIA VASCULAR' ? "selected='selected'" : ""}}>CIRURGIA VASCULAR</option>
                    <option value="CLINICA MEDICA" {{ $med->especialidade == 'CLINICA MEDICA' ? "selected='selected'" : ""}}>CLINICA MEDICA</option>
                </select>
            </div>
            <div id="cadastro" class="form-group">
                <label for="telefoneMedico">Telefone:</label>
                <input type="text" class="form-control" 
                id="telefoneMedico" name="telefone" 
                placeholder="Telefone" value = "{{$med->telefone}}">
            </div>
            <input type="submit" class="btn botao" value="EDITAR">
        </form>
        
    </div>
    
@endsection