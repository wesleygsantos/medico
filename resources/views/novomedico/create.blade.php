@extends('layouts.main')

@section('title', 'Cadastrar Médicos')

@section('content')

    <div id="novomedico-create-container" class="col-md-6 offset-md-3">
        <h1>Cadastrar Novo Médico</h1>
        <form action="/novomedico" method="POST">
            @csrf
            <div id="cadastro" class="form-group">
                <label for="nomeMedico">Nome:</label>
                <input type="text" class="form-control" 
                id="nomeMedico" name="nomeMedico" placeholder="Nome">
            </div>
            <div id="cadastro" class="form-group">
                <label for="crmMedico">CRM:</label>
                <input type="text" class="form-control" 
                id="crmeMedico" name="crmMedico" placeholder="CRM">
            </div>
            <div id="cadastro" class="form-group">
                <label for="especialidadeMedico">Especialidade:</label>
                <select id="especialidadeMedico" name="especialidadeMedico" class="form-control">
                    <option value="">SELECIONE UMA ESPECIALIDADE</option>    
                    <option value="ALERGOLOGIA">ALERGOLOGIA</option>
                    <option value="ANGIOLOGIA">ANGIOLOGIA</option>
                    <option value="BUCO MAXILO">BUCO MAXILO</option>
                    <option value="CARDIOLOGIA CLINICA">CARDIOLOGIA CLINICA</option>
                    <option value="CARDIOLOGIA INFANTIL">CARDIOLOGIA INFANTIL</option>
                    <option value="CIRURGIA CABEÇA E PESCOÇO">CIRURGIA CABEÇA E PESCOÇO</option>
                    <option value="CIRURGIA CARDÍACA">CIRURGIA CARDÍACA</option>
                    <option value="CIRURGIA DE TORAX">CIRURGIA DE TORAX</option>
                    <option value="CIRURGIA GERAL">CIRURGIA GERAL</option>
                    <option value="CIRURGIA PEDIÁTRICA">CIRURGIA PEDIÁTRICA</option>
                    <option value="CIRURGIA PLÁSTICA">CIRURGIA PLÁSTICA</option>
                    <option value="CIRURGIA TORÁCICA">CIRURGIA TORÁCICA</option>
                    <option value="CIRURGIA VASCULAR">CIRURGIA VASCULAR</option>
                    <option value="CLINICA MEDICA">CLINICA MEDICA</option>
                </select>
            </div>
            <div id="cadastro" class="form-group">
                <label for="telefoneMedico">Telefone:</label>
                <input type="text" class="form-control" 
                id="telefoneMedico" name="telefoneMedico" placeholder="Telefone">
            </div>
            <input type="submit" class="btn botao" value="CADASTRAR">
        </form>
        
    </div>
    
@endsection