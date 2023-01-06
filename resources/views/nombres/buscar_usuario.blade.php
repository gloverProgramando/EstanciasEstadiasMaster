<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/menu.css">
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
		<div class="container py-3">
			<div class="page-header">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-3 p-1">
						<h2 class="text-titles">Usuarios<small>(Registrados)</small> </h2>
					</div>
					<div class="col-12 col-sm-12 col-md-9 p-1" p-1>
						<div class="row">
							<div class="col-9"></div>
							<div class="col-sm-12 col-md-3">
								<form action="{{ route('agregar_usuario.index') }}" method="GET">
									@csrf
									<button type="submit" value="Agregar usuario" class="btn btn-info" > <i class="zmdi zmdi-account-add"> Agregar usuario</i></button>
								</form>
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-6 p-1">
					<form action="{{ route('buscar_usuario.index') }}" method="GET">
						@csrf
						<!-- buscar-->
							<div class="row">
								<div class=" col-9 col-sm-9 col-md-10">
									<input type="text" class="form-control" id="texto" name="texto" placeholder="Buscar Alumno" value="{{$texto}}">
										
								</div>
								<div class="col-3 col-sm-3 col-md-2">
									<button type="submit" class="btn  buscar"><i class="zmdi zmdi-search"></i></button>
								</div>
								
							</div>
							
					</form>
				</div>
				
				<div class="col-12 col-sm-12 col-md-6 p-1">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-9">
                            <form action="{{ route('buscar_usuario_datos.index') }}" method="GET">
                                @csrf
                                <!-- buscar-->
                                    <div class="row">
										<div class=" col-9 col-sm-9 col-md-10">
                                            <input type="text" class="form-control" id="texto" name="texto" placeholder="Buscar datos" value="">
                                                
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-2">
											<button type="submit" class="btn buscar"><i class="zmdi zmdi-search"></i></button>
										</div>
                                        
                                    </div>
                                    
                            </form>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3">
                            <a href="{{ route('usuarios.index') }}">
                                <input type="submit" value="Ver todos" class="btn btn-success">
                            </a>
                        </div>
                    </div>
					
				</div>
				
			</div>
        </div>
		<div class="container">
			<div class="row">
				@forelse ($datos['users'] as $respuestaU)
					<div class="col-12 col-sm-12 col-md-4 p-4 ">
						<div class="row documentosUsuario" >
							<div class="col-12 text-center tituloAlumno">
								<div class="row">
									<div class="col-10 p-1">
										<div class="row">
											<div class="col-12 col-md-8">
												Alumno
											</div>
											<div class="col-12 col-md-4">
												@if ($respuestaU->deleted_at)
													<div class="text-center"><span class="badge bg-danger text-white eliminado">Eliminado</span></div>
												@endif
											</div>
										</div>
									</div>
									<div class="col-2 p-1">
										<form action="{{route('ver_datos_usuario.index',$respuestaU->id)}}">
											@csrf
											<button type="submit" class="btn btn-info btnCambiarC"><i class="zmdi zmdi-edit"></i></button>
										</form>
									</div>
								</div>
							</div>
							<div class="col-2 col-sm-2 col-md-2 text-center colum">
								{{ $respuestaU->id}}
								
							</div>
							<div class="col-10 col-sm-10 col-md-6 text-left colum">
								{{ $respuestaU->name }}										
							</div>
							<div class="col-12 col-sm-12 col-md-4 text-center colum">
								{{ $respuestaU->role }}										
							</div>
							<div class="col-12 col-sm-12 col-md-12 text-center">
								{{ $respuestaU->email }}										
							</div>
							@forelse ($datos['respuestas'] as $respuestaR)
								@if ($respuestaR->id_usuario ==$respuestaU->id)
									<div class="col-12 text-center tituloAlumno">
										Datos
									</div>
									<div class="col-12 col-sm-12 col-md-12 text-center colum">
										{{ $respuestaR->nombres }} {{ $respuestaR->ape_paterno }} {{ $respuestaR->ape_materno }}
									</div>
									<div class="col-12 col-sm-12 col-md-12 text-center colum">
										{{ $respuestaR->email}} 
									</div>
									<div class="col-6 col-sm-6 col-md-6 text-center colum">
										{{ $respuestaR->matricula }}										
									</div>									
									
									<div class="col-6 col-sm-6 col-md-6 text-center colum">
										{{ $respuestaR->nombre_proceso}} 
									</div>
									<div class="col-12 col-sm-12 col-md-12 text-center">
										{{ $respuestaR->nombre_carrera}} 
									</div>
								@endif
							@empty
								sin datos
							@endforelse	
							<div class="col-12 col-sm-12 col-md-12 text-center m-0 p-0">
								<form action="{{route('eliminarUsuario.index',$respuestaU->id)}}" method="POST">
									@csrf 
									<button type="submit" class="btn btn-danger btnEliminarUser">Eliminar</button>
								</form>
							</div>
						</div>
					</div>	
					
				@empty
				<div class="row">
					<div class="col-12 text-center">
						Sin usuarios
					</div>
				</div>  
				@endforelse
								
			</div>
		</div>
		
		        
	<!-- Dialog help -->

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
	.tituloAlumno{
		background: #024677;
		color: white;
		border-radius: 3px 3px 0px 0px
	}
	.colum{
		border-bottom: 1px solid rgb(138, 138, 138);
	}
	
</style>