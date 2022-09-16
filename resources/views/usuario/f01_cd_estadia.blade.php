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
                margin-top: 1cm; 
                margin-left: 1.4cm; 
                margin-right: 1.4cm; 
                margin-bottom: 1.5cm;  
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
                height: 100px; 

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
                width: 260px;
            }
            .colu2{
                width: 360px;
            }
            .firma{
                width: 300px;
            }
            .imgfirma{
                width: 100%
            }
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            <img style="padding:16px;" src="{{ public_path("firma/arriba.png" )}}" alt="Arriba" width='100%' />
        </header>

        <footer>
            <img style="padding:4px;" src="{{ public_path("firma/abajo.png" )}}" alt="Footer" width='100%' />
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
           <table>
               <tr>
                   <td class="colu">
                    
                   </td>
                   <td class="colu2">
                        <p class="ParrafoFecha">
                                UNIVERSIDAD POLITÉCNICA DE QUINTANA ROO.
                                <br>DIRECCIÓN DE VINCULACIÓN, DIFUSION Y 
                                <br>EXTENSIÓN UNIVERSITARIA.
                                <br>
                                <br>
                                Asunto: Carta de Presentación para programa de Estadía.
                                <br>
                                <br>
                                Fecha: Cancún, Quintana Roo a <?php setlocale(LC_TIME, $fecha);echo strftime(" %d de %B del %Y");?>.
                        </p>
                   </td>
               </tr>
           </table>
           
           <p class="ParrafoEmpresa">
                <b>[ NOMBRE DE LA PERSONA A LA CUAL VA DIRIGIDO EL OFICIO ]</b>
                <br><b>[ CARGO DENTRO DE LA EMPRESA ]</b>
                <br><b>[ NOMBRE DE LA EMRESA ]</b>
                <br><b>P R E S E N T E</b> 
           </p>
           <div class="Parrafo">
                Reciba por este medio un cordial saludo, el motivo de esta carta es  presentarle a <b>[ NOMBRE DEL ALUMNO ]</b>,
                quien es alumno regular de la Universidad Politécnica de Quintana Roo, con 
                número de matrícula <b>[ MATRÍCULA ]</b>,  quien durante el periodo <b>[ PERIODO CUATRIMESTRE ]</b>, cursa el
                <b>[ NO. DE CUATRIMESTRE ]</b> cuatrimestre de estudios del Programa Educativo de <b>[ NOMBRE DEL PROGRAMA EDUCATIVO ]</b>   
            </div>
            <br>
            <div class="Parrafo">
                De igual forma solicito a usted,  atentamente su anuencia a fin de que al estudiante antes citado  
                se le permita realizar en ese prestigiado organismo su programa de Estadía reglamentaria,
                misma que comprende un total de <b>600</b>, horas y cuyo objetivo es que el alumno realice actividades 
                de práctica en el campo laboral, vinculadas a las competencias adquiridas durante el ciclo de 
                formación previo al programa, así como el desarrollo de un proyecto acorde  a los requerimientos de su  empresa o institución. 
            </div>
            <br>
            <div class="Parrafo">
                Esperando contar con su valioso apoyo, que sin duda permitirá que nuestro alumno fortalezca los
                conocimientos adquiridos en su formación como futuro profesionista, quedo de usted. 
            </div> 
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            @forelse ($vinculacion as $datoV)
                <p class="ParrafoFirma">
                    <b>ATENTAMENTE</b>
                    <br><small>“Conocimiento, Trabajo y Virtud”</small>
                    <br>
                    <div class="firma">
                        <img src="{{ public_path("firma/".$datoV->firma )}}" class="imgfirma" alt="Firma" />
                    </div>
                    <br><b>{{$datoV->nombre_u}}</b>
                    <br>{{$datoV->cargo_u}}
                    <br><small>c.c.p. Archivo/ Minutario </small>
                </p>
                
            @empty
                     Sin datos de vinculación, comuniquese con el encargado.
            @endforelse
            
                    
        </main>
    </body>
</html>
