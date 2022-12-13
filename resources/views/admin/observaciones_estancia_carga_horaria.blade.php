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
    <!-- NavBar -->
		@include('plantilla/admin/navBar')
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
        <div class="container p-3">
			<div class="page-header">
			    <h2 class="text-titles">Observaciones <small></small></h2>
			</div>
		</div>
        <div class="container">
				<form action="{{ route('guardarObservaciones_documento.index',[$datos['id_c'], $datos['idU'],$datos['#proces'],$datos['#doc']]) }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="col-12 p-0">
                                <a href="{{ route('documentoEstancia1Admin.index',[$datos['#proces']]) }}" class="btn "  ><i class="zmdi zmdi-arrow-left"></i></a>
                        </div>
                        <div class="col-12 p-1">
                            <textarea class="form-control" id="observaciones" rows="3" name="observaciones"></textarea>
                        </div>
                        <div class="col-12 p-1">
                            <button class="btn btn-dark btn-lg btn-block" type="submit">Guardar</button>
                        </div>
                    </div>
                </form>											

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
</style> 