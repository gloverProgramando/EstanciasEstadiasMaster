<section class="full-box cover dashboard-sideBar">
    <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
    <div class="full-box dashboard-sideBar-ct">
        <!--SideBar Title --> 
        <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
            {{ auth()->user()->name }}<i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
        </div>
        <!-- SideBar User info -->
        <div class="full-box dashboard-sideBar-UserInfo">
            <figure class="full-box">
                <img src="{{ asset('https://blogger.googleusercontent.com/img/a/AVvXsEiiqAWnoAMFLHJKb7saVRHa0IJHfIlZbxgEHP-7_esC561vCmk4T8YOor-s-PKpdSHtqx1KTXV8NlxG8cxEVD0EnYvUR-rdj50-k31mz_H56FQ7lroKEtmpe8RqTWsfxc5aaSjV5v3k1UrlDpOdH70mXnhkNZxO-1NBTeC0ziAha4X05KllRm4xGtz4=w320-h320') }}" alt="UserIcon">
                <figcaption class="text-center text-titles">{{ auth()->user()->email }}</figcaption>
            </figure>
            <ul class="full-box list-unstyled text-center">
                <li>
                    <a href="{{ route('admin_ver_editar.index') }}">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('login.destroy') }}" >
                        <i class="zmdi zmdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- SideBar Menu -->
        <ul class="list-unstyled full-box dashboard-sideBar-Menu">
            <li>
                <a href="{{ route('admin.index') }}">
                    <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#!" class="btn-sideBar-SubMenu">
                    <i class="zmdi zmdi-case zmdi-hc-fw"></i> Registros <i class="zmdi zmdi-caret-down pull-right"></i>
                </a>
                <ul class="list-unstyled full-box">
                    <li>
                        <a href="{{ route('usuarios.index') }}"></i> Alumnos</a>
                    </li>
                    <li>
                        <a href="{{ route('documentoEstancia1Admin.index',[1]) }}"></i> Documentos Estancias I</a>
                    </li>
                    <li>
                        <a href="{{ route('documentoEstancia1Admin.index',[2]) }}"></i> Documentos Estancias II</a> <!---separador de estancia 1 y 2 ------>
                    </li>
                    <li>
                        <a href="{{ route('documentoEstancia1Admin.index',[3]) }}"></i> Documentos Estadías</a>
                    </li>
                    <li>
                        <a href="{{ route('documentoEstancia1Admin.index',[4]) }}"></i> Documentos Estadías nacional</a>
                    </li>
                    <li>
                        <a href="{{ route('documentoEstancia1Admin.index',[5]) }}"></i> Documentos Servicio social</a>
                    </li>
                </ul>
                <li>
                    <a href="{{ route('datos.index') }}">
                        <i class="zmdi zmdi-file-text zmdi-hc-fw"></i> Datos Vinculación
                    </a>
                </li>
            </li>
            <!--<li>
                <a href="#!" class="btn-sideBar-SubMenu">
                    <i class="zmdi zmdi-case zmdi-hc-fw"></i> Mapas <i class="zmdi zmdi-caret-down pull-right"></i>
                </a>
                <ul class="list-unstyled full-box">
                    <li>
                        <a href="rutas.html"></i> Rutas</a>
                    </li>
                    <li>
                        <a href="taxis.html"> Taxis</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#!" class="btn-sideBar-SubMenu">
                    <i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
                </a>
                <ul class="list-unstyled full-box">
                    <li>
                        <a href="{{ route('register.index') }}"> Administradores</a>
                    </li>
                </ul>
            </li>-->
                </ul>
            </li>
        </ul>
    </div>
</section>