<!doctype html>
<html lang="es">
    <head>
    <title>Carta Presentacion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
         <img style="padding:16px;" src="{{ public_path("firma/registrocedula.png" )}}" alt="Arriba" width='100%' />
        </header>

        <footer>
            Copyright &copy; <?php echo date("d/m/y");?> 
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
            <p class="text-center"><b>Universidad Politécnica de Quintana Roo</b><br>Dirección de Vinculación, Difusión y Extensión Universitaria</p>
            <div>
                <div class="text-center" style="display: inline-block; width:550px;"><b></b></div>
                <div class="text-right" style="display: inline-block; width:140px;">
                    <div style="display: inline-block;">Estancia:</div>
                    <div class="datos" style="width: 60px; display: inline-block;"> </div>
                </div>
            </div>  
            <div class="panel">
                Datos del Alumno/a:
            </div>
                        <table class="table table-borderless p-0 m-0">
                            <tr class="p-0 m-0">
                                <th class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Apellido Paterno</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Apellido Materno</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Nombre(s)</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Teléfono</small></div></div></th>
                            </tr>
                            <tr class="p-0 m-0">
                                <th class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Matricula</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Carrera</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>E-mail(PERSONAL)</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>E-mail(UPQROO)</small></div></div></th>
                            </tr>
                            <tr class="p-0 m-0">
                                <th class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>No.SS</small></div></div></th>
                                <td colspan="3" class="p-1" ><div><div class="datos"><small></small></div><div class="subT text-center"><small>Dirección</small></div></div></td>
                            </tr>
                        </table>
                        <div class="panel">
                            Datos de la Empresa:
                        </div>
                        <table class="table table-borderless p-0 m-0">
                            <tr class="p-0 m-0">
                                <th class="p-0"><div class="subT text-center"><small>Nombre:</small></div></div></th>
                                <td colspan="3" class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Nombre Comercial o Público</small></div></div></td>
                                <th class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Giro</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Tipo</small></div></div></th>
                            </tr>
                            <tr class="p-0 m-0">
                                <th class="p-0"><div><div class="subT text-center"><small>Dirección:</small></div></div></th>
                                <td colspan="5" class="p-1" ><div><div class="datos"><small></small></div><div class="subT text-center"><small>Dirección</small></div></div></td>
                            </tr>
                            <tr class="p-0 m-0"> 
                                <th class="p-0"><div><div class="subT text-center"><small>Responsable de RH:</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Apellido Paterno</small></div></div></th>
                                <td colspan="2" class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Apellido Materno</small></div></div></td>
                                <td colspan="2" class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Nombre(s)</small></div></div></td>
                            </tr>
                            <tr class="p-0 m-0">
                                <th class="p-0"><div><div class="subT text-center"><small>Telefono:</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Lada</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Número</small></div></div></th>
                                <th class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Ext</small></div></div></th>
                                <td colspan="2" class="p-1" ><div><div class="datos"><small></small></div><div class="subT text-center"><small>E-mail</small></div></div></td>
                            </tr>
                        </table>
                        <div class="panel">
                            Datos del Asesor Empresarial:
                        </div>
                        <table class="table table-borderless p-0 m-0">
                            <tr class="p-0 m-0">
                                <td class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Apellido Paterno</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Apellido Materno</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Nombre(s)</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Cargo</small></div></div></td>

                            </tr>
                            <tr class="p-0 m-0">
                                <td class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Lada</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Número</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>E-mail</small></div></div></td>
                                <td class="p-1" style="width:150px;"><div><div class="datos" style="height: 50px;"></div><div class="subT text-center"><small>Firma</small></div></div></td>

                            </tr>
                        </table> 
                        <div class="panel">
                            Datos del Asesor Académico:
                        </div>
                        <table class="table table-borderless p-0 m-0">
                            <tr class="p-0 m-0">
                                <td class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Apellido Paterno</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Apellido Materno</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Nombre(s)</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Cargo</small></div></div></td>

                            </tr>
                            <tr class="p-0 m-0">
                                <td class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Lada</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Número</small></div></div></td>
                                <td class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>E-mail</small></div></div></td>
                                <td class="p-1" style="width:150px;"><div><div class="datos" style="height: 50px;"></div><div class="subT text-center"><small>Firma</small></div></div></td>

                            </tr>
                        </table>
                        <div class="panel">
                            Datos del Proyecto:
                        </div>
                        <table class="table table-borderless p-0 m-0">
                            <tr class="p-0 m-0">
                                <td colspan="1" class="p-0"><div class="subT text-center"><small>Nombre:</small></div></div></td>
                                <td colspan="4" class="p-1"><div><div class="datos "><small></small></div><div class="subT text-center"><small>Nombre Proyecto</small></div></div></td>
                            </tr>
                            <br>
                            <br>
                            <tr class="p-0 m-0">
                                <td colspan="1" ></td>
                                <td colspan="2" class="p-1"><div><div style="border-bottom: 1px solid black;"></div><div class="subT text-center"><small>Firma</small></div></div></td>

                            </tr>
                        </table>      
           
        </main>
    </body>
</html>

<style>
            /** Define the margins of your page **/
            @page {
            }
            body { 
                margin-top: .5cm; 
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
                background-color: #4F2117;
                color: white;
                padding: 3px 3px 3px 3px;
            }
            .datos{
                text-align: center;
                background-color: #E1E1E1;
                border-bottom: 1px solid black;
                height: 16px;
            }
            .subT{
                font-size: 13px;
            }
            
</style>