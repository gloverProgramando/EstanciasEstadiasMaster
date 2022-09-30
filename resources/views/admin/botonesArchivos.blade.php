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
		<div class="container p-3">
			<div class="page-header">
			  <h2 class="text-titles">Activar Subida De Archivos<small></small></h2>
			</div>
		</div>
         <!---notificacion --->
         @include('notificaciones/notificaciones')  
            <div class="container">
            <form method="POST" action="{{ route('actualizar_botones.index') }}">
                @csrf
                @method("PUT")
                <div class="row align-items-center">
                    <div class=" col-9 col-sm-9 col-md-9">
                        <h5>Primera fase:</h5>
                        <p>1.- Carga horaria</p>
                        <p>2.- Constancia de vigencia del IMSS</p>
                        <p>3.- Carta de exclusion</p>
                        <p>4.- Carta de presentacion </p>

                    </div>
                    <div class=" col-sm-12 col-md-3 ">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio1" id="btnradio1" autocomplete="off" checked value="1">
                            <label class="btn btn-outline-primary" for="btnradio1">Activar</label>
                          
                            <input type="radio" class="btn-check" name="btnradio1" id="btnradio2" autocomplete="off" value="0">
                            <label class="btn btn-outline-primary" for="btnradio2">Desactivar</label>
                          
                          </div>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class=" col-9 col-sm-9 col-md-9">
                        <h5>Segunda fase:</h5>
                        <p>1.- Carta de aceptacion</p>
                        <p>2.- Cedula de registro</p>
                        <p>3.- Definición de proyecto</p>

                    </div>
                    <div class=" col-sm-12 col-md-3 ">
                        <div class="btn-group2" role="group2" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio3" id="btnradio3" autocomplete="off" checked value="1">
                            <label class="btn btn-outline-primary" for="btnradio3">Activar</label>
                          
                            <input type="radio" class="btn-check" name="btnradio3" id="btnradio4" autocomplete="off" value="0">
                            <label class="btn btn-outline-primary" for="btnradio4">Desactivar</label>
                          
                          </div>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class=" col-9 col-sm-9 col-md-9">
                        <h5>Tercera fase:</h5>
                        <p>1.- F05</p>
                        <p>2.- Evaluacion</p>

                    </div>
                    <div class=" col-sm-12 col-md-3 ">
                        <div class="btn-group3" role="group3" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio5" id="btnradio5" autocomplete="off" checked value="1">
                            <label class="btn btn-outline-primary" for="btnradio5">Activar</label>
                          
                            <input type="radio" class="btn-check" name="btnradio5" id="btnradio6" autocomplete="off" value="0">
                            <label class="btn btn-outline-primary" for="btnradio6">Desactivar</label>
                          
                          </div>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center justify-content-center">
                    
                        <div class="col-sm-1 col-md-1">
                            <button type="submit" class="btn btn-outline-success btn-lg">Enviar</button>
                        </div>
                </div>
                <hr>
            </form>
            </div>
       

	</section>
	<!--====== Scripts -->
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/material.min.js"></script>
	<script src="../js/ripples.min.js"></script>
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../js/main.js"></script>
	<script>
		$.material.init();
	</script>
    <script>
        $(document).ready(function(){
	        $("input[name=texto]").keyup(function(){
  	        $("input[name=texto1]").val(this.value);
          });
        });
    </script>    
</body>
</html>
</html>
<style>
    .doc{
        box-shadow: 0 1px 7px rgb(0 0 0 / 20%);
    }
</style>