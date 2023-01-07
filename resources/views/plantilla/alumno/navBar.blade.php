<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <img src="{{ asset('css/logo upqroo.png') }}" alt="" width="10%" height="10%">
        <a class="navbar-brand" href="">Bienvenido: {{ auth()->user()->name }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('inicio.index') }}">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Registros
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('estancia1.index', [1]) }}">Estancias I</a></li>
                        <li><a class="dropdown-item" href="{{ route('estancia1.index', [2]) }}">Estancias II</a></li>
                        <li><a class="dropdown-item" href="{{ route('estancia1.index', [3]) }}">Estadías</a></li>
                        <li><a class="dropdown-item" href="{{ route('estancia1.index', [4]) }}">Estadias Nacionales</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('estancia1.index', [5]) }}">Servicio Social (Terapia
                                Fisica)</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('alumno_ver_editar.index') }}">Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('fallos.index') }}">Soporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.destroy') }}">Cerrar Sesión</a>
                </li>

            </ul>

        </div>
    </div>
</nav>
