<!DOCTYPE html>
<html lang="es">
@include('plantilla/alumno/head')

<body>
    <!-- Content page-->
    <section class="full-box dashboard-contentPage">
        <!-- NavBar -->
        @include('plantilla/alumno/navBar')
        <!-- Content page -->
        <div class="container p-3">
            <div class="page-header">
                <h2 class="text-titles">Errores <small> Si detecta alguna falla en esta plataforma comunicar al
                        correo:</small></h2>
            </div>
        </div>
        <div class="container p-2">
            <div>
                <input type="text" name="" id="" class="btnFormato text-center fallo"
                    value="soportestanciasyestadias@upqroo.edu.mx">
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
    @include('plantilla/alumno/footer')
</body>

</html>
