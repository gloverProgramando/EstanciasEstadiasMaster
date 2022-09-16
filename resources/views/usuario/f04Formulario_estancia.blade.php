<!doctype html>
<html lang="es">
    <head>
    <title>DEFINICIÓN DEL PROYECTO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <script src="https://www.google.com/recaptcha/api.js"></script>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <!-- Wrap the content of your PDF inside a main tag -->
            <div class="container">
                <div class="col-6">
                    <a href="{{ route('estancia1.index',[$proceso[0]]) }}" class="btn "  ><i class="zmdi zmdi-arrow-left"></i></a>
                </div>
                <p class="text-center p-0 m-0"><b>Universidad Politécnica de Quintana Roo</b><br>Dirección de Vinculación, Difusión y Extensión Universitaria</p>
                @forelse ($datos['cedula'] as $dato)                            
                    <form  method="POST" action="{{ route('f04Guardar1.index') }}"> 
                        @csrf
                        <!--titulo-->
                        <table class="table table-borderless p-0 m-1 tabla_r" >
                                <tr class="p-0 m-0">
                                    <td class="p-0">
                                        <div>
                                            <div class="titulo text-center">  DEFINICIÓN DEL PROYECTO</div>
                                            <div class="subT text-center">
                                                <small>[ {{$proceso[1]}}]</small> 
                                                <select class="form-control text-center " name="id_proceso" id="" required>
                                                    <option value="{{$proceso[0]}}">{{$proceso[1]}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <!--fecha-->
                                    <td class="p-0"><div class="subT text-right" style="height: 5px;"><small>Fecha:</small></div></div></td>
                                    <td colspan="2" class="p-0" style="height: 5px;"><div><div class="text-center fecha" style="border-bottom: 1px solid black;"><small>Cancun, Quintana Roo a <?php echo date("d/m/Y");?></small> </div><div class="subT text-center"><small>LOCALIDAD, ESTADO Y FECHA (DD/MM/AA)</small></div></div></td>
                                    
                                </tr>
                            </table>
                            <!--datos alumno-->
                            <table class="table table-borderless p-0 m-1 tabla_r">
                                <tr class="p-0 m-0">
                                    <td class="p-0 px-1 datos_a" style="border: 1px solid black;"><div><div class=" text-left" ><small>Datos del Alumno </small></div></div></td>
                                    <td class="p-0 px-1 asesor" style=" border: 1px solid black;"><div><div class=" text-left"> <small>Nombre:</small></div></div></td>
                                    <td colspan="2" class="p-0" style="border: 1px solid black;">
                                        <div>
                                            <input type="text" disabled class="form-control text-center datosF04" placeholder="{{$dato->ape_paterno}} {{$dato->ape_materno}} {{$dato->nombres}}">
                                        </div>
                                    </td>
                                </tr>
                                <tr class="p-0 m-0"> 
                                    <td class="p-0 px-1" style="width: 100px; border: 1px solid black;">
                                        <div class="row">
                                            <div class=" text-left col-12 col-md-4" ><small>Grupo: </small></div>
                                            <div class="co-12 col-md-8"><input type="text" class="form-control text-center datosF04" style="width: 70px;" placeholder="Grupo" name="grupo" ></div>
                                        </div>
                                    </td>
                                    <td class="p-0 px-1 asesor" style="border: 1px solid black;"><div><div class=" text-left"> <small>Asesor UPQROO:</small></div></div></td>
                                    <td colspan="2" class="p-0" style="border: 1px solid black;">
                                        <div>
                                            <input type="text" disabled class="form-control text-center datosF04" placeholder="{{$dato->ape_paterno_aa}} {{$dato->ape_materno_aa}} {{$dato->nombres_aa}}">
                                        </div>
                                    </td>
                                </tr>
                                <tr class="p-0 m-0"> 
                                    <td class="p-0 px-1 " style="width: 100px; border-left: 1px solid black;"><div><div class=" text-center" ><small>Datos </small></div></div></td>
                                    <td class="p-0 px-1 asesor" style=" border: 1px solid black;"><div><div class=" text-left"> <small>Nombre:</small></div></div></td>
                                    <td colspan="2" class="p-0" style="border: 1px solid black;">
                                        <div>
                                            <input type="text" disabled class="form-control text-center datosF04" placeholder="{{$dato->nombre_emp}}">
                                        </div>
                                    </td>
                                </tr>
                                <tr class="p-0 m-0"> 
                                    <td class="p-0 px-1 " style="width: 100px; border-left: 1px solid black;"><div><div class=" text-center" ><small>de la </small></div></div></td>
                                    <td class="p-0 px-1 asesor" style=" border: 1px solid black;"><div><div class=" text-left"> <small>Asesor:</small></div></div></td>
                                    <td colspan="2" class="p-0" style="border: 1px solid black;">
                                        <div>
                                            <input type="text" disabled class="form-control text-center datosF04" placeholder="{{$dato->ape_paterno_ae}} {{$dato->ape_materno_ae}} {{$dato->nombres_ae}}">
                                        </div>
                                    </td>
                                </tr>
                                <tr class="p-0 m-0"> 
                                    <td class="p-0 px-1 " style="width: 100px; border-left: 1px solid black; border-bottom: 1px solid black;"><div><div class=" text-center" ><small>Empresa</small></div></div></td>
                                    <td class="p-0 px-1 asesor" style=" border: 1px solid black;"><div><div class=" text-left"> <small>Puesto:</small></div></div></td>
                                    <td colspan="2" class="p-0" style="border: 1px solid black;">
                                        <div>
                                            <input type="text" class="form-control text-center datosF04" name="puesto"placeholder="Puesto" >
                                        </div>
                                    </td>
                                </tr>
                            
                                <tr class="p-0 m-0">
                                    <td class="p-0 px-1" style="width: 100px; border: 1px solid black;"><div><div class=" text-left"> <small>Nombre del Proyecto:</small></div></div></td>
                                    <td colspan="3" class="p-0" style="border: 1px solid black;">
                                        <div>
                                            <input type="text" class="form-control text-center datosF04" disabled placeholder="{{$dato->nombre_proyecto}}">
                                        </div>
                                    </td>
                                </tr>
                                <tr class="p-0 m-0"> 
                                    <td class="p-0" style="width: 100px; border: 1px solid black;"><div><div class=" text-left"> <small>Objetivos del Proyecto:</small></div></div></td>
                                    <td colspan="3" class="p-0" style="border: 1px solid black;">
                                        <div>
                                            <input type="text" class="form-control text-center datosF04" name="objetivosP" placeholder="Objetivos del proyecto" >
                                        </div>
                                    </td>
                                </tr>
                            </table>
                                   <!--Errores-->
                                   @error('grupo')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('puesto')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('objetivosP')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror 
                                   @error('descripcion_competencias_1')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('etapas_proyecto_1')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('fecha_inicio_1')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('fecha_final_1')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('tiempo_1')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('descripcion_competencias_2')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('etapas_proyecto_2')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('fecha_inicio_2')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('fecha_final_2')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('tiempo_2')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('descripcion_competencias_3')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('etapas_proyecto_3')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('fecha_inicio_3')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('fecha_final_3')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('tiempo_3')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   
                                   @error('descripcion_competencias_4')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('etapas_proyecto_4')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                             
   
                                   @error('descripcion_competencias_5')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('etapas_proyecto_5')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                 
   
                                   @error('descripcion_competencias_6')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('etapas_proyecto_6')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                
   
                                   @error('descripcion_competencias_7')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('etapas_proyecto_7')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('fecha_inicio_7')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('fecha_final_7')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('tiempo_7')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
   
                                   @error('descripcion_competencias_8')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('etapas_proyecto_8')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                             
                                   @error('descripcion_competencias_9')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('etapas_proyecto_9')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
   
                                   @error('descripcion_competencias_10')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('etapas_proyecto_10')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
   
                                   @error('descripcion_competencias_11')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('etapas_proyecto_11')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
   
                                   @error('descripcion_competencias_12')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('etapas_proyecto_12')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
   
                                   @error('descripcion_competencias_13')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('etapas_proyecto_13')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
   
                                   @error('descripcion_competencias_14')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('etapas_proyecto_14')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
   
                                   @error('descripcion_competencias_15')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('etapas_proyecto_15')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('actividades')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('resultados')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('evidencia')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('instrumentos')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('asignaturas')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('topicos')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                   @error('estrategias')
                                   <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                   @enderror
                                <div class="table-responsive-sm ">
                                <table class="table table-borderless p-0 m-1 tabla_r">
                                    <!--titulos-->
                                    <thead class="table-secondary">
                                        <tr class="">
                                            <td class="p-0 px-1 " style="width: 230px; border-top: 1px solid black; border-left: 1px solid black;"><div><div class=" text-center" ><small>Descripción de Etapas del Proyecto</small></div></div></td>
                                            <td class="p-0 px-1 " style="width: 80px; border-top: 1px solid black; border-left: 1px solid black;"><div><div class=" text-center"> <small>Tiempo </small></div></div></td>
                                            <td class="p-0 px-1 " style="width: 80px; border-top: 1px solid black; border-right: 1px solid black;"><div><div class=" text-center"> <small>Aproximado </small></div></div></td>
                                            <td colspan="2" class="p-0 px-1" style=" border-top: 1px solid black; border-right: 1px solid black;"><div><div class=" text-center"> <small>Descripción de Competencias</small></div></div></td>
                                        </tr>
                                        <tr class="">
                                            <td class="p-0 px-1" style="width: 230px; border-left: 1px solid black;"><div><div class=" text-center" ><small></small></div></div></td>
                                            <td class="p-0 px-1 tabla" colspan="2" style="width: 160px; border-left: 1px solid black; border-right: 1px solid black;"><div><div class=" text-center"> <small>de Duración</small></div></div></td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border-right: 1px solid black;"><div><div class=" text-center"> <small></small></div></div></td>
                                        </tr>
                                    </thead>
                                    <!--cuerpo-->
                                    <tbody>
                                        <tr class="">
                                            <td class="p-0 px-1" style="width: 230px;  border-top: 1px solid black; border-left: 1px solid black;"><div><div class=" text-center" ><small></small></div></div></td>
                                            <td class="p-0 px-1 tabla" colspan="2" style="width: 160px; border: 1px solid black;"><div><div class=" text-center"> <small>Programar</small></div></div></td>
                                            <td colspan="2" class="p-0 px-1 tabla" style=" border-top: 1px solid black; border-right: 1px solid black;"><div><div class=" text-center"> <small></small></div></div></td>
                                        </tr>
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 230px; border-left: 1px solid black;"><div><div class=" text-center" ><small></small></div></div></td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black;"><div><div class=" text-center"> <small>Semana</small></div></div></td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black;"><div><div class=" text-center"> <small>Horas</small></div></div></td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border-right: 1px solid black;"><div><div class=" text-center"> <small></small></div></div></td>
                                        </tr>
                                        <!--1-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_1" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_1" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_1" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input type="number" name="tiempo_1" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_1" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--2-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_2" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_2" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_2" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input type="number" name="tiempo_2" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_2" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--3-->                     
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_3" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_3" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_3" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number"  name="tiempo_3" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_3" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--4-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_4" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_4" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_4" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number"  name="tiempo_4" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_4" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                        </tr>

                                        <!--5-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_5" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_5" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_5" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input type="number"  name="tiempo_5" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_5" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--6-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_6" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_6" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_6" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input type="number"  name="tiempo_6" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_6" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--7-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_7" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_7" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_7" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input type="number" name="tiempo_7" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_7" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--8-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_8" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_8" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_8" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input type="number"  name="tiempo_8" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_8" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--9-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_9" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_9" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_9" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input type="number"  name="tiempo_9" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_9" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--10-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_10" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_10" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_10" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number"  name="tiempo_10" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_10" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--11-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_11" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_11" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_11" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number"  name="tiempo_11" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_11" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--12-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_12" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_12" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_12" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number"  name="tiempo_12" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_12" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                            <!--13-->
                                            <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_13" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_13" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_13" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number"  name="tiempo_13" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_13" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                            <!--14-->
                                            <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_14" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_14" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_14" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number" name="tiempo_14" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_14" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                            <!--15-->
                                            <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_15" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_15" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_15" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number"  name="tiempo_15" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_15" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> 
                                </div>
                                <div class="table-responsive-sm">
                                <table class="table table-borderless p-0 m-1 tabla_r">
                                    <thead class="table-secondary">
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black;"><div><div class=" text-center" ><small>Actividades de Aprendizaje</small></div></div></td>
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black;"><div><div class=" text-center"> <small>Resultados de Aprendizaje</small></div></div></td>
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black;"><div><div class=" text-center"> <small>Evidencia</small></div></div></td>
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black;"><div><div class=" text-center"> <small>Instrumentos de Evaluación</small></div></div></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div>
                                                        <textarea name="actividades" class="form-control area" id="" cols="30" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div>
                                                        <textarea name="resultados" class="form-control area" id="" cols="30" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div>
                                                        <textarea name="evidencia" class="form-control area" id="" cols="30" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div>
                                                        <textarea name="instrumentos" class="form-control area" id="" cols="30" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                                <div class="table-responsive-sm">
                                <table class="table table-borderless p-0 m-1 tabla_r" >
                                    <thead class="table-secondary">
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 200px; border: 1px solid black;"><div><div class=" text-center" ><small>Asignaturas</small></div></div></td>
                                            <td class="p-0 px-1" style="width: 200px; border: 1px solid black;"><div><div class=" text-center"> <small>Tópicos Recomendados</small></div></div></td>
                                            <td class="p-0 px-1" style="width: 200px; border: 1px solid black;"><div><div class=" text-center"> <small>Estrategias Didácticas</small></div></div></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 200px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <textarea name="asignaturas" class="form-control area" id="" cols="30" rows="5"></textarea>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1" style="width: 200px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <textarea name="topicos" class="form-control area" id="" cols="30" rows="5"></textarea>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1" style="width: 200px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <textarea name="estrategias" class="form-control area" id="" cols="30" rows="5"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            
                            <br>
                            <br>
                            <br>
                            <table class="table table-borderless p-0 m-1 tabla_r" >
                                <tbody>
                                    <tr class="p-0 m-0">
                                        <td colspan="2" class="p-1"><div><div style="border-bottom: 1px solid black;"></div><div class="subT text-center"><small>{{$dato->ape_paterno_ae}} {{$dato->ape_materno_ae}} {{$dato->nombres_ae}}</small></div><div class="subT text-center"><small></small></div><div class="subT text-center"><small>{{$dato->nombre_emp}}</small></div></div></td>
                                        <td colspan="1" ></td>
                                        <td colspan="2" class="p-1"><div><div style="border-bottom: 1px solid black;"></div><div class="subT text-center"><small>{{$dato->ape_paterno_aa}} {{$dato->ape_materno_aa}} {{$dato->nombres_aa}}</small></div><div class="subT text-center"><small>{{$dato->nombre_carrera}}</small></div></div></td>
                                    </tr>
                                    <br>
                                    <br>
                                    <tr class="p-0 m-0">
                                        <td colspan="2" class="p-1 text-center sello" style="height: 70px; border-bottom: 1px solid black;">SELLO</td>
                                        <td colspan="1" ></td>
                                        <td colspan="2" class="p-1" style="height: 70px;"><div><div style="border-bottom: 1px solid black;"></div><div class="subT text-center"><small>{{$dato->ape_paterno}} {{$dato->ape_materno}} {{$dato->nombres}}</small></div></div></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-dark btn-lg btn-block" type="submit"><i > Guardar</i></button>
                    </form> 
                @empty
                    <form  method="POST" action="{{ route('f04Guardar1.index') }}">
                        @csrf
                        <!--titulo-->
                        <table class="table table-borderless p-0 m-1 tabla_r" >
                                <tr class="p-0 m-0">
                                    <td class="p-0">
                                        <div>
                                            <div class="titulo text-center">  DEFINICIÓN DEL PROYECTO</div>
                                            <div class="subT text-center">
                                                <small>[ {{$proceso[1]}}]</small> 
                                                <select class="form-control text-center " name="id_proceso" id="" required>
                                                    <option value="{{$proceso[0]}}">{{$proceso[1]}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <!--fecha-->
                                    <td class="p-0"><div class="subT text-right" style="height: 5px;"><small>Fecha:</small></div></div></td>
                                    <td colspan="2" class="p-0" style="height: 5px;"><div><div class="text-center fecha" style="border-bottom: 1px solid black;"><small>Cancun, Quintana Roo a <?php setlocale(LC_TIME, $fecha);echo strftime(" %d de %B del %Y");?></small> </div><div class="subT text-center"><small>LOCALIDAD, ESTADO Y FECHA (DD/MM/AA)</small></div></div></td>
                                    
                                </tr>
                            </table>
                            <!--datos alumno-->
                            <table class="table table-borderless p-0 m-1 tabla_r">
                                <tr class="p-0 m-0">
                                    <td class="p-0 px-1 datos_a" style="border: 1px solid black;"><div><div class=" text-left" ><small>Datos del Alumno </small></div></div></td>
                                    <td class="p-0 px-1 asesor" style=" border: 1px solid black;"><div><div class=" text-left"> <small>Nombre:</small></div></div></td>
                                    <td colspan="2" class="p-0" style="border: 1px solid black;">
                                        <div>
                                            <input type="text" disabled class="form-control text-center datosF04" placeholder="Llene la cédula de registro">
                                        </div>
                                    </td>
                                </tr>
                                <tr class="p-0 m-0"> 
                                    <td class="p-0 px-1" style="width: 100px; border: 1px solid black;">
                                        <div class="row">
                                            <div class=" text-left col-12 col-md-4" ><small>Grupo: </small></div>
                                            <div class="co-12 col-md-8"><input type="text" class="form-control text-center datosF04" style="width: 70px;" placeholder="Grupo" name="grupo" ></div>
                                        </div>
                                    </td>
                                    <td class="p-0 px-1 asesor" style="border: 1px solid black;"><div><div class=" text-left"> <small>Asesor UPQROO:</small></div></div></td>
                                    <td colspan="2" class="p-0" style="border: 1px solid black;">
                                        <div>
                                            <input type="text" disabled class="form-control text-center datosF04" placeholder="Llene la cédula de registro">
                                        </div>
                                    </td>
                                </tr>
                                <tr class="p-0 m-0"> 
                                    <td class="p-0 px-1 " style="width: 100px; border-left: 1px solid black;"><div><div class=" text-center" ><small>Datos </small></div></div></td>
                                    <td class="p-0 px-1 asesor" style=" border: 1px solid black;"><div><div class=" text-left"> <small>Nombre:</small></div></div></td>
                                    <td colspan="2" class="p-0" style="border: 1px solid black;">
                                        <div>
                                            <input type="text" disabled class="form-control text-center datosF04" placeholder="Llene la cédula de registro">
                                        </div>
                                    </td>
                                </tr>
                                <tr class="p-0 m-0"> 
                                    <td class="p-0 px-1 " style="width: 100px; border-left: 1px solid black;"><div><div class=" text-center" ><small>de la </small></div></div></td>
                                    <td class="p-0 px-1 asesor" style=" border: 1px solid black;"><div><div class=" text-left"> <small>Asesor:</small></div></div></td>
                                    <td colspan="2" class="p-0" style="border: 1px solid black;">
                                        <div>
                                            <input type="text" disabled class="form-control text-center datosF04" placeholder="Llene la cédula de registro">
                                        </div>
                                    </td>
                                </tr>
                                <tr class="p-0 m-0"> 
                                    <td class="p-0 px-1 " style="width: 100px; border-left: 1px solid black; border-bottom: 1px solid black;"><div><div class=" text-center" ><small>Empresa</small></div></div></td>
                                    <td class="p-0 px-1 asesor" style=" border: 1px solid black;"><div><div class=" text-left"> <small>Puesto:</small></div></div></td>
                                    <td colspan="2" class="p-0" style="border: 1px solid black;">
                                        <div>
                                            <input type="text" class="form-control text-center datosF04" name="puesto"placeholder="Puesto" >
                                        </div>
                                    </td>
                                </tr>
                            
                                <tr class="p-0 m-0">
                                    <td class="p-0 px-1" style="width: 100px; border: 1px solid black;"><div><div class=" text-left"> <small>Nombre del Proyecto:</small></div></div></td>
                                    <td colspan="3" class="p-0" style="border: 1px solid black;">
                                        <div>
                                            <input type="text" class="form-control text-center datosF04" disabled placeholder="Llene la cédula de registro">
                                        </div>
                                    </td>
                                </tr>
                                <tr class="p-0 m-0"> 
                                    <td class="p-0" style="width: 100px; border: 1px solid black;"><div><div class=" text-left"> <small>Objetivos del Proyecto:</small></div></div></td>
                                    <td colspan="3" class="p-0" style="border: 1px solid black;">
                                        <div>
                                            <input type="text" class="form-control text-center datosF04" name="objetivosP" placeholder="Objetivos del proyecto" >
                                        </div>
                                    </td>
                                </tr>
                            </table>
                                <!--Errores-->
                                @error('grupo')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('puesto')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('objetivosP')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('etapas_proyecto_1')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('fecha_inicio_1')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('fecha_final_1')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('tiempo_1')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('descripcion_competencias_1')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror

                                @error('etapas_proyecto_2')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('fecha_inicio_2')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('fecha_final_2')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('tiempo_2')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('descripcion_competencias_2')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                
                                @error('etapas_proyecto_3')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('fecha_inicio_3')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('fecha_final_3')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('tiempo_3')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('descripcion_competencias_3')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror

                                @error('descripcion_competencias_4')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('etapas_proyecto_4')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('tiempo_4')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('descripcion_competencias_5')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('etapas_proyecto_5')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('tiempo_5')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('descripcion_competencias_6')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('etapas_proyecto_6')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('tiempo_6')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('descripcion_competencias_7')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('etapas_proyecto_7')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('tiempo_7')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('descripcion_competencias_8')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('etapas_proyecto_8')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('tiempo_8')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('descripcion_competencias_9')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('etapas_proyecto_9')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('tiempo_9')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('descripcion_competencias_10')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('etapas_proyecto_10')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('tiempo_10')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('descripcion_competencias_11')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('etapas_proyecto_11')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('tiempo_11')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('descripcion_competencias_12')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('etapas_proyecto_12')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('tiempo_12')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('descripcion_competencias_13')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('etapas_proyecto_13')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('tiempo_13')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('descripcion_competencias_14')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('etapas_proyecto_14')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('tiempo_14')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('descripcion_competencias_15')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('etapas_proyecto_15')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('tiempo_15')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror

                                
                                @error('actividades')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('resultados')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('evidencia')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('instrumentos')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('asignaturas')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('topicos')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                @error('estrategias')
                                <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                                <div class="table-responsive-sm ">
                                <table class="table table-borderless p-0 m-1 tabla_r">
                                    <!--titulos-->
                                    <thead class="table-secondary">
                                        <tr class="">
                                            <td class="p-0 px-1 " style="width: 230px; border-top: 1px solid black; border-left: 1px solid black;"><div><div class=" text-center" ><small>Descripción de Etapas del Proyecto</small></div></div></td>
                                            <td class="p-0 px-1 " style="width: 80px; border-top: 1px solid black; border-left: 1px solid black;"><div><div class=" text-center"> <small>Tiempo </small></div></div></td>
                                            <td class="p-0 px-1 " style="width: 80px; border-top: 1px solid black; border-right: 1px solid black;"><div><div class=" text-center"> <small>Aproximado </small></div></div></td>
                                            <td colspan="2" class="p-0 px-1" style=" border-top: 1px solid black; border-right: 1px solid black;"><div><div class=" text-center"> <small>Descripción de Competencias</small></div></div></td>
                                        </tr>
                                        <tr class="">
                                            <td class="p-0 px-1" style="width: 230px; border-left: 1px solid black;"><div><div class=" text-center" ><small></small></div></div></td>
                                            <td class="p-0 px-1 tabla" colspan="2" style="width: 160px; border-left: 1px solid black; border-right: 1px solid black;"><div><div class=" text-center"> <small>de Duración</small></div></div></td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border-right: 1px solid black;"><div><div class=" text-center"> <small></small></div></div></td>
                                        </tr>
                                    </thead>
                                    <!--cuerpo-->
                                    <tbody>
                                        <tr class="">
                                            <td class="p-0 px-1" style="width: 230px;  border-top: 1px solid black; border-left: 1px solid black;"><div><div class=" text-center" ><small></small></div></div></td>
                                            <td class="p-0 px-1 tabla" colspan="2" style="width: 160px; border: 1px solid black;"><div><div class=" text-center"> <small>Programar</small></div></div></td>
                                            <td colspan="2" class="p-0 px-1 tabla" style=" border-top: 1px solid black; border-right: 1px solid black;"><div><div class=" text-center"> <small></small></div></div></td>
                                        </tr>
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 230px; border-left: 1px solid black;"><div><div class=" text-center" ><small></small></div></div></td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black;"><div><div class=" text-center"> <small>Semana</small></div></div></td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black;"><div><div class=" text-center"> <small>Horas</small></div></div></td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border-right: 1px solid black;"><div><div class=" text-center"> <small></small></div></div></td>
                                        </tr>
                                        <!--1-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_1" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_1" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_1" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input type="number" name="tiempo_1" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_1" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--2-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_2" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_2" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_2" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input type="number" name="tiempo_2" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_2" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!--3-->                     
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_3" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_3" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_3" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number"  name="tiempo_3" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_3" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--4-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_4" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_4" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_4" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number"  name="tiempo_4" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_4" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                        </tr>

                                        <!--5-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_5" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_5" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_5" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input type="number"  name="tiempo_5" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_5" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--6-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_6" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_6" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_6" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input type="number"  name="tiempo_6" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_6" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--7-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_7" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_7" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_7" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input type="number" name="tiempo_7" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_7" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--8-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_8" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_8" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_8" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input type="number"  name="tiempo_8" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_8" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--9-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_9" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_9" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_9" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input type="number"  name="tiempo_9" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_9" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--10-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_10" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_10" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_10" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number"  name="tiempo_10" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_10" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--11-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_11" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_11" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_11" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number"  name="tiempo_11" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_11" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--12-->
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_12" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_12" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_12" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number"  name="tiempo_12" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_12" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                            <!--13-->
                                            <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_13" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_13" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_13" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number"  name="tiempo_13" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_13" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                            <!--14-->
                                            <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_14" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_14" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_14" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number" name="tiempo_14" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_14" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                            <!--15-->
                                            <tr class=""> 
                                            <td class="p-0 px-1" style="width: 270px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1" >
                                                        <textarea name="etapas_proyecto_15" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div class="text-center p-1">
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_inicio_15" class="fecha">
                                                    </div>
                                                    <div class="p-0 semana">
                                                        ---
                                                    </div>
                                                    <div class=" text-center"> 
                                                        <input type="date" name="fecha_final_15" class="fecha">
                                                    </div>
                                                </div>
                                            </td>
                                            <div>
                                            
                                            </div>
                                            <td class="p-0 px-1 tabla" style="width: 50px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1">
                                                        <input  type="number"  name="tiempo_15" class="horas" min="0" max="120">
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="2" class="p-0 px-1 tabla" style="border: 1px solid black; height:40px;">
                                                <div>
                                                    <div class=" text-center p-1"> 
                                                        <textarea name="descripcion_competencias_15" class="form-control area" id="" cols="50" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> 
                                </div>
                                <div class="table-responsive-sm">
                                <table class="table table-borderless p-0 m-1 tabla_r">
                                    <thead class="table-secondary">
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black;"><div><div class=" text-center" ><small>Actividades de Aprendizaje</small></div></div></td>
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black;"><div><div class=" text-center"> <small>Resultados de Aprendizaje</small></div></div></td>
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black;"><div><div class=" text-center"> <small>Evidencia</small></div></div></td>
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black;"><div><div class=" text-center"> <small>Instrumentos de Evaluación</small></div></div></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div>
                                                        <textarea name="actividades" class="form-control area" id="" cols="30" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div>
                                                        <textarea name="resultados" class="form-control area" id="" cols="30" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div>
                                                        <textarea name="evidencia" class="form-control area" id="" cols="30" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1" style="width: 150px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <div>
                                                        <textarea name="instrumentos" class="form-control area" id="" cols="30" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                                <div class="table-responsive-sm">
                                <table class="table table-borderless p-0 m-1 tabla_r" >
                                    <thead class="table-secondary">
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 200px; border: 1px solid black;"><div><div class=" text-center" ><small>Asignaturas</small></div></div></td>
                                            <td class="p-0 px-1" style="width: 200px; border: 1px solid black;"><div><div class=" text-center"> <small>Tópicos Recomendados</small></div></div></td>
                                            <td class="p-0 px-1" style="width: 200px; border: 1px solid black;"><div><div class=" text-center"> <small>Estrategias Didácticas</small></div></div></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class=""> 
                                            <td class="p-0 px-1" style="width: 200px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <textarea name="asignaturas" class="form-control area" id="" cols="30" rows="5"></textarea>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1" style="width: 200px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <textarea name="topicos" class="form-control area" id="" cols="30" rows="5"></textarea>
                                                </div>
                                            </td>
                                            <td class="p-0 px-1" style="width: 200px; border: 1px solid black; height:40px;">
                                                <div>
                                                    <textarea name="estrategias" class="form-control area" id="" cols="30" rows="5"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            
                            <br>
                            <br>
                            <br>
                            <table class="table table-borderless p-0 m-1 tabla_r" >
                                <tbody>
                                    <tr class="p-0 m-0">
                                        <td colspan="2" class="p-1"><div><div style="border-bottom: 1px solid black;"></div><div class="subT text-center"><small>Llene la cédula de registro}</small></div><div class="subT text-center"><small></small></div><div class="subT text-center"><small>Llene la cédula de registro</small></div></div></td>
                                        <td colspan="1" ></td>
                                        <td colspan="2" class="p-1"><div><div style="border-bottom: 1px solid black;"></div><div class="subT text-center"><small>Llene la cédula de registro</small></div><div class="subT text-center"><small>Llene la cédula de registro</small></div></div></td>
                                    </tr>
                                    <br>
                                    <br>
                                    <tr class="p-0 m-0">
                                        <td colspan="2" class="p-1 text-center sello" style="height: 70px; border-bottom: 1px solid black;">SELLO</td>
                                        <td colspan="1" ></td>
                                        <td colspan="2" class="p-1" style="height: 70px;"><div><div style="border-bottom: 1px solid black;"></div><div class="subT text-center"><small>Llene la cédula de registro</div></div></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-dark btn-lg btn-block" type="submit"><i > Guardar</i></button>
                    </form>          
                @endforelse 
            </div>

    </body>
</html>

<style>
            /** Define the margins of your page **/
            @page {
            }
            body { 
                margin-top: 10px; 
                margin-left: 0px; 
                margin-right: 0px; 
                margin-bottom: 10px;  
            }
            header {
                position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                background-color: transparent;
                color: white;
                text-align: center;
                line-height: 35px;
            }

            footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                /** Extra personal styles **/
                background-color: transparent;
                color: white;
                text-align: center;
                line-height: 35px;
            }
            .panel{
                background-color: #16355a;
                color: white;
                padding: 3px 3px 3px 3px;
            }
            .titulo{
                font-size: 13px;
            }
            .datos{
                text-align: center;
                background-color: #E1E1E1;
                border-bottom: 1px solid black;
            }
            .datosF04{
                font-size: 13px;
                height: 24px;
                background-color: #BBBBBB;
            }
            .subT{
                font-size: 13px;
            }
            .tabla{
                border: 1px  solid black;
            }
            .tablaE{
                border-left: 1px solid black;
                
            }
            .sello{
                justify-content: center;
                align-items: center;
            }
            .area{
                background:#BBBBBB;
            }
            .btnG{

            }
            .horas{
                height: 65px;
            }
            .fecha{
                font-size: 12px;
            }
            .semana{
                font-size: 10px;
            }
            .datos_a{
                width: 150px;
                font-size:12px;
            }
            /*======= MEDIA QUERIES*/
            @media (min-width: 368px) and (max-width: 766px){
                
                .tabla_r{
                    font-size: 12px;
                }
            }
            @media (max-width: 406px){
          
                .tabla_r{
                    font-size: 10px;
                }
                .datos_a{
                    width: 100px;
                    border: 1px solid black;
                }
                .datosF04{
                    font-size: 10px;
                }
                .asesor{
                    width: 43px;
                }

                .horas{
                    width: 60px;
                    height: 30px;
                    text-align: center;
                }
                .area{
                    width: 180px;
                    font-size: 10px;
                }
            }
            @media (max-width: 767px){
             
                /*admin*/
                
               

            }
            @media (min-width: 768px) and (max-width: 991px){
            
            }
            @media (min-width: 992px) and (max-width: 1199px){
                
            }
            @media (min-width: 1200px){
            

            }
</style>