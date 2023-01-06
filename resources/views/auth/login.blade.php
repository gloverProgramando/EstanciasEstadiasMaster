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
    <link href="../../../css/stylesloggin.css" rel="stylesheet">


</head>

<body class="">

    <div class="cont container">
        <div class="row align-items-stretch">
            <div class="col setimagen d-none d-lg-block ">

            </div>

            <div class="login col">
                <h2>Bienvenido</h2>
                <form method="POST" action="" class="form">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="form2Example17"> Matrícula</label>
                        <input type="text" id="form2Example17" class="form-control form-control-lg" name="name" />
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="form2Example27"> Contraseña</label>
                        <input type="password" id="form2Example27" class="form-control form-control-lg"
                            name="password" />
                    </div>
                    @error('message')
                        <p class="border border-red-500 rounded-md bg-red-200 w-full text-red-600 p-2 my-2">
                            {{ $message }}</p>
                    @enderror
                    <div class="pt-1 mb-4">
                        <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                    </div>
                </form>
            </div>

        </div>




    </div>

</body>

</html>
