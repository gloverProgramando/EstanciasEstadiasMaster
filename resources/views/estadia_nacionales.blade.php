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
			  <h2 class="text-titles">Formatos <small>(Estadías nacionales)</small></h2>
			</div>
		</div>
		@include('notificaciones/notificaciones')
		<div class="container p-2">
			<ol class="list-group borde">
				
			</ol>
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
	@media (max-width: 406px){
	
		.borde{
			border: 1px solid darkgrey;
		}
	}
</style>