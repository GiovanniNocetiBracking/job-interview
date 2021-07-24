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

    <?php
    require APPROOT . '/views/includes/navigation.php';
    ?>

    <div class="container d-flex justify-content-center my-5">
        <div class="card text-center w-75" style="background-color: rgba(245, 245, 245, 0.4);">

            <div class="card-body">
                <h1 class="card-title"><b>Registro de usuarios</b></h1>
                <p class="card-text"><b>Registrate en nuestro sistema para poder ingresar en cualquier momento</b></p>
                <div class="my-5  ">
                    <form action="<?php echo URLROOT; ?>/users/register" method="post">
                        <div class="form-group row ">
                            <label for="staticEmail" class="col-sm-2 col-form-label"><b>Nombre de usuario</b></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="nombre de usuario">
                            </div>
                        </div>
                        <div class="form-group row py-3">
                            <label for="staticEmail" class="col-sm-2 col-form-label"><b>Email</b></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="email@example.com">
                            </div>
                        </div>
                        <div class="form-group py-3 row">
                            <label for="inputPassword " class="col-sm-2 col-form-label"><b>Contraseña</b></label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="contraseña">
                            </div>
                        </div>
                        <div class="form-group py-3 row d-flex justify-content-center">
                            <div class="col-sm-4">
                                <button type="submit" class="form-control btn btn-primary">Registrarse</button>
                            </div>
                        </div>
                        <span><b>si ya tienes una cuenta <a
                                    href="<?php echo URLROOT; ?>/users/login">Ingresa</a></b></span>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>