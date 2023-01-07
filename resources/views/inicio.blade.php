<!DOCTYPE html>
<html lang="es">
@include('plantilla/alumno/head')

<body>
    @include('plantilla/alumno/navBar')

    <div class="container-fluid colorbg">

        <div class="titulo">
            <h2 class="estiloTitulo">Registros <small>(Estancias/Estadías)</small></h2>
        </div>
        <div class="contenedor">
            <div class="carta">
                <h4>Estancias</h4>
                <img src="{{ asset('/css/documentos.png') }}">

                <div class="row">
                    <a href="{{ route('estancia1.index', [1]) }}">Estancias I</a>
                </div>
                <div class="row">
                    <a href="{{ route('estancia1.index', [2]) }}">Estancias II</a>
                </div>
            </div>
            <div class="carta">
                <h4>Estadías</h4>
                <img src="{{ asset('/css/documentos.png') }}">

                <div class="row">
                    <a href="{{ route('estancia1.index', [3]) }}">Estadías</a>
                </div>
                <div class="row">
                    <a href="{{ route('estancia1.index', [4]) }}">Estadías Nacionales</a>
                </div>

            </div>
            <div class="carta">
                <h4>Servicio Social</h4>
                <img src="{{ asset('/css/documentos.png') }}">

                <div class="row">
                    <a href="{{ route('estancia1.index', [5]) }}">Servicio Social</a>
                </div>

            </div>
            <div class="estiloAviso">
				<embed src="css/calendario.pdf#toolbar=0" height="500" width="1000" type="" style="padding: 2%">
            </div>
        </div>
    </div>
    @include('plantilla/alumno/footer')
</body>

</html>
