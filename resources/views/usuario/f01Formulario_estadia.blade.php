<!doctype html>
<html lang="es">
    <head>
    <title>Carta Presentacion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <script src="https://www.google.com/recaptcha/api.js"></script>       
     <style>
            /** Define the margins of your page **/
            
            .Parrafo{
             font-size: 15px;
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
            .alumno{
                width: 100%;
                text-align: center;
            }
            input{
                height: 20px;
                font-size: 12px;           
            }
            select{
                height: 20px;
                font-size: 12px;           
            }
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->

        <!-- Wrap the content of your PDF inside a main tag -->
        <form action="{{route('f01Guardar_estadia.index')}}" method="POST">
            @csrf
            <div class="container p-3">
                <main>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{ route('estadia.index') }}" class="btn "><i class="zmdi zmdi-arrow-left"></i></a>
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-4">
                            <p class="ParrafoFecha">
                                UNIVERSIDAD POLITÉCNICA DE QUINTANA ROO.
                                <br>DIRECCIÓN DE VINCULACIÓN, DIFUSION Y 
                                <br>EXTENSIÓN UNIVERSITARIA.
                                <br>
                                <br>
                                Asunto: Carta de Presentación para programa de Estadía
                                <br>
                                <br>
                                Fecha: Cancún, Quintana Roo a <?php echo date("d/m/y");?>.
                            </p>
                        </div>

                    </div>
                    <div class="row">

                    </div>
                    <p class="ParrafoEmpresa">
                        <div class="row">
                            <div class="col-4 p-1">
                                <input type="text" name="ape_paterno_ae" placeholder="Apellido Paterno Asesor empresarial" class="alumno">
                            </div>
                            <div class="col-4 p-1">
                                <input type="text" name="ape_materno_ae" placeholder="Apellido Materno Asesor empresarial" class="alumno">
                            </div>
                            <div class="col-4 p-1">
                                <input type="text" name="nombres_ae" placeholder="Nombres Asesor empresarial" class="alumno">
                            </div>
                            <div class="col-12 p-1">
                                <b><input type="text" name="puesto" placeholder="Puesto" id=""></b>
                            </div>
                            <div class="col-12 p-1">
                                <b><input type="text" name="nombre_emp"  placeholder="Nombre Empresa"></b>
                            </div>
                        </div>
                        <br><b>P R E S E N T E</b> 
                    </p>
                    <div class="Parrafo">
                        Reciba por este medio un cordial saludo, el motivo de esta carta es  presentarle a <input type="text" name="ape_paterno" placeholder="Apellido Paterno"> <input type="text" name="ape_materno" placeholder="Apellido Materno"> <input type="text" name="nombres" placeholder="Nombres">,
                        quien es alumno regular de la Universidad Politécnica de Quintana Roo, con 
                        número de matrícula <b><input type="text" name="matricula" id="" placeholder="Matricula" ></b>,  quien durante el periodo <select class="" name="periodo" id="" aria-label="">
                            <option value="1">Enero-Abril</option>
                            <option value="2">Mayo-Octubre</option>
                            <option value="3">Septiembre-Diciembre</option>
                            
        
                        </select>, cursa el
                        <b><select class="" name="cuatrimestre" id="" aria-label="">
                            <option value="1">Primer Cuatrimestre</option>
                            <option value="2">Segundo Cuatrimestre</option>
                            <option value="3">Tercero Cuatrimestre</option>
                            <option value="4">Cuarto Cuatrimestre</option>
                            <option value="5">Quinto Cuatrimestre</option>
                            <option value="6">Sexto Cuatrimestre</option>
                            <option value="7">Septimo Cuatrimestre</option>
                            <option value="8">Octavo Cuatrimestre</option>
                            <option value="9">Noveno Cuatrimestre</option>
                            <option value="10">Decimo Cuatrimestre</option>
        
                        </select></b> cuatrimestre de estudios del Programa Educativo de <b><select class="" name="id_carrera" id="" aria-label="">
                            <option value="1">Ing. Biomédica</option>
                            <option value="2">Ing. Biotecnología</option>
                            <option value="3">Ing. Financiera</option>
                            <option value="4">Ing. Software</option>
                            <option value="5">Lic. Admon Y Gestion De PyMes</option>
                            <option value="6">Lic. Gestión Empresarial</option>
                            <option value="7">Lic. Terapia Física</option>
                        </select></b>   
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
                    @forelse ($vinculacion as $datoV)
                        <p class="ParrafoFirma">
                            <b>ATENTAMENTE</b>
                            <br><small>“Conocimiento, Trabajo y Virtud”</small>
                            <br>
                            <img src="{{ asset("firma/".$datoV->firma )}}" alt="" />
                            <br><b>{{$datoV->nombre_u}}</b>
                            <br>{{$datoV->cargo_u}}
                            <br><small>c.c.p. Archivo/ Minutario </small>
                        </p>
                    @empty
                        
                    @endforelse                   
                        
                </main>
                <button class="btn btn-dark btn-lg btn-block" type="submit"><i > Guardar</i></button>    
            </div>
        </form>
        
        
    </body>
</html>
