<!doctype html>
<html lang="es">
    <head>
    <title>Carta Presentacion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
            /** Define the margins of your page **/
            @page {
            }
            body { 
                margin-top: 0cm; 
                margin-left: 1.4cm; 
                margin-right: 1.4cm; 
                margin-bottom: 0cm;  
            }
            header {
                position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                color: white;
                text-align: center;
                line-height: 35px;
            }

            footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 0px; 

                /** Extra personal styles **/
                color: white;
                text-align: center;
                line-height: 35px;
            }
            .Parrafo{
             font-size: 13px;
             text-align: justify;
             text-justify: inter-word;
            }
            .ParrafoFecha{
             font-size: 12px;
             text-align:left;
             
            }
            .ParrafoFirma{
             font-size: 13px;
             text-align:left;
             
            }
            .ParrafoEmpresa{
             font-size: 13px;
             text-align: left;
            }
            .colu{
                width: 300px;
            }
            .colu2{
                width: 300px;
            }
            .cabecera{
                font-size: 14px;
            }
            .textoC{
                text-align: center;
                justify-content: center;
                align-items: center;
                vertical-align: middle;
                border-bottom: 1px solid black;
                border-left: 1px solid black;
                border-right: 1px solid black;
                border-top: 1px solid black;

            }
            .nombreP{
                text-align: center;
            }
            .p-0{
                padding: 0;
            }
            .p-2{
                padding: 4px;
            }
            .m-0{
                margin: 0;
            }
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
        </header>

        <footer>
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>

           <table>
               <tr>
                   <td colspan="2" class="p-0 m-0">
                        <div class="textoC">
                            <p class="cabecera"><b>MODELO DE CARTA DE ACEPTACIÓN</b><br>FAVOR DE REALIZAR ESTA CARTA<br>EN UNA HOJA MEMBRETADA DE LA EMPRESA</p>
                        </div>
                   </td>
               </tr>
               <tr>
                   <td class="colu p-0 m-0">
                        
                   </td>
                   <td class="colu2 p-2 m-0">
                        <p class="ParrafoFecha">
                                Fecha: Cancún, Quintana Roo a <?php setlocale(LC_TIME, $fecha);echo strftime(" %d de %B del %Y");?>.
                        </p>
                   </td>
               </tr>
           </table>
           <br>
           <br>
           <p class="ParrafoEmpresa">
               @forelse ($vinculacion as $dato)
                    <b>{{$dato->nombre_u}}</b>
                    <br><b>{{$dato->cargo_u}}</b>
                    <br><b>UNIVERSIDAD POLITÉCNICA DE QUINTANA ROO</b> 
               @empty
                    Sin datos comuniquese con el encargado
               @endforelse
           </p>
           <div class="Parrafo">
                Por medio de la presente hacemos constar que el alumno <b>[ NOMBRE DEL ALUMNO ]</b>, del Programa Educativo
                <b>[ NOMBRE DEL PROGRAMA EDUCATIVO ]</b> ha sido aceptado en esta empresa para la realización de su programa y proyecto de Estadía denominado:    
            </div>
            <br>
            <div class="nombreP">
                [ NOMBRE DEL PROYECTO ]
            </div>
            <br>
            <div class="Parrafo">
            El cual desarrollará en el departamento de <b>[ NOMBRE DEL DEPARTAMENTO ]</b> , bajo la asesoría de
            <b>[ NOMBRE DEL ASESOR EXTERNO ]</b>, por parte de su organización y de <b>[ NOMBRE DEL ASESOR ACADÉMICO ]</b>,
            por parte de la Universidad Politécnica de Quintana Roo.
            </div>
            <br>
            <div class="Parrafo">
            Las actividades del alumno en la empresa darán comienzo a partir del <b>[ FECHA DE INICIO ]</b> 
             y terminará el día <b>[ FECHA DE TERMINACIÓN ]</b>, con un horario de <b>especificaciones de horario</b>, 
             a fin de completar las 600 horas.
            </div>
            <br>

            <div class="Parrafo">
            Se extiende la presente de conformidad con los requisitos establecidos dentro del proceso de Estadías.
            </div> 
                <br>
                <br>
            <p class="ParrafoFirma">
                <b>ATENTAMENTE</b>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <b>[ NOMBRE Y FIRMA DEL REPRESENTANTE DE LA EMPRESA ]</b>

                <br><small>[ CARGO ]</small>
            </p>           
        </main>
    </body>
</html>
