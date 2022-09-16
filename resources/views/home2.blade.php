<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Documentación de Estancias y Estadias</title>

      <link rel="stylesheet" href="css/menu.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <style>
        .border-red-500 { border-color: #f56565; }
        .text-red-600 { color: #e53e3e; }
        .bg-red-200 { background-color: #fed7d7; }
    </style>

    <script>
   function onSubmit(token) {
     document.getElementById("form-login").submit();
   }
 </script>

    <style>
        .row-color {
            background-color: #16355a;   
        }
        h2 {
            color: #fff;
        }
        /*.margin-bottom {
            margin-bottom: 8px;
        }*/
    </style>
</head>

<body>
    <nav class="navbar navbar-dark primary-color">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://2.bp.blogspot.com/-lloP7I7aXg8/Waty2XI6eBI/AAAAAAAACPw/XnXPjhNNTM4kPA4fVhV9_U-DRtpgvCnzwCLcBGAs/s1600/upqroo2.png" height="70" alt="upqroo logo">
            </a>
            <ul class="nav navbar-nav mx-auto">
                    <h3 class="text-center">Universidad Politécnica de Quintana Roo</h3>
                    <h3 class="text-center">Dirección de Vinculación, Difusión y Extensión Universitaria</h3>
                    <h4 class="text-center">CÉDULA DE REGISTRO DE ESTANCIAS Y ESTADIAS</h4>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <div class="container">
        <!--<div class="row">
            <div class="col-12">
                <h3 class="text-center">Universidad Politécnica de Quintana Roo</h3>
                <h3 class="text-center">Dirección de Vinculación, Difusión y Extensión Universitaria</h3>
                <h4 class="text-center">CÉDULA DE REGISTRO DE ESTANCIAS Y ESTADIAS</h4>
            </div>
        </div>-->
        @if(auth()->check())
        <div class="row">
            <div class="col-2 col-sm-2 col-md-6">
                <a href="{{ route('inicio.index') }}" class="btn "  ><i class="zmdi zmdi-arrow-left"></i></a>
            </div>
            <div class="col-10 col-sm-10 col-md-4">
                <p class="text-xl">Bienvenido <b>{{ auth()->user()->name }}</b></p>
            </div>
            <div class="col-12 col-sm-12 col-md-2 text-center">
                <a href="{{ route('login.destroy') }}">Cerrar Sesion</a>
            </div>
        </div>
        <form method="POST" action="{{ route('home.store2') }}">
            @csrf
            <div class="form-row">
                <div class="col-12 row-color margin-bottom">
                    <h2>Datos del Alumno/a:</h2>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Nombre:</label>
                    <input type="text" class="form-control" name="ape_paterno" id="ape_paterno" placeholder="Apellido Paterno" required>
                </div>
                @error('ape_paterno')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-4">
                    <label for="">&nbsp;</label>
                    <input type="text" class="form-control" name="ape_materno" id="ape_materno" placeholder="Apellido Materno" required>
                </div>
                @error('ape_materno')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-4">
                    <label for="">&nbsp;</label>
                    <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombre[s]" required>
                </div>
                @error('nombres')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-6">
                    <label for="">Tel:</label>
                    <input type="text" class="form-control" name="tel" id="tel" required>
                </div>
                @error('tel')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-6">
                    <label for="">Proceso:</label>
                    <select class="form-control" name="id_procesos" id="">
                        <option value="1">Estancia 1</option>
                        <option value="2">Estancia 2</option>
                        <option value="3">Estadía</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Matrícula:</label>
                    <input type="text" class="form-control" name="matricula" id="matricula" placeholder="ejem: 2018..." required>
                </div>
                @error('matricula')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-6">
                    <label for="">Carrera:</label>
                    <select class="form-control" name="id_carrera" id="" aria-label="">
                        <option value="1">Ing. Biomédica</option>
                        <option value="2">Ing. Biotecnología</option>
                        <option value="3">Ing. Financiera</option>
                        <option value="4">Ing. Software</option>
                        <option value="5">Lic. Admon Y Gestion De PyMes</option>
                        <option value="6">Lic. Gestión Empresarial</option>
                        <option value="7">Lic. Terapia Física</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">E-mail:</label>
                    <input type="email" class="form-control" name="email_per" id="email_per" placeholder="Personal" required>
                </div>
                @error('email_per')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-6">
                    <label for="">E-mail:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="UPQROO" required>
                </div>
                @error('email')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-4">
                    <label for="">N°. Seguridad Social:</label>
                    <input type="text" class="form-control" name="no_ss" id="no_ss" placeholder="" required>
                </div>
                @error('no_ss')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-8">
                    <label for="">Dirección:</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="1234 Calle Prin." required>
                </div>
                @error('direccion')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-row">
                <div class="col-12 row-color margin-bottom">
                    <h2>Datos de la Empresa:</h2>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Nombre:</label>
                    <input type="text" class="form-control" name="nombre_emp" id="nombre_emp" placeholder="Nombre Comercial o Publico" required>
                </div>
                @error('nombre_emp')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-3">
                    <label for="">Giro:</label>
                    <input type="text" class="form-control" name="giro" id="giro" placeholder="Ejemplo: Servicios" required>
                </div>
                @error('giro')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-3">
                    <label for="">Tipo:</label>
                    <select name="id_tipo" id="id_tipo" class="form-control">
                        <option value="1">Micro</option>
                        <option value="2">Pequeña</option>
                        <option value="3">Mediana</option>
                        <option value="4">Grande</option>
                    </select>
                </div>
                <div class="form-group col-12">
                    <label for="">Dirección:</label>
                    <input type="text" class="form-control" name="direccion_emp" id="direccion_emp" placeholder="1234 Calle Prin." required>
                </div>
                @error('direccion_emp')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-4">
                    <label for="">Responsable de Recursos Humanos:</label>
                    <input type="text" class="form-control" name="ape_paterno_rh" id="ape_paterno_rh" placeholder="Apellido Paterno" required>
                </div>
                @error('ape_paterno_rh')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-4">
                    <label for="">&nbsp;</label>
                    <input type="text" class="form-control" name="ape_materno_rh" id="ape_materno_rh" placeholder="Apellido Materno" required>
                </div>
                @error('ape_materno_rh')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-4">
                    <label for="">&nbsp;</label>
                    <input type="text" class="form-control" name="nombres_rh" id="nombres_rh" placeholder="Nombre[s]" required>
                </div>
                @error('nombres_rh')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-1">
                    <label for="">Tel:</label>
                    <input type="text" class="form-control" name="tel_lada" id="tel_lada" placeholder="Lada">
                </div>
                @error('tel_lada')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-3">
                    <label for="">&nbsp;</label>
                    <input type="text" class="form-control" name="tel_num" id="tel_num" placeholder="Número" required>
                </div>
                @error('tel_num')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-1">
                    <label for="">&nbsp;</label>
                    <input type="text" class="form-control" name="tel_ext" id="tel_ext" placeholder="Ext.">
                </div>
                @error('tel_ext')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-7">
                    <label for="">E-mail:</label>
                    <input type="email" class="form-control" name="email_emp" id="email_emp" placeholder="Email empresa" required>
                </div>
                @error('email_emp')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-row">
                <div class="col-12 row-color margin-bottom">
                    <h2>Datos del Asesor Empresarial:</h2>
                </div>
                <div class="form-group col-md-3">
                    <label for="">Nombre:</label>
                    <input type="text" class="form-control" name="ape_paterno_ae" id="ape_paterno_ae" placeholder="Apellido Paterno" required>
                </div>
                @error('ape_paterno_ae')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-3">
                    <label for="">&nbsp;</label>
                    <input type="text" class="form-control" name="ape_materno_ae" id="ape_materno_ae" placeholder="Apellido Materno" required>
                </div>
                @error('ape_materno_ae')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-3">
                    <label for="">&nbsp;</label>
                    <input type="text" class="form-control" name="nombres_ae" id="nombres_ae" placeholder="Nombre[s]" required>
                </div>
                @error('nombres_ae')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-3">
                    <label for="">Cargo:</label>
                    <select class="form-control" name="id_cargo_ae" id="id_cargo">
                        <option value="1">Lic.</option>
                        <option value="2">Ing.</option>
                        <option value="3">Mtro.</option>
                        <option value="4">Arq.</option>
                        <option value="5">Dr.</option>
                        <option value="6">Dra.</option>
                        <option value="7">C.P.T</option>
                        <option value="8">Profr.</option>
                        <option value="9">Profra.</option>
                    </select>
                </div>
                <div class="form-group col-md-1">
                    <label for="">Tel:</label>
                    <input type="text" class="form-control" name="tel_lada_ae" id="tel_lada_ae" placeholder="Ej:052">
                </div>
                @error('tel_lada_ae')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-3">
                    <label for="">&nbsp;</label>
                    <input type="text" class="form-control" name="tel_num_ae" id="tel_num_ae" placeholder="Número" required>
                </div>
                @error('tel_num_ae')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-3">
                    <label for="">&nbsp;</label>
                    <input type="email" class="form-control" name="email_ae" id="email_ae" placeholder="E-mail">
                </div>
                @error('email_ae')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <!--<div class="form-group col">
                    <label for="">Firma:</label>
                    <canvas id="cnv" class="form-control col-12" name="cnv" height="20" style="background-color: #fff; border-bottom: 1px solid black;"></canvas>
                </div>-->
            </div>
            <div class="form-row">
                <div class="col-12 row-color margin-bottom">
                    <h2>Datos del Asesor Académico:</h2>
                </div>
                <div class="form-group col-md-3">
                    <label for="">Nombre:</label>
                    <input type="text" class="form-control" name="ape_paterno_aa" id="ape_paterno_aa" placeholder="Apellido Paterno" required>
                </div>
                @error('ape_paterno_aa')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-3">
                    <label for="">&nbsp;</label>
                    <input type="text" class="form-control" name="ape_materno_aa" id="ape_materno_aa" placeholder="Apellido Materno" required>
                </div>
                @error('ape_paterno_aa')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-3">
                    <label for="">&nbsp;</label>
                    <input type="text" class="form-control" name="nombres_aa" id="nombres_aa" placeholder="Nombre[s]" required>
                </div>
                @error('nombres_aa')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-3">
                    <label for="">Cargo:</label>
                    <select class="form-control" name="id_cargo_aa" id="id_cargo">
                        <option value="1">Lic.</option>
                        <option value="2">Ing.</option>
                        <option value="3">Mtro.</option>
                        <option value="4">Arq.</option>
                        <option value="5">Dr.</option>
                        <option value="6">Dra.</option>
                        <option value="7">C.P.T</option>
                        <option value="8">Profr.</option>
                        <option value="9">Profra.</option>
                    </select>
                </div>
                <div class="form-group col-md-1">
                    <label for="">Tel:</label>
                    <input type="text" class="form-control" name="tel_lada_aa" id="tel_lada_aa" placeholder="Ej:052">
                </div>
                @error('tel_lada_aa')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-3">
                    <label for="">&nbsp;</label>
                    <input type="text" class="form-control" name="tel_num_aa" id="tel_num_aa" placeholder="Número" required>
                </div>
                @error('tel_num_aa')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="form-group col-md-3">
                    <label for="">&nbsp;</label>
                    <input type="email" class="form-control" name="email_aa" id="email_aa" placeholder="E-mail">
                </div>
                @error('email_aa')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <!--<div class="form-group col">
                    <label for="">Firma:</label>
                    <canvas id="cnv" class="form-control col-12" name="cnv" height="20" style="background-color: #fff; border-bottom: 1px solid black;"></canvas>
                </div>-->
            </div>
            <div class="form-row">
                <div class="col-12 row-color margin-bottom">
                    <h2>Datos del Proyecto:</h2>
                </div>
                <div class="form-group col-12">
                    <label for="">Nombre:</label>
                    <input type="text" class="form-control" name="nombre_proyecto" id="nombre_proyecto" placeholder="Nombre Proyecto" required>
                </div>
                @error('nombre_proyecto')
                    <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <!--<div class="form-group row justify-content-md-center">
                    <div class="col-md-auto">
                        <div class="input-group">
                            <div class="col align-self-center">
                                <canvas id="cnv" class="form-control col-12" name="cnv" height="70" style="background-color: #fff; border-bottom: 1px solid black;"></canvas>
                                <small class="form-text text-muted text-center">Firma del Alumno </small>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="pt-1 mb-4">
                            <button class="btn btn-dark btn-lg btn-block" type="submit">Guardar</button>
                        </div>
            <!--<button class="g-recaptcha" 
                    data-sitekey="6LedJ78dAAAAAPmUrFR2Qkm3U63zK0Uj0LILa-h3" 
                    data-callback='onSubmit' 
                    data-action='submit'>Submit</button>-->
        </form>
        @else
            kajksjaksj
        @endif
    </div>

    @push('js')
        <script src="{{ asset('js/general_validation.js') }}"></script>
    @endpush
</body>

</html>