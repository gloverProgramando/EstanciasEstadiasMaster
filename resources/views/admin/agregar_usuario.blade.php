<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

   
    <link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/formato.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>

    <link rel="stylesheet" href='{{ asset("/css/main.css") }}'>

</head>
<body>
    <!-- SideBar -->
	@include('plantilla/admin/sideBar')

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		@include('plantilla/admin/navBar')

		<!-- Content page -->
		<div class="container p-3">
			<div class="page-header">
			  <h2 class="text-titles">Agregar Usuario <small>(Nuevo)</small></h2>
			</div>
		</div>
		<div class="row">
            <div class="col-md-12 col-lg-12 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                    <form method="POST" action="{{route('registrar_usuario.index')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-outline mb-4">
                                    <input type="text" id="name" class="form-control form-control-lg"
                                    name="name" />
                                    <label class="form-label" for="name">Alumno (Matrícula) / Admin (Nombre)</label>
                                </div>
                                @error('name')
                                    <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="form-outline mb-4">
                                    <select class="form-control" name="role" id="role">
                                        <option value="alumno">Alumno</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                    <label class="form-label" for="role">Rol de Usuario</label>
                                </div>
                                @error('role')
                                    <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" class="form-control form-control-lg"
                                    name="email" />
                                    <label class="form-label" for="email">Email(UPQROO)</label>
                                </div>
                                @error('email')
                                    <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                            </div> 
                             <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control form-control-lg" name="password"/>
                                    <label class="form-label" for="password">Contraseña</label>
                                </div>
                                @error('password')
                                    <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                @enderror
                            </div> 
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-outline mb-4">
                                            <input type="password" id="password_confirmation" class="form-control form-control-lg" name="password_confirmation"/>
                                            <label class="form-label" for="password_confirmation">Confirmar Contraseña</label>
                                        </div>

                                        @error('message')
                                            <p class="border border-danger rounded-md bg-red-200 w-full text-red-600 p-2 my-2">* Error</p>
                                        @enderror
                            </div>   
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="pt-1 mb-4">
                                    <button class="btn btn-dark btn-lg btn-block" type="submit">Registrar</button>
                                </div>
                            </div>                                  
                        </div>
                        
                        
                    </form>

                </div>
            </div>
		</div>
			
			
	</section>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>