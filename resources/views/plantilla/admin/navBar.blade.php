<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Bienvenido: {{ auth()->user()->name }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('admin.index') }}">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registros
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('usuarios.index') }}">Alumnos</a></li>
            <li><a class="dropdown-item" href="{{ route('documentoEstancia1Admin.index',[1]) }}">Documentos Estancias I</a></li>
            <li><a class="dropdown-item" href="{{ route('documentoEstancia1Admin.index',[2]) }}">Documentos Estancias II</a></li>
            <li><a class="dropdown-item" href="{{ route('documentoEstancia1Admin.index',[3]) }}">Documentos Estadías</a></li>
            <li><a class="dropdown-item" href="{{ route('documentoEstancia1Admin.index',[4]) }}">Documentos Estadías nacional</a></li>
            <li><a class="dropdown-item" href="{{ route('documentoEstancia1Admin.index',[5]) }}">Documentos Servicio social</a></li>
            <li><a class="dropdown-item" href="{{ route('activar_botones.index') }}">Activar Subida De Archivos</a></li>
            <li><a class="dropdown-item" href="{{route('datatable.index')}}"></a>datatable</li>
            <li><a class="dropdown-item" href="{{route('datatabledetallada.index')}}">datatable detallada</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin_ver_editar.index') }}">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link datosvin" href="{{ route('datos.index') }}">Datos Vinculados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login.destroy') }}">Cerrar Sesión</a>
        </li>
       
      </ul>
      
    </div>
  </div>
</nav>