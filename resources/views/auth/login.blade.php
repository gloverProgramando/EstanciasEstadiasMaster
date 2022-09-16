<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="/dist/output.css" rel="stylesheet">

    <style>
        .border-red-500 { border-color: #f56565; }
        .text-red-600 { color: #e53e3e; }
        .bg-red-200 { background-color: #fed7d7; }
        .logoLogin{
		    width: 100%;
	    }
        .formPrincipal{
            height: 100%;
        }
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
                    <div class="col-sm-12 col-md-6 col-lg-5 d-none d-md-block">
                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                        alt="login form"
                        class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                    />
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-7  align-items-center">
                        <div class="card-body px-4 py-2 px-lg-5 py-lg-2 text-black">
                          
                                <div class="row">
                                    <div class="col-12 col-sm-12">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiAVn-JSIbQItXc0Ku3AlAFH9sNO8J-2_TWgpKQrbTTKeiqF5NhOl8OAmkgywBjtMQVczY7n8OhGzbev_FAeE66sgU61m3H_QM4vnlDixMXbw9GaYi1u7fuRNJzaE8C-JXR8q3fdDCSIJhEk_Pnr0hKac7TA0tLGON2W1sbLycknioUIqhzonAbKceC=s356" 
                                            alt="" class="logoLogin">
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 col-sm-12">
                                        <form method="POST" action="" class="formPrincipal">
                                        @csrf
                                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingrese a su cuenta</h5>
                                            
                                            <div class="form-outline mb-0">
                                                <input type="text" id="form2Example17" class="form-control form-control-lg"
                                                name="name" />
                                                <label class="form-label" for="form2Example17">Matricula</label>
                                                
                                            </div>
                                            <div class="form-outline mb-0">
                                                <input type="password" id="form2Example27" class="form-control form-control-lg" name="password"/>
                                                <label class="form-label" for="form2Example27">Contraseña</label>
                                            </div>

                                            @error('message')
                                                <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                                            @enderror

                                            <div class="pt-1 mb-4">
                                                <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                


                                

                                
                           
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
