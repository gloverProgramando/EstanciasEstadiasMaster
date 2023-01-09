<!DOCTYPE html>
<html lang="es">
@include('plantilla/alumno/head')

<body>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		@include('plantilla/alumno/navBar')
		<!-- Content page -->

		<div class="container p-2">
        @csrf
        @if(auth()->check())
            @forelse ($definicionP['def'] as $dato)
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="text-5xl text-center pt-24">Se ha guardado el registro correctamente <b style="color: green;">{{ auth()->user()->name }}</b></h1>
                </div>
                <div class="col-4 ">
                    
                    @switch($dato->id_proceso)
                        @case(1)
                            <a href="{{ route('descarga_cd_estancia_f04.index') }}">
                                <button type="button" class="btn btn-outline-info btnDes"><i class="zmdi zmdi-download"> Descargar</i></button>
                            </a>
                        @break
                    
                        @case(2)
                            <a href="{{ route('descarga_cd_estancia_f04.index') }}">
                                <button type="button" class="btn btn-outline-info btnDes"><i class="zmdi zmdi-download"> Descargar</i></button>
                            </a>
                        @break

                        @case(3)
                          <!---  <a href="{{ route('descarga_cd_estadia_f04.index') }}">
                                <button type="button" class="btn btn-outline-info btnDes"><i class="zmdi zmdi-download"> Descargar</i></button>
                            </a>
                            --->
                        @break
                        @default
                            Hay un fallo 
                            <a href="{{ ('inicio.index') }}">
                                <button type="button" class="btn btn-outline-info btnDes"><i class="zmdi zmdi-download"> Regrasar</i></button>
                            </a>
                    @endswitch      
                    
                </div>
            </div>
                                   
            @empty
                                         
            @endforelse	
        
        @endif
				
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