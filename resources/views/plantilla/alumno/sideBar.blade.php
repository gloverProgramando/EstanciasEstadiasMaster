 <!-- SideBar -->
 <section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title --> 
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				<figcaption class="text-center text-titles">{{ auth()->user()->name }}</figcaption> <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="{{ asset('https://blogger.googleusercontent.com/img/a/AVvXsEgbE0uXVbiFi5TNUJp4zs_G5h8tl86RA3ltfvvn95ot758tqHzBrbfUQeHiKtmJGGpb6eKGkqXzmc2JBHaKhFxzxMpTo4J1i5SGg31WdNVNkjMDuU803Ebxa6KWzkCBAd1bYhKtAvlIDS-trXsM3lSuxNK3AvXv4AzVUJU5EeaMNqazJLEyyc_Qpabs=s268') }}" alt="UserIcon">
					<figcaption class="text-center text-titles">{{ auth()->user()->email }}</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="{{ route('alumno_ver_editar.index') }}">
							<i class="zmdi zmdi-edit"></i>
						</a>
					</li>
					<li>
						<a href="{{ route('login.destroy') }}">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="{{ route('inicio.index') }}">
						<i class="zmdi zmdi-home zmdi-hc-fw"></i> Inicio
					</a>
                    
				</li>
                <li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-file zmdi-hc-fw"></i> Formatos <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="{{ route('estancia1.index',[1]) }}"></i> Estancias I</a> <!--- cambio para dividir estancias 1 y 2  --->
						</li>
						<li>
							<a href="{{ route('estancia1.index',[2]) }}"></i> Estancias II</a> <!--- cambio para dividir estancias 1 y 2  --->
						</li>
                        <li>
							<a href="{{ route('estancia1.index',[3]) }}"></i> Estadías</a>
						</li>
						<li>
							<a href="{{ route('estancia1.index',[4]) }}"></i> Estadías nacionales</a>
						</li>
						<li>
							<a href="{{ route('estancia1.index',[5]) }}"></i> Servicio social</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="{{ route('fallos.index') }}">
						<i class="zmdi zmdi-alert-triangle zmdi-hc-fw"></i> Errores
					</a>
				</li>
			</ul>
		</div>
	</section>