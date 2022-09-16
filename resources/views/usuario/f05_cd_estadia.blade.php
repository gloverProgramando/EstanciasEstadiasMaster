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
            .p-1{
                padding: .25rem!important;
            }
            .p-2{
                padding: .5rem!important;
            }
            .m-0{
                margin: 0;
            }
            .text-center{
                text-align:center;
            }
            .text-left{
               text-align: left;
            }
            .text-right{
                text-align: right;
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
                                        <p class="cabecera">CARTA DE LIBERACIÓN<br>FAVOR DE REALIZAR ESTA CARTA<br>EN UNA HOJA MEMBRETADA DE LA EMPRESA</p>
                                    </div>
                                    <div class="text-center">
                                        <p class="cabecera"><b>CARTA DE LIBERACIÓN DE ESTADÍA</b></p>
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
                            Sin datos comunicarse con el adminitrador
                        @endforelse
                    </p>
                    <div class="Parrafo">
                            Por medio de la presente, hacemos constar que el alumno <b>[ NOMBRE DEL ALUMNO ]</b>, del Programa Educativo [ NOMBRE DEL PROGRAMA EDUCATIVO ], 
                            ha cumplido satisfactoriamente sus actividades de  Estadía, realizada en esta <b>[ EMPRESA/INSTITUCIÓN ]</b>; elaborando el proyecto: [ NOMBRE DEL PROYECTO ]
                            durante el periodo comprendido del <b>[ FECHA DE INICIO ]</b>  al <b>[ FECHA DE TERMINACIÓN ]</b>, el cual desarrolló en el departamento de <b>[ NOMBRE DEL DEPARTAMENTO ]</b>,
                            bajo la asesoría de <b>[ NOMBRE DEL ASESOR EXTERNO ]</b>, por parte de la empresa.     
                        </div>
                        <br>      
                        <br>
                        <div class="Parrafo">
                        Se autoriza de igual forma, el uso de la información institucional y de los resultados obtenidos para la realización del reporte final de la estadía.
                        </div>
                        <br>
                        <br>
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
                            <table class="table table-borderless p-0 m-1" >
                                <tbody>
                                    <tr class="p-0 m-0">
                                        <td colspan="2" class="p-1"><div><div style="border-bottom: 1px solid black;"></div><div class="subT text-center"><small>[ NOMBRE Y FIRMA DEL ASESOR EMPRESARIAL ]</small></div><div class="subT text-center"><small>[ CARGO ]</small></div><div class="subT text-center"><small></small></div></div></td>
                                        <td colspan="1" ></td>
                                        <td colspan="2" class="p-1"><div><div style="border-bottom: 1px solid black;"></div><div class="subT text-center"><small>[ NOMBRE Y FIRMA DE REVISIÓN ]</small></div><div class="subT text-center"><small>ASESOR ACADÉMICO</small></div></div></td>
                                    </tr>
                                    <br>
                                    <br>
                                </tbody>
                            </table>
                        </p>         
        </main>
    </body>
</html>
