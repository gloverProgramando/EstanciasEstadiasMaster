<!DOCTYPE html>
<html lang="es">
	@include('plantilla/admin/head')
<body>
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
								<button onclick="armarExcel();" class="btn btn-secondary btn-sm mt-2"> Generar excel</button>
								{{-- <a href="{{ route('usuarios/table.index') }}" class="btn btn-secondary btn-sm mt-2"> Prueba DataTable</a> --}}
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
		 <!-- Notificaciones -->
		@include('notificaciones/notificaciones')
		@include('sweetalert::alert')
		
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
									<button type="submit" class="btn  buscar"><i class="zmdi zmdi-search"></i></button>
								</div>
								
							</div>
							
					</form>
				</div>
				
				<div class="col-12 col-sm-12 col-md-6 p-1">
					<form action="{{ route('buscar_usuario_datos.index') }}" method="GET">
						@csrf
						<!-- buscar-->
							<div class="row">
								<div class=" col-9 col-sm-9 col-md-10">
									<input type="text" class="form-control" id="texto" name="texto" placeholder="Buscar Datos" value="">
										
								</div>
								<div class="col-3 col-sm-3 col-md-2">
									<button type="submit" class="btn buscar"><i class="zmdi zmdi-search"></i></button>
								</div>
								
							</div>
							
					</form>
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
							<div class="col-2 col-sm-2 col-md-2 col-lg-2 text-center colum">
								{{ $respuestaU->id}}
								
							</div>
							<div class="col-10 col-sm-10 col-md-6 col-lg-6 text-left colum">
								{{ $respuestaU->name }}										
							</div>
							<div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center colum">
								{{ $respuestaU->role }}										
							</div>
							<div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
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
									<div class="col-12 col-sm-12 col-md-12 text-center ">
										{{ $respuestaR->nombre_carrera}} 
									</div>
								@endif
							@empty
								sin datos
							@endforelse	
							<div class="col-12 col-sm-12 col-md-12 text-center m-0 p-0">
								@if ($respuestaU->deleted_at)
									<form action="{{route('restaurarUsuario.index',$respuestaU->id)}}"  class="btn-restaurar-system" method="POST">
										@csrf 
										<button type="submit" class="btn btn-success btnEliminarUser ">Restaurar</button>
									</form>
									
								@else
									<form action="{{route('eliminarUsuario.index',$respuestaU->id)}}"  class="btn-eliminar-system" method="POST">
										@csrf 
										<button type="submit" class="btn btn-danger btnEliminarUser ">Eliminar</button>
									</form>
								@endif
							</div>
						</div>
					</div>	
					
				@empty
							Sin usuarios
				@endforelse				
			</div>
		</div>
		
		<script type="text/javascript">
			
		</script>

	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.1/xlsx.full.min.js"></script> 
	<script>
		function armarExcel(){
			var user = {!! json_encode($alumnos) !!};
			var pru = {!! json_encode($alm_prueba) !!};
			// console.log(pru);

		 filename='alumnos.xlsx';
		var ws = XLSX.utils.json_to_sheet(pru);
        var wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, "People");
        XLSX.writeFile(wb,filename);
		}
	</script>
	<script>
		var user = {!! json_encode($alumnos) !!};
		console.log(user);
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