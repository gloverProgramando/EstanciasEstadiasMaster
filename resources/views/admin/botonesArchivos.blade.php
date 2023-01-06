<!DOCTYPE html>
<html lang="es">
@include('plantilla/admin/head')
<body>
		<!-- NavBar -->
		@include('plantilla/admin/navBar')

        <div class="container-md coloractarchivos">
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
                    @if($btns1[0]->periodo1==0)
                    <div class=" col-sm-12 col-md-3 ">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio1" id="btnradio1" autocomplete="off" checked value="1">
                            <label class="btn btn-outline-primary" for="btnradio1">Activar</label>
                            <input type="radio" class="btn-check" name="btnradio1" id="btnradio2" autocomplete="off" value="0">
                            <label class="btn btn-outline-primary" for="btnradio2">Desactivar</label>
                        </div>
                    </div>
                    @else
                    <div class=" col-sm-12 col-md-3 ">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio1" id="btnradio1" autocomplete="off" value="1">
                            <label class="btn btn-outline-primary" for="btnradio1">Activar</label>
                            <input type="radio" class="btn-check" name="btnradio1" id="btnradio2" autocomplete="off" checked value="0">
                            <label class="btn btn-outline-primary" for="btnradio2">Desactivar</label>
                        
                        </div>
                    </div>
                    @endif
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class=" col-9 col-sm-9 col-md-9">
                        <h5>Segunda fase:</h5>
                        <p>1.- Carta de aceptacion</p>
                        <p>2.- Cedula de registro</p>
                        <p>3.- Definición de proyecto</p>

                    </div>
                    @if($btns1[0]->periodo2==0)
                    <div class=" col-sm-12 col-md-3 ">
                        <div class="btn-group2" role="group2" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio3" id="btnradio3" autocomplete="off" checked value="1">
                            <label class="btn btn-outline-primary" for="btnradio3">Activar</label>
                            <input type="radio" class="btn-check" name="btnradio3" id="btnradio4" autocomplete="off" value="0">
                            <label class="btn btn-outline-primary" for="btnradio4">Desactivar</label>
                        </div>
                    </div>
                    @else
                    <div class=" col-sm-12 col-md-3 ">
                        <div class="btn-group2" role="group2" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio3" id="btnradio3" autocomplete="off" value="1">
                            <label class="btn btn-outline-primary" for="btnradio3">Activar</label>
                            <input type="radio" class="btn-check" name="btnradio3" id="btnradio4" autocomplete="off" checked value="0">
                            <label class="btn btn-outline-primary" for="btnradio4">Desactivar</label>
                        </div>
                    </div>
                    @endif
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class=" col-9 col-sm-9 col-md-9">
                        <h5>Tercera fase:</h5>
                        <p>1.- Carta De Liberacion</p>
                        <p>2.- Evaluacion</p>

                    </div>
                    @if($btns1[0]->periodo3==0)
                    <div class=" col-sm-12 col-md-3 ">
                        <div class="btn-group3" role="group3" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio5" id="btnradio5" autocomplete="off" checked value="1">
                            <label class="btn btn-outline-primary" for="btnradio5">Activar</label>
                            <input type="radio" class="btn-check" name="btnradio5" id="btnradio6" autocomplete="off" value="0">
                            <label class="btn btn-outline-primary" for="btnradio6">Desactivar</label>
                        </div>
                    </div>
                    @else
                    <div class=" col-sm-12 col-md-3 ">
                        <div class="btn-group3" role="group3" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio5" id="btnradio5" autocomplete="off" value="1">
                            <label class="btn btn-outline-primary" for="btnradio5">Activar</label>
                            <input type="radio" class="btn-check" name="btnradio5" id="btnradio6" autocomplete="off" checked value="0">
                            <label class="btn btn-outline-primary" for="btnradio6">Desactivar</label>
                        </div>
                    </div>
                    @endif
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
        </div>
		<!-- Content page -->
	

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
