<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructora campos de chile</title>

</head>

<body
    style="background-image: url('https://www.esan.edu.pe/apuntes-empresariales/2018/08/08/1500x844_sgsi.jpg'); background-repeat: no-repeat; background-size: cover;background-color: rgb(0, 0, 0) ;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="home.php"><img
                src="https://www.campos-chile.cl/wp-content/uploads/2021/04/logo.png" alt="Campos Chile"
                style="height: 100px;" class="p-3"></a>

        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarTogglerDemo03">
            <ul class="navbar-nav p-2 mt-2 mt-lg-0 ">
                <li class="nav-item mx-3">
                    <a class="" href="login.php">
                        <button class="btn btn-outline-secondary">Iniciar
                            Sesion</button>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="register.php">
                        <button class="btn btn-outline-secondary">Registrarse</button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container d-flex justify-content-center my-5">
        <div class="card text-center w-75" style="background-color: rgba(245, 245, 245, 0.4);">
            <div class="card-body">
                <h1 class="card-title"><b>Registro de usuarios</b></h1>
                <p class="card-text"><b>Registrate en nuestro sistema para poder ingresar en cualquier momento</b></p>
                <div class="my-5  ">
                    <form>
                        <div class="form-group row py-3">
                            <label for="staticEmail" class="col-sm-2 col-form-label"><b>Email</b></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail"
                                    placeholder="email@example.com">
                            </div>
                        </div>
                        <div class="form-group py-3 row">
                            <label for="inputPassword " class="col-sm-2 col-form-label"><b>Contraseña</b></label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group py-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"><b>Repetir contraseña</b></label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword"
                                    placeholder="Repetir contraseña (este campo no interfiere)">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>