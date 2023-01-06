<!DOCTYPE html>
<html lang="es">

<head>
	@include('plantilla/alumno/head')
</head>

<body>
    <!-- NavBar -->
    @include('plantilla/alumno/navBar')
    <!-- Content page-->
    <section class="full-box dashboard-contentPage">
        <!-- Content page -->
        <div class="container p-4">
            <div class="page-header">
                <h2 class="text-titles" style="text-align: center">Observaciones <small></small></h2>
            </div>
            <div class="row">
                <div class="col-12 p-0">
                    <a href="{{ route('estancia1.index', [$proceso]) }}" class="btn "><i
                        class="zmdi zmdi-arrow-left"></i></a>
                </div>
                <div class="col-12 p-1">
                @forelse ($datos as $dato)
                    {{ $dato->observacion }}, cancele el documento y vuelva a subirlo con los cambios antes mencionados.
                @empty
                @endforelse
                </div>
            </div>
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
