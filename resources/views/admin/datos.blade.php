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
		
		@forelse ($universidad as $dato)
			<div class="container p-3">
				<div class="page-header">
				<h2 class="text-titles">Actualizar Datos Vinculación <small>(Registrados)</small></h2>
				</div>
			</div>
			@include('notificaciones/notificaciones')
			<div class="row">
				<div class="col-12 p-5">
						<form action="{{ route('actualizar_vinculacion.index') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="row">
						
								<div class="col-12 col-sm-12 col-md-12 p-3">
									<input type="text" name="idA" id="idA" value="{{$dato->id}}" class="id_d">
									<label for="">Nombre</label>
									<input type="text" name="nombreA" id="nombreA" value="{{$dato->nombre_u}}" class="nombre">
								</div>
								<div class="col-12 col-sm-12 col-md-12 p-3">
									<label for="">Cargo</label>

									<input type="text" name="cargoA" id="cargoA" value="{{$dato->cargo_u}}" class="cargo">
								</div>
								<div class="col-12 col-sm-12 col-md-3 p-5 text-center">
									<div>
										<img src="{{ asset("firma/".$dato->firma )}}" alt="" />
										<input type="text" name="firma" id="firma" value="{{$dato->firma}}" class="" disabled>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-9 p-5 text-center justify-content-center col-firma">
									<div class="row">
										<div class="col-12">
											<label for="">Actualizar Firma </label>
										</div>
										<div class="col-12">
											<input type="file" name="firmaA" id="firmaA">
										</div>
									</div>
								</div>
								<div class="col-12">
									<button class="btn btn-dark btn-lg btn-block" type="submit">Guardar</button>
								</div>
							</div>
						</form>
				</div>
			</div>
		@empty
			<div class="container p-3">
				<div class="page-header">
				<h2 class="text-titles">Cambiar Datos Vinculación <small>(Registrados)</small></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12 p-5">
						<form action="{{ route('guardar_vinculacion.index') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="col-12 col-sm-12 col-md-12 p-3 text-center">
									<label for="">Nombre</label>
									<input type="text" name="nombre" id="nombre" class="nombre">
								</div>
								<div class="col-12 col-sm-12 col-md-12 p-3 text-center">
									<label for="">Cargo</label>

									<input type="text" name="cargo" id="cargo" class="cargo">
								</div>
								<div class="col-12 col-sm-12 p-3 text-center  justify-content-center col-firma">
									<div class="row">
										<div class="col-12">
											<label for="">Firma</label>
										</div>
										<div class="col-12">
											<input type="file" name="firma" id="firma" class="firma">
										</div>
									</div>
								</div>
								<div class="col-12">
									<button class="btn btn-dark btn-lg btn-block" type="submit">Guardar</button>
								</div>
							</div>
						</form>
				</div>
			</div>
		@endforelse
		
        
			
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
<style>
	.nombre{
		width: 100%;
		text-align: center;
	}
	.cargo{
		width: 100%;
		text-align: center;

	}
	.firma{
		width: 100%;
	}
	.col-firma{
		display: flex;
		align-items: center
	}
</style>