<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Estimado estudiante:</h3>
    @switch($status)
        @case(1)<!--Aceptado-->
        <p>Este documento "{{$nameDoc}}" fue aceptado</p>
            @break
        @case(2)<!--Obervaciones-->
        <p>Favor de verificar que el documento "{{$nameDoc}}" que no corresponde al documento solicitado.</p>
        <br>
        <p>Entra a la página: <a href="ceduladeregistro.upqroo.edu.mx/">Estancias y Estadías</a></p>
            @break
        @default
            
    @endswitch
    
</body>
</html>