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
    style="background-image: url('https://s03.s3c.es/imag/_v0/770x420/9/1/9/construccion-planos-casco-obra-770.jpg'); background-repeat: no-repeat; background-size: cover; background-color: rgb(0, 0, 0) ;">
    <?php
    require APPROOT . '/views/includes/navigation.php';
    ?>
    <div class="container">

        <div class="row row-cols-1">
            <div class="col d-flex justify-content-center text-center mt-5">
                <div class="card w-75" style="background-color: rgba(245, 245, 245, 0.4);">
                    <div class="card-body">
                        <h1 class="card-title">Bienvenido al sistema de control de usuarios de constructora campos
                            de
                            chile</h1>
                        <p class="card-text"><b>En esta pagina tendra acceso a suscribirse como usuario y posteriormente
                                iniciar sesion en nuestro sistema</b></p>
                        <?php if (isset($_SESSION['user_id'])) : ?>
                        <div class="my-5  ">
                            <table class="table table-dark ">
                                <h3 class="text-center"><b>Lista de usuarios registrados</b></h3>
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>