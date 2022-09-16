<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

   
    <link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/formato.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>

    <link rel="stylesheet" href='{{ asset("/css/main.css") }}'>

</head>
<body>
    <!-- SideBar -->
	@include('plantilla/admin/sideBar')

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
						<div class="col-12 tituloDash">
							<div>Administradores</div>		 
						</div>
						<div class="col-6" style="font-size: 30px; color:rgb(0, 0, 0);">
							<a href="#!"><i class="zmdi zmdi-account  zmdi-hc-5x"></i></a>
						</div>
						<div class="col-6 registro">
							<p class="registroCount">{{  $datos['adminsCount']  }}</p>
							<small>Registrados</small>
						</div>
					</div>
					
				</div>
				<div class="col-12 col-sm-12 col-md-6 col lg-6 px-5 py-2">
					<div class="row listaAdmin">
						<div class="col-12 tituloDash">
							<div>Usuarios</div>		 
						</div>
						<div class="col-6" style="font-size: 30px; color:rgb(0, 0, 0);">
							<a href="{{ route('usuarios.index') }}"><i class="zmdi zmdi-male-alt  zmdi-hc-5x"></i></a>
						</div>
						<div class="col-6 registro">
							<p class="registroCount">{{  $datos['usersCount'] }}</p>
							<small>Registrados</small>
						</div>
					</div>
					
				</div>
				<div class="col-12 col-sm-12 col-md-6 col lg-6 px-5 py-2">
					<div class="row listaAdmin">
						<div class="col-12 tituloDash">
							<div>Estancia I</div>		 
						</div>
						<div class="col-6" style="font-size: 30px; color:rgb(0, 0, 0);">
							<a href="{{ route('documentoEstancia1Admin.index',[1]) }}"><i class="zmdi zmdi-male-alt  zmdi-hc-5x"></i></a>
						</div>
						<div class="col-6 registro">
							<p class="registroCount">{{ $estancia['estancia1']  }}</p>
							<small>Registrados</small>
						</div>
					</div>
					
				</div>
				<div class="col-12 col-sm-12 col-md-6 col lg-6 px-5 py-2">
					<div class="row listaAdmin">
						<div class="col-12 tituloDash">
							<div>Estancia II</div>		 
						</div>
						<div class="col-6" style="font-size: 30px; color:rgb(0, 0, 0);">
							<a href="{{ route('documentoEstancia1Admin.index',[2]) }}"><i class="zmdi zmdi-male-alt  zmdi-hc-5x"></i></a>
						</div>
						<div class="col-6 registro">
							<p class="registroCount">{{ $estancia['estancia2']  }}</p>
							<small>Registrados</small>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-12 col-md-6 col lg-6 px-5 py-2">
					<div class="row listaAdmin">
						<div class="col-12 tituloDash">
							<div>Estadía</div>		 
						</div>
						<div class="col-6" style="font-size: 30px; color:rgb(0, 0, 0);">
							<a href="{{ route('documentoEstancia1Admin.index',[3]) }}"><i class="zmdi zmdi-male-alt  zmdi-hc-5x"></i></a>
						</div>
						<div class="col-6 registro">
							<p class="registroCount">{{ $estadia['estadia']  }}</p>
							<small>Registrados</small>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col lg-6 px-5 py-2">
					<div class="row listaAdmin">
						<div class="col-12 tituloDash">
							<div>Estadía nacionales</div>		 
						</div>
						<div class="col-6" style="font-size: 30px; color:rgb(0, 0, 0);">
							<a href="{{ route('documentoEstancia1Admin.index',[4]) }}"><i class="zmdi zmdi-male-alt  zmdi-hc-5x"></i></a>
						</div>
						<div class="col-6 registro">
							<p class="registroCount">{{ $estadia['estadia_nacional']  }}</p>
							<small>Registrados</small>
						</div>
					</div>	
				</div>

				<div class="col-12 col-sm-12 col-md-12 col lg-12 px-5 py-2">
					<div class="row listaAdmin">
						<div class="col-12 tituloDash">
							<div>Servicio social</div>		 
						</div>
						<div class="col-6" style="font-size: 30px; color:rgb(0, 0, 0);">
							<a href="{{ route('documentoEstancia1Admin.index',[5]) }}"><i class="zmdi zmdi-male-alt  zmdi-hc-5x"></i></a>
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