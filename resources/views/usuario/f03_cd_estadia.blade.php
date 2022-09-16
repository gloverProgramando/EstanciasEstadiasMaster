<!doctype html>
<html lang="es">
    <head>
    <title>Carta Presentacion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
        <img style="padding:16px;" src="{{ public_path("firma/registrocedula.png" )}}" alt="Arriba" width='100%' />
        </header>

        <footer>
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
            <p class="text-center"><b>Universidad Politécnica de Quintana Roo</b><br>Dirección de Vinculación, Difusión y Extensión Universitaria</p>
            <div>
                @forelse ($usuario as $dato)
                    <div class="text-center" style="display: inline-block; width:550px;"><b></b></div>
                    <div class="text-right" style="display: inline-block; width:140px;">
                        <div class="datos" style="width: 90px; display: inline-block;">{{$dato->nombre_proceso}} </div>
                    </div>
                @empty
                @endforelse 
                
            </div>  
            <div class="panel">
                Datos del Alumno/a:
            </div>
                @forelse ($usuario as $dato)
                        <table class="table table-borderless p-0 m-0">
                            <tr class="p-0 m-0">
                                <td colspan="1" class="p-1"><div><div class="datos "><small>{{$dato->ape_paterno}}</small></div><div class="subT text-center"><small>Apellido Paterno</small></div></div></th>
                                <td colspan="1" class="p-1"><div><div class="datos "><small>{{$dato->ape_materno}}</small></div><div class="subT text-center"><small>Apellido Materno</small></div></div></th>
                                <td colspan="2" class="p-1"><div><div class="datos "><small>{{$dato->nombres}}</small></div><div class="subT text-center"><small>Nombre(s)</small></div></div></th>
                                <td colspan="2" class="p-1"><div><div class="datos "><small>{{$dato->tel}}</small></div><div class="subT text-center"><small>Teléfono</small></div></div></th>
                            </tr>
                            <tr class="p-0 m-0">
                                <th colspan="1" class="p-1"><div><div class="datos "><small>{{$dato->matricula}}</small></div><div class="subT text-center"><small>Matricula</small></div></div></th>
                                <th colspan="1" class="p-1"><div><div class="datos "><small>{{$dato->nombre_carrera}}</small></div><div class="subT text-center"><small>Carrera</small></div></div></th>
                                <th colspan="2" class="p-1"><div><div class="datos "><small>{{$dato->email_per}}</small></div><div class="subT text-center"><small>E-mail(PERSONAL)</small></div></div></th>
                                <th colspan="2" class="p-1"><div><div class="datos "><small>{{$dato->email}}</small></div><div class="subT text-center"><small>E-mail(UPQROO)</small></div></div></th>
                            </tr>
                            <tr class="p-0 m-0">
                                <td colspan="2" class="p-1"><div><div class="datos "><small>{{$dato->no_ss}}</small></div><div class="subT text-center"><small>No.SS</small></div></div></th>
                                <td colspan="4" class="p-1" ><div><div class="datos"><small>{{$dato->direccion}}</small></div><div class="subT text-center"><small>Dirección</small></div></div></td>
                            </tr>
                        </table>
                        <div class="panel">
                            Datos de la Empresa:
                        </div>
                        <table class="table table-borderless p-0 m-0">
                            <tr class="p-0 m-0">
                                <th class="p-0"><div class="subT text-center"><small>Nombre:</small></div></div></th>
                                <td colspan="3" class="p-1"><div><div class="datos "><small>{{$dato->nombre_emp}}</small></div><div class="subT text-center"><small>Nombre Comercial o Público</small></div></div></td>
                                <th class="p-1"><div><div class="datos "><small>{{$dato->giro}}</small></div><div class="subT text-center"><small>Giro</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small>{{$dato->nombre_tipo}}</small></div><div class="subT text-center"><small>Tipo</small></div></div></th>
                            </tr>
                            <tr class="p-0 m-0">
                                <th class="p-0"><div><div class="subT text-center"><small>Dirección:</small></div></div></th>
                                <td colspan="5" class="p-1" ><div><div class="datos"><small>{{$dato->direccion_emp}}</small></div><div class="subT text-center"><small>Dirección</small></div></div></td>
                            </tr>
                            <tr class="p-0 m-0"> 
                                <th class="p-0"><div><div class="subT text-center"><small>Responsable de RH:</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small>{{$dato->ape_paterno_rh}}</small></div><div class="subT text-center"><small>Apellido Paterno</small></div></div></th>
                                <td colspan="2" class="p-1"><div><div class="datos "><small>{{$dato->ape_materno_rh}}</small></div><div class="subT text-center"><small>Apellido Materno</small></div></div></td>
                                <td colspan="2" class="p-1"><div><div class="datos "><small>{{$dato->nombres_rh}}</small></div><div class="subT text-center"><small>Nombre(s)</small></div></div></td>
                            </tr>
                            <tr class="p-0 m-0">
                                <th class="p-0"><div><div class="subT text-center"><small>Telefono:</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small>{{$dato->tel_lada}}</small></div><div class="subT text-center"><small>Lada</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small>{{$dato->tel_num}}</small></div><div class="subT text-center"><small>Número</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small>{{$dato->tel_ext}}</small></div><div class="subT text-center"><small>Ext</small></div></div></th>
                                <td colspan="2" class="p-1" ><div><div class="datos"><small>{{$dato->email_emp}}</small></div><div class="subT text-center"><small>E-mail</small></div></div></td>
                            </tr>
                        </table>
                        <div class="panel">
                            Datos del Asesor Empresarial:
                        </div>
                        <table class="table table-borderless p-0 m-0">
                            <tr class="p-0 m-0">
                                <td class="p-1"><div><div class="datos "><small>{{$dato->ape_paterno_ae}}</small></div><div class="subT text-center"><small>Apellido Paterno</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small>{{$dato->ape_materno_ae}}</small></div><div class="subT text-center"><small>Apellido Materno</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small>{{$dato->nombres_ae}}</small></div><div class="subT text-center"><small>Nombre(s)</small></div></div></td>
                                @switch($dato->id_cargo_ae)
                                    @case(1)
                                        <td class="p-1"><div><div class="datos "><small>Lic.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break
                                
                                    @case(2)
                                        <td class="p-1"><div><div class="datos "><small>Ing.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break

                                    @case(3)
                                        <td class="p-1"><div><div class="datos "><small>Mtro.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break

                                    @case(4)
                                        <td class="p-1"><div><div class="datos "><small>Arq.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break

                                    @case(5)
                                        <td class="p-1"><div><div class="datos "><small>Dr.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break

                                    @case(6)
                                        <td class="p-1"><div><div class="datos "><small>Dra.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break

                                    @case(7)
                                        <td class="p-1"><div><div class="datos "><small>C.P.T.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break

                                    @case(8)
                                        <td class="p-1"><div><div class="datos "><small>Profr.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break

                                    @case(9)
                                        <td class="p-1"><div><div class="datos "><small>Profa.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break
                                    @default
                                        Hay un fallo 
                                        <a href="{{ ('inicio.index') }}">
                                            <button type="button" class="btn btn-outline-info btnDes"><i class="zmdi zmdi-download"> Regrasar</i></button>
                                        </a>
                                @endswitch    

                            </tr>
                            <tr class="p-0 m-0">
                                <td class="p-1"><div><div class="datos "><small>{{$dato->tel_lada_ae}}</small></div><div class="subT text-center"><small>Lada</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small>{{$dato->tel_num_ae}}</small></div><div class="subT text-center"><small>Número</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small>{{$dato->email_ae}}</small></div><div class="subT text-center"><small>E-mail</small></div></div></td>
                                <td class="p-1" style="width:150px;"><div><div class="datos" style="height: 50px;"></div><div class="subT text-center"><small>Firma</small></div></div></td>

                            </tr>
                        </table> 
                        <div class="panel">
                            Datos del Asesor Académico:
                        </div>
                        <table class="table table-borderless p-0 m-0">
                            <tr class="p-0 m-0">
                                <td class="p-1"><div><div class="datos "><small>{{$dato->ape_paterno_aa}}</small></div><div class="subT text-center"><small>Apellido Paterno</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small>{{$dato->ape_materno_aa}}</small></div><div class="subT text-center"><small>Apellido Materno</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small>{{$dato->nombres_aa}}</small></div><div class="subT text-center"><small>Nombre(s)</small></div></div></td>
                                @switch($dato->id_cargo_aa)
                                    @case(1)
                                        <td class="p-1"><div><div class="datos "><small>Lic.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break
                                
                                    @case(2)
                                        <td class="p-1"><div><div class="datos "><small>Ing.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break

                                    @case(3)
                                        <td class="p-1"><div><div class="datos "><small>Mtro.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break

                                    @case(4)
                                        <td class="p-1"><div><div class="datos "><small>Arq.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break

                                    @case(5)
                                        <td class="p-1"><div><div class="datos "><small>Dr.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break

                                    @case(6)
                                        <td class="p-1"><div><div class="datos "><small>Dra.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break

                                    @case(7)
                                        <td class="p-1"><div><div class="datos "><small>C.P.T.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break

                                    @case(8)
                                        <td class="p-1"><div><div class="datos "><small>Profr.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break

                                    @case(9)
                                        <td class="p-1"><div><div class="datos "><small>Profa.</small></div><div class="subT text-center"><small>Cargo</small></div></div></td>
                                    @break
                                    @default
                                        Hay un fallo 
                                        <a href="{{ ('inicio.index') }}">
                                            <button type="button" class="btn btn-outline-info btnDes"><i class="zmdi zmdi-download"> Regrasar</i></button>
                                        </a>
                                @endswitch    

                            </tr>
                            <tr class="p-0 m-0">
                                <td class="p-1"><div><div class="datos "><small>{{$dato->tel_lada_aa}}</small></div><div class="subT text-center"><small>Lada</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small>{{$dato->tel_num_aa}}</small></div><div class="subT text-center"><small>Número</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small>{{$dato->email_aa}}</small></div><div class="subT text-center"><small>E-mail</small></div></div></td>
                                <td class="p-1" style="width:150px;"><div><div class="datos" style="height: 50px;"></div><div class="subT text-center"><small>Firma</small></div></div></td>

                            </tr>
                        </table>
                        <div class="panel">
                            Datos del Proyecto:
                        </div>
                        <table class="table table-borderless p-0 m-0">
                            <tr class="p-0 m-0">
                                <td colspan="1" class="p-0"><div class="subT text-center"><small>Nombre:</small></div></div></td>
                                <td colspan="4" class="p-1"><div><div class="datos "><small>{{$dato->nombre_proyecto}}</small></div><div class="subT text-center"><small>Nombre Proyecto</small></div></div></td>
                            </tr>
                            <br>
                            <br>
                            <tr class="p-0 m-0">
                                <td colspan="1" ></td>
                                <td colspan="2" class="p-1"><div><div style="border-bottom: 1px solid black;"></div><div class="subT text-center"><small>Firma</small></div></div></td>

                            </tr>
                        </table>      
                @empty
                @endforelse 
        </main>
    </body>
</html>

<style>
            /** Define the margins of your page **/
            @page {
            }
            body { 
                margin-top: 1cm; 
                margin-left: 0px; 
                margin-right: 0px; 
                margin-bottom: .5cm;  
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
            .datos{
                text-align: center;
                background-color: #E1E1E1;
                border-bottom: 1px solid black;
                height: 20px;
            }
            .subT{
                font-size: 13px;
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
            .table{
                width: 100%;
                max-width: 100%;
                margin-bottom: 1rem;
                background-color: transparent;
                
            }
            
</style>