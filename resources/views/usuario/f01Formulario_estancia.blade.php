<!doctype html>
<html lang="es">
    <head>
    <title>Carta Presentacion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            <img class="p-4" src="https://blogger.googleusercontent.com/img/a/AVvXsEjBGlMA5tjLyM8uamrykBAvv8ilziCwcI1fK3W-p3E32as4QYP246rpCxDnidFs53col0XJyJAFPjYiQ7seh7u4dynuotKzNWtKw36LMjmqd4XMjyrQo7c4_C0deo1p8re04rHIt1qxhl7w0eqG7K3SX3OWB9NhPStrkZqujcGPLZ3F2v2iUKj12xMo=s704" height="60" alt="upqroo logo">
        </header>

        <footer>
            <img   class="p-4" src="https://blogger.googleusercontent.com/img/a/AVvXsEiQTApy1NifBFGu1O6jgfoWvtgufFqJ136h-FrtRbWKHKY3cbmi3tE8njcgse7MwaErdFbRikbQzVyaF2io8OUcYhUPu43CekTi5fdhyo4AKjzzb7WObhkJtf9m6u5YOdnSCGdnKknlnaNHxu9Blw7M8MK2bh5wTNuzUzNm6lCYmiEio6rWgt9kRy_e=s1783" height="50" alt="upqroo logo">
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
        @forelse ($usuario as $dato)
           @if(auth()->user()->name === $dato->matricula )
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
                                Asunto: Carta de Presentación para programa de Estancia.
                                <br>
                                <br>
                                Fecha: Cancún, Quintana Roo a <?php echo date("d/m/y");?>.
                        </p>
                   </td>
               </tr>
           </table>
           
           <p class="ParrafoEmpresa">
                <b>{{$dato->ape_paterno_ae}} {{$dato->ape_materno_ae}} {{$dato->nombres_ae}}</b>
                <br><b>CARGO DENTRO DE LA EMPRESA</b>
                <br><b>{{$dato->nombre_emp}}</b>
                <br><b>P R E S E N T E</b> 
           </p>
           <div class="Parrafo">
                Reciba por este medio un cordial saludo, el motivo de esta carta es  presentarle a <b>{{$dato->ape_paterno}} {{$dato->ape_materno}} {{$dato->nombres}}</b>,
                quien es alumno regular de la Universidad Politécnica de Quintana Roo, con 
                número de matrícula <b>{{$dato->matricula}}</b>,  quien durante el periodo <b>PERIODO CUATRIMESTRE</b>, cursa el
                <b>NO. DE CUATRIMESTRE</b> cuatrimestre de estudios del Programa Educativo de <b>{{$dato->nombre_carrera}}</b>   
            </div>
            <br>
            <div class="Parrafo">
                De igual forma solicito a usted,  atentamente su anuencia a fin de que al estudiante antes citado  
                se le permita realizar en ese prestigiado organismo su programa de Estancia reglamentaria,
                misma que comprende un total de <b>120</b>, horas y cuyo objetivo es que el alumno realice actividades 
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
            @forelse ($vinculacion as $datoV)
                <p class="ParrafoFirma">
                    <b>ATENTAMENTE</b>
                    <br><small>“Conocimiento, Trabajo y Virtud”</small>
                    <br>
                    <img src="{{ public_path("firma/".$datoV->firma )}}" alt="Firma" width='10%' />
                    <br><b>{{$datoV->nombre_u}}</b>
                    <br>{{$datoV->cargo_u}}
                    <br><small>c.c.p. Archivo/ Minutario </small>
                </p>
            @empty
                
            @endforelse
            
           @endif                     
        @empty

        @endforelse            
        </main>
    </body>
</html>
