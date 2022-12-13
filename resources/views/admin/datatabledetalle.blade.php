<!DOCTYPE html5>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!---- css ---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    @include('plantilla/admin/head')


    <!--  css botones datatable  -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.3.3/css/buttons.dataTables.min.css" />

    <!---- script ---->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <!-- script buttons datatable-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.print.min.js"></script>

    <title>Usuarios tabla empresas</title>
</head>

<body>
    <!-- NavBar -->
    @include('plantilla/admin/navBar')
    <section class="full-box dashboard-contentPage" style="margin: 2%">
        <!-- Content page -->
        <div class="row align-items-center justify-content-center">
            <h2 class="text-titles text-justify text-center">Usuarios<small>(empresas)</small> </h2>
        </div>

        <table id="usuarios" class="table table-striped">
            <thead>
                <tr style="background: rgb(217, 214, 214)">
                    <th>Matricula</th>
                    <th>proceso</th>
                    <th>fecha</th>
                    <th>periodo</th>
                    <th>empresa</th>
                    <th>giro</th>
                    <th>direccion empresa</th>
                    <th>telefono empresa RH</th>
                    <th>asesor empresarial</th>
                    <th>asesor academico</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>@switch($user->id_proceso)
                            @case(1)
                                estancia 1
                                @break
                            @case(2)
                                estancia 2
                                @break
                            @case(3)
                                estadia
                                @break
                            @case(4)
                                estadia nacional
                                @break
                            @case(5)
                                servicio social
                                @break
                            @default
                                
                        @endswitch</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>{{ $user->estatus }}</td>
                        <td>{{ $user->nombre_emp }}</td>
                        <td>{{ $user->giro }}</td>
                        <td>{{ $user->direccion_emp }}</td>
                        <td>{{ $user->tel_num }}</td>
                        <td>{{ $user->ape_paterno_ae }} {{ $user->ape_materno_ae }}</td>
                        <td>{{ $user->ape_paterno_aa }} {{ $user->ape_materno_aa }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>


{{-- <script>
    $('#usuarios').DataTable({
        responsive:true
    });
</script> --}}

<script>
    // $(document).ready(function() {
    //     var buttonCommon = {
    //         exportOptions: {
    //     columns: function(column, data, node) {
    //         if (column > 3) {
    //             return false;
    //         }
    //         return true;
    //     }
    // }
    //     };

    //     $('#usuarios').DataTable( {
    //         columns: [
    //             { data: 'id' },
    //             { data: 'matricula' },
    //             { data: 'rol' },
    //             { data: 'correo' },
    //             { data: 'Editar' },
    //             { data: 'Eliminar' }
    //         ],
    //         dom: 'Bfrtip',

    //         buttons: [
    //             $.extend( true, {}, buttonCommon, {
    //                 extend: 'excel',
    //                 text:'Exportar a Excel',
    //                 className:'btn btn-outline-success',
    //                 excelStyles:{
    //                 template:'header-blue'
    //                }
    //             } ),
    //             $.extend( true, {}, buttonCommon, {
    //                 extend: 'pdfHtml5'
    //             } )
    //         ]
    //     } );
    // } );

    $(document).ready(function() {
        $('#usuarios').DataTable({
            columns: [{
                    data: 'name'
                },
                {
                    data: 'position'
                },
                {
                    data: 'office'
                },
                {
                    data: 'extn'
                },
                {
                    data: 'start_date'
                },
                {
                    data: 'salary'
                },
                {
                    data: 'g'
                },
                {
                    dara: 'l'
                },
                {
                    data: 'o'
                },
                {
                    data: 'm'
                }
            ],
            dom: 'Bfrtip',
            buttons: {
                dom: {
                    button: {
                        className: 'btn'
                    }
                },
                buttons: [{
                        extend: 'excel',
                        text: 'Exportar a Excel',
                        className: 'btn btn-outline-success',
                        exportOptions: {
                            orthogonal: 'export'
                        }
                    },
                    {
                        extend: 'pdf',
                        text: 'Exportar a PDF',
                        orientation: 'landscape',
                        className: 'btn btn-outline-danger',
                        exportOptions: {
                            orthogonal: 'export'
                        }
                    }
                ]
            }
        });
    });
</script>

</html>
