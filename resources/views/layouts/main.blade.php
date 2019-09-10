<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <a class="navbar-brand" href="{{ route('home') }}">Embirrados 🍻</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">Reglas</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactos.create') }}">Contacto</a>
                </li>
            </ul>

            <ul class="navbar-nav">

                <!-- si el usuario es admin -->
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administrar</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('preguntas.index') }}">Preguntas</a>
                        <a class="dropdown-item" href="{{ route('categorias.index') }}">Categorías</a>
                        <a class="dropdown-item" href="{{ route('niveles.index') }}">Niveles</a>
                        <a class="dropdown-item" href="{{ route('usuarios.index') }}">Usuarios</a>
                        <a class="dropdown-item" href="{{ route('contactos.index') }}">Mensajes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">Salir</a>
                    </div>
                </li>

                <!-- si el usuario es jugador -->
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img class="rounded-circle" src="avatar.png"></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{-- usuarios/{{ $usuario['id'] }} --}}">Perfil</a>
                        <a class="dropdown-item" href="{{ route('jugar.index') }}">Jugar!</a>
                        <a class="dropdown-item" href="">Ranking</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">Salir</a>
                    </div>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Buscar</button>
            </form>

        </div>
    </nav>
    <div class="container mt-3">
        @yield('content') 
    </div>
</body>
</html>