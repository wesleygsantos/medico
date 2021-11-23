
@extends('layouts.main')

@section('title', 'Login')

@section('content')

<div id="novomedico-create-container" class="col-md-6 offset-md-3">
        <h1>Registro de Usuário:</h1>
        <form action="/novousuario" method="POST">
            @csrf
            <div id="registro" class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" 
                id="nome" name="nome" placeholder="Nome">
            </div>
            <div id="registro" class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" class="form-control" 
                id="email" name="email" placeholder="E-mail">
            </div>
            <div id="registro" class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" 
                id="senha" name="senha" placeholder="Senha">
            </div>
            <div id="registro" class="form-group">
                <label for="permissao">Permissão:</label>
                <select id="permissao" name="permissao" class="form-control">
                    <option value="1">1</option>    
                    <option value="2">2</option>
                </select>
            </div>
            <input type="submit" class="btn botao" value="CASTRAR USUÁRIO">
        </form>
</div>

@endsection