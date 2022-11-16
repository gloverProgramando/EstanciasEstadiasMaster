<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!---- css ---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <!---- script ---->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <title>Usuarios tabla prueba</title>
</head>
<body>
    <section class="full-box dashboard-contentPage">
            <!-- Content page -->
                    <div class="row align-items-center justify-content-center">
                            <h2 class="text-titles text-justify text-center"">Usuarios<small>(Registrados)</small> </h2>
                    </div>
    
        <table id="usuarios" class="table table-striped">
            <div class="col-12 col-sm-12 col-md-9 p-1" p-1>
                <div class="row">
                    <div class="col-9"></div>
                    <div class="col-sm-12 col-md-3">
                        <form action="{{ route('agregar_usuario.index') }}" method="GET">
                            @csrf
                            <button type="submit" value="Agregar usuario" class="btn btn-info" > <i class="zmdi zmdi-account-add"> Agregar usuario</i></button>
                        </form>
                        
                    </div>
                    
                </div>
                <div class="col-sm-12 col-md-3">
                    <button onclick="armarExcel();" class="btn btn btn-success btn-sm mt-2"> Generar excel</button>
                    {{-- <a href="{{ route('usuarios/table.index') }}" class="btn btn-secondary btn-sm mt-2"> Prueba DataTable</a> --}}
                </div>
            </div>
            <thead>
                <tr>
                    <th>id</th>
                    <th>matricula</th>
                    <th>rol</th>
                    <th>correo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
    
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form action="{{route('ver_datos_usuario.index',$user->id)}}">
                            @csrf
                            <button type="submit" class="btn btn-info btnCambiarC"> editar <i class="zmdi zmdi-edit"></i></button>
                        </form>
                    </td>
                    <td>
                        <form action="{{route('eliminarUsuario.index',$user->id)}}"  class="btn-eliminar-system" method="POST">
                            @csrf 
                            <button type="submit" class="btn btn-danger btnEliminarUser ">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
<script>
    $('#usuarios').DataTable({
        responsive:true
    });
</script>

<script>
    function armarExcel(){
        $('#usuarios').DataTable( {
    buttons: [
        'excel'
    ]
} );
    }
</script>
</html> 