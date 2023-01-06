<!DOCTYPE html>
<html lang="es">
	@include('plantilla/admin/head')
<body>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		@include('plantilla/alumno/navBar')
		<!-- Content page -->
		<div class="container p-3">
			<div class="page-header">
			  <h2 class="text-titles">Observaciones <small>(Carta responsiva Estancia)</small></h2>
			</div>
		</div>
		<div class="observaciones">
            @forelse ($datos as $dato)
                    {{$dato->observaciones_c_r}}, cancele el documento y vuelva a subirlo con los cambios antes mencionados.
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