<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: /entrevista-tecnica/Views');
}

require '../Models/connection.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = 'INSERT INTO users (email, password) VALUES (:email, :password)';
    $stmt = $connectionTry->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        $message = 'Usuario registrado con exito';
    } else {
        $message = 'Algo salio mal';
    }
}
?>

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

        <a class="navbar-brand" href="index.php"><img
                src="https://www.campos-chile.cl/wp-content/uploads/2021/04/logo.png" alt="Campos Chile"
                style="height: 100px;" class="p-3"></a>

        <div class="collapse navbar-collapse d-flex justify-content-end">
            <ul class="navbar-nav p-2 mt-2 mt-lg-0 ">
                <li class="nav-item mx-3">
                    <a class="" href="login.php">
                        <button class="btn btn-outline-primary">Iniciar
                            Sesion</button>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="register.php">
                        <button class="btn btn-outline-primary">Registrarse</button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container d-flex justify-content-center my-5">
        <div class="card text-center w-75" style="background-color: rgba(245, 245, 245, 0.4);">
            <?php if (!empty($message)) : ?>
            <div class="alert alert-primary" role="alert">
                <p><?= $message ?></p>
            </div>

            <?php endif; ?>
            <div class="card-body">
                <h1 class="card-title"><b>Registro de usuarios</b></h1>
                <p class="card-text"><b>Registrate en nuestro sistema para poder ingresar en cualquier momento</b></p>
                <div class="my-5  ">
                    <form action="register.php" method="post">
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
                        <span><b>si ya tienes una cuenta <a href="login.php">Ingresa</a></b></span>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>