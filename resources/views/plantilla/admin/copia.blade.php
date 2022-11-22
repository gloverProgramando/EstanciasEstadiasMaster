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
              
              
                <li>
                    <a href="{{ route('datos.index') }}">
                        <i class="zmdi zmdi-file-text zmdi-hc-fw"></i> Datos Vinculación
                    </a>
                </li>
            </li>
        
                </ul>
            </li>
        </ul>
    </div>
</section>