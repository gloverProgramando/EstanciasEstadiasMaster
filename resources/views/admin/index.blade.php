<!DOCTYPE html>
<html lang="es">
	@include('plantilla/admin/head')
<body>
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		@include('plantilla/admin/navBar')

		<!-- Content page -->
		<div class="container p-3">
			<div class="page-header">
				<h2 class="text-titles">Usuarios <small>(Registrados)</small></h2>
			</div>
		</div>
		@include('notificaciones/notificaciones')
			<div class="row">
				<div class="col-12 col-sm-12 col-md-6 col lg-6 px-5 py-2">
					<div class="row listaAdmin">
						<div class="col-12 tituloDash" style="background: rgb(255, 255, 255)">
							<div style="color: rgb(0, 0, 0)">Administradores</div>		 
						</div>
						<div class="col-6" style="font-size: 30px; color:rgb(255, 255, 255);">
							<a href="#!"><i class="zmdi zmdi-account  zmdi-hc-5x" style="color: rgb(255,103,32)"></i></a>
						</div>
						<div class="col-6 registro">
							<p class="registroCount">{{  $datos['adminsCount']  }}</p>
							<small>Registrados</small>
						</div>
					</div>
					
				</div>
				<div class="col-12 col-sm-12 col-md-6 col lg-6 px-5 py-2">
					<div class="row listaAdmin">
						<div class="col-12 tituloDash" style="background: rgb(255, 255, 255)">
							<div style="color: rgb(0, 0, 0)">Usuarios</div>		 
						</div>
						<div class="col-6" style="font-size: 30px; color:rgb(0, 0, 0);">
							<a href="{{ route('usuarios.index') }}"><i class="zmdi zmdi-male-alt  zmdi-hc-5x" style="color: rgb(255,103,32)"></i></a>
						</div>
						<div class="col-6 registro">
							<p class="registroCount">{{  $datos['usersCount'] }}</p>
							<small>Registrados</small>
						</div>
					</div>
					
				</div>
				<div class="col-12 col-sm-12 col-md-6 col lg-6 px-5 py-2">
					<div class="row listaAdmin">
						<div class="col-12 tituloDash" style="background: rgb(255, 255, 255)">
							<div style="color: rgb(0, 0, 0)">Estancia I</div>		 
						</div>
						<div class="col-6" style="font-size: 30px; color:rgb(0, 0, 0);">
							<a href="{{ route('documentoEstancia1Admin.index',[1]) }}"><i class="zmdi zmdi-male-alt  zmdi-hc-5x" style="color: rgb(255,103,32)"></i></a>
						</div>
						<div class="col-6 registro">
							<p class="registroCount">{{ $estancia['estancia1']  }}</p>
							<small>Registrados</small>
						</div>
					</div>
					
				</div>
				<div class="col-12 col-sm-12 col-md-6 col lg-6 px-5 py-2">
					<div class="row listaAdmin">
						<div class="col-12 tituloDash" style="background: rgb(255, 255, 255)">
							<div style="color: rgb(0, 0, 0)" >Estancia II</div>		 
						</div>
						<div class="col-6" style="font-size: 30px; color:rgb(0, 0, 0);">
							<a href="{{ route('documentoEstancia1Admin.index',[2]) }}"><i class="zmdi zmdi-male-alt  zmdi-hc-5x" style="color: rgb(255,103,32)"></i></a>
						</div>
						<div class="col-6 registro">
							<p class="registroCount">{{ $estancia['estancia2']  }}</p>
							<small>Registrados</small>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-12 col-md-6 col lg-6 px-5 py-2">
					<div class="row listaAdmin">
						<div class="col-12 tituloDash" style="background: rgb(255, 255, 255)">
							<div style="color: rgb(0, 0, 0)">Estadía</div>		 
						</div>
						<div class="col-6" style="font-size: 30px; color:rgb(0, 0, 0);">
							<a href="{{ route('documentoEstancia1Admin.index',[3]) }}"><i class="zmdi zmdi-male-alt  zmdi-hc-5x" style="color: rgb(255,103,32)"></i></a>
						</div>
						<div class="col-6 registro">
							<p class="registroCount">{{ $estadia['estadia']  }}</p>
							<small>Registrados</small>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col lg-6 px-5 py-2">
					<div class="row listaAdmin">
						<div class="col-12 tituloDash" style="background: rgb(255, 255, 255)">
							<div style="color: rgb(0, 0, 0)">Estadía nacionales</div>		 
						</div>
						<div class="col-6" style="font-size: 30px; color:rgb(0, 0, 0);">
							<a href="{{ route('documentoEstancia1Admin.index',[4]) }}"><i class="zmdi zmdi-male-alt  zmdi-hc-5x" style="color: rgb(255,103,32)"></i></a>
						</div>
						<div class="col-6 registro">
							<p class="registroCount">{{ $estadia['estadia_nacional']  }}</p>
							<small>Registrados</small>
						</div>
					</div>	
				</div>

				<div class="col-12 col-sm-12 col-md-12 col lg-12 px-5 py-2">
					<div class="row listaAdmin">
						<div class="col-12 tituloDash" style="background: rgb(255, 255, 255)">
							<div style="color: rgb(0, 0, 0)">Servicio social</div>		 
						</div>
						<div class="col-6" style="font-size: 30px; color:rgb(0, 0, 0);">
							<a href="{{ route('documentoEstancia1Admin.index',[5]) }}"><i class="zmdi zmdi-male-alt  zmdi-hc-5x" style="color: rgb(255,103,32)"></i></a>
						</div>
						<div class="col-6 registro">
							<p class="registroCount">{{ $servicio_social }}</p>
							<small>Registrados</small>
						</div>
					</div>
					
				</div>
			</div>
			
			
	</section>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>