<!DOCTYPE html>
<html lang="es">
@include('plantilla/alumno/head')

<body>

@include('plantilla/admin/navBar')
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		
        <!-- Content page -->
		<div class="container  py-3">
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
									<input type="text" class="form-control" id="texto" name="texto" placeholder="Buscar Alumno" value="">
										
								</div>
								<div class="col-3 col-sm-3 col-md-2">
									<button type="submit" class="btn buscar"><i class="zmdi zmdi-search"></i></button>
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
                                            <input type="text" class="form-control" id="texto" name="texto" placeholder="Buscar datos" value="{{$texto}}">
                                                
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
				@forelse ($res as $respuestaU)
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
								{{ $respuestaU->id_usuario}}
								
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
							
									<div class="col-12 text-center tituloAlumno">
										Datos
									</div>
									<div class="col-12 col-sm-12 col-md-12 text-center colum">
										{{ $respuestaU->nombres }} {{ $respuestaU->ape_paterno }} {{ $respuestaU->ape_materno }}
									</div>
									<div class="col-12 col-sm-12 col-md-12 text-center colum">
										{{ $respuestaU->email}} 
									</div>
									<div class="col-6 col-sm-6 col-md-6 text-center colum">
										{{ $respuestaU->matricula }}										
									</div>									
									
									<div class="col-6 col-sm-6 col-md-6 text-center colum">
										{{ $respuestaU->nombre_proceso}} 
									</div>
									<div class="col-12 col-sm-12 col-md-12 text-center">
										{{ $respuestaU->nombre_carrera}} 
									</div>
								
							<div class="col-12 col-sm-12 col-md-12 text-center m-0 p-0">
								<form action="{{route('eliminarUsuario.index',$respuestaU->id_usuario)}}" method="POST">
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