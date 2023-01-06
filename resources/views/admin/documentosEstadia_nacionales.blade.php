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
			  <h2 class="text-titles">Documentos Registrados<small>(Estadía nacionales)</small></h2>
			</div>
		</div>
         <!---notificacion --->
         @include('notificaciones/notificaciones')  
            
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
</html>
<style>
    .doc{
        box-shadow: 0 1px 7px rgb(0 0 0 / 20%);
    }
</style>