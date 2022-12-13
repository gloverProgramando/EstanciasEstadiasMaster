<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Observaciones</title>
	@include('plantilla/admin/head')

</head>
<body>
    @include('plantilla/admin/sideBar')
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		@include('plantilla/admin/navBar')
        <div class="container p-3">
			<div class="page-header">
			  <h2 class="text-titles">Observaciones <small>Carga horaria Estancia</small></h2>
			</div>
		</div>
        <div class="container">
            @forelse ($datos as $dato)
				<form action="" method="post" enctype="multipart/form-data" >
				@csrf
					<div class="row">
							<div class="col-12 p-0">
									<a href="{{ route('documentoEstancia1Admin.index',$id['#proces']) }}" class="btn "  ><i class="zmdi zmdi-arrow-left"></i></a>
							</div>
							<div class="col-12 p-1">
								@switch($id['#doc'])
									@case(1)<input type="text" name="observaciones" value="{{$dato->observaciones_c_h}}" class="observaciones" >
									@break
									@case(2)<input type="text" name="observaciones" value="{{$dato->observaciones_c_d}}" class="observaciones" >
									@break
									@case(3)<input type="text" name="observaciones" value="{{$dato->observaciones_c_r}}" class="observaciones" >
									@break
									@case(4)<input type="text" name="observaciones" value="{{$dato->observaciones_c_p}}" class="observaciones" >
									@break
									@case(5)<input type="text" name="observaciones" value="{{$dato->observaciones}}" class="observaciones" >
									@break
									@case(6)<input type="text" name="observaciones" value="{{$dato->observaciones_c_r}}" class="observaciones" >
									@break
									@case(7)<input type="text" name="observaciones" value="{{$dato->observaciones_d_p}}" class="observaciones" >
									@break
									@case(8)<input type="text" name="observaciones" value="{{$dato->observaciones_c_l}}" class="observaciones" >
									@break
									@case(9)<input type="text" name="observaciones" value="{{$dato->observaciones_c_c}}" class="observaciones" >
									@break
									@case(10)<input type="text" name="observaciones" value="{{$dato->observaciones_r_m}}" class="observaciones" >
									@break
									@case(11)<input type="text" name="observaciones" value="{{$dato->observaciones_r_m}}" class="observaciones" >
									@break
									@case(12)<input type="text" name="observaciones" value="{{$dato->observaciones_r_m}}" class="observaciones" >
									@break
									@case(13)<input type="text" name="observaciones" value="{{$dato->observaciones_r_m}}" class="observaciones" >
									@break
									@case(14)<input type="text" name="observaciones" value="{{$dato->observaciones_r_m}}" class="observaciones" >
									@break
									@case(15)<input type="text" name="observaciones" value="{{$dato->observaciones_r_m}}" class="observaciones" >
									@break
									@case(16)<input type="text" name="observaciones" value="{{$dato->observaciones_r_m}}" class="observaciones" >
									@break
									@case(17)<input type="text" name="observaciones" value="{{$dato->observaciones_r_m}}" class="observaciones" >
									@break
									@case(18)<input type="text" name="observaciones" value="{{$dato->observaciones_r_m}}" class="observaciones" >
									@break
									@case(19)<input type="text" name="observaciones" value="{{$dato->observaciones_r_m}}" class="observaciones" >
									@break
									@case(20)<input type="text" name="observaciones" value="{{$dato->observaciones_r_m}}" class="observaciones" >
									@break
									@case(21)<input type="text" name="observaciones" value="{{$dato->observaciones_r_m}}" class="observaciones" >
									@break
									@default
								@endswitch
							</div>
					</div>
				</form>
			@empty
		    @endforelse	
                    
          
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
<style>
	.id_d{
		visibility: hidden;
		display: none;
		width:10px;
	}

	.observaciones{
		width: 100%;
		height: 300px;
	}
</style>