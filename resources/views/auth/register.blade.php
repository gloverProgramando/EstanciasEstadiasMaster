<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="/dist/output.css" rel="stylesheet">

    <style>
        .border-red-500 { border-color: #f56565; }
        .text-red-600 { color: #e53e3e; }
        .bg-red-200 { background-color: #fed7d7; }
        .colorPrin{
            background-color: #9A616D;
        }
    </style>
</head>
<body class="colorPrin">
    <section class="vh-100" >
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                    <!--<div class="col-md-6 col-lg-5 d-none d-md-block">-->
                    <!--<img
                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                        alt="login form"
                        class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                    />-->
                    </div>
                    <div class="col-md-12 col-lg-12 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">

                            <form method="POST" action="{{route('register.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        </div>
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registrate</h5>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-outline mb-4">
                                            <input type="text" id="name" class="form-control form-control-lg"
                                            name="name" />
                                            <label class="form-label" for="name">Nombre Usuario(Matricula)</label>
                                        </div>
                                        @error('name')
                                            <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-outline mb-4">
                                            <select class="form-control" name="role" id="role">
                                                <option value="alumno">Alumno</option>
                                            </select>
                                            <label class="form-label" for="role">Rol de Usuario</label>
                                        </div>
                                        @error('role')
                                            <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" class="form-control form-control-lg"
                                            name="email" />
                                            <label class="form-label" for="email">Email(UPQROO)</label>
                                        </div>
                                        @error('email')
                                            <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                        @enderror
                                    </div> 
                                     <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" class="form-control form-control-lg" name="password"/>
                                            <label class="form-label" for="password">Contraseña</label>
                                        </div>
                                        @error('password')
                                            <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                        @enderror
                                    </div> 
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="form-outline mb-4">
                                            <input type="password" id="password_confirmation" class="form-control form-control-lg" name="password_confirmation"/>
                                            <label class="form-label" for="password_confirmation">Confirmar Contraseña</label>
                                        </div>

                                        @error('message')
                                            <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">* Error</p>
                                        @enderror
                                    </div>    
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Registrarse</button>
                                        </div>
                                    </div>                                  
                                </div>
                                
                                
                            </form>

                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</body>
</html>