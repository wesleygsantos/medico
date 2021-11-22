
@extends('layouts.main')

@section('title', 'Login')

@section('content')

<div id="novomedico-create-container" class="col-md-6 offset-md-3">
        <h1>Login de acesso:</h1>
        <form action="" method="POST">
            @csrf
            <div id="cadastro" class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" class="form-control" 
                id="usuario" name="usuario" placeholder="Usuario">
            </div>
            <div id="cadastro" class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" 
                id="senha" name="senha" placeholder="Senha">
            </div>
            <input type="submit" class="btn botao" value="LOGIN">
        </form>
</div>

@endsection