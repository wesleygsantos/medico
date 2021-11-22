<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS do Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- CSS do Projeto Médicos -->
        <link rel="stylesheet" href="/css/style.css">
    
        <!-- Javascript do Projeto Médicos -->
        <script src="/js/script.js"></script>

    </head>
    <body>

        <!-- <img src="/img/banner.png" alt="Banner" width="100%"> -->

        <head>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <b><a href="/" class="nav-link">Home</a></b>
                        </li>

                        @guest
                        <li class="nav-item">
                            <b><a href="/login" class="nav-link">Login</a></b>
                        </li>
                        <li class="nav-item">
                            <b><a href="/register" class="nav-link">Registrar</a></b>
                        </li>
                        @endguest

                        @auth
                        <li class="nav-item">
                            <b><a href="/novomedico/create" class="nav-link">Cadastrar</a></b>
                        </li>
                        <li class="nav-item">
                            <b><a href="/dashboard" class="nav-link">Meus Cadastros</a></b>
                        </li>
                        <li class="nav-item">

                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" 
                                    class="nav-link" 
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();"
                                >
                                    <b>Sair</b>
                                </a>
                            </form>    
                        
                        </li>
                        <?php
                            $usuario = auth()->user();
                            $usuarioNome = $usuario->name;
                            $permissao = $usuario->permissao;
                        ?>
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="usuario">
                            Bem vindo {{ $usuarioNome }}</a>
                        </li>
                        @endauth
            
                    </ul>
                </div>
            </nav>
        </head>
        
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>

        
        
        <br>

        <footer>
            <p>Desenvoldido por Wesley Guimarães</p>
        </footer>
            
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
