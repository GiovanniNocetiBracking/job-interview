<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand" href="<?php echo URLROOT; ?>/index"><img
            src="https://www.campos-chile.cl/wp-content/uploads/2021/04/logo.png" alt="Campos Chile"
            style="height: 100px;" class="p-3"></a>

    <?php if (isset($_SESSION['user_id'])) : ?>

    <div class="collapse navbar-collapse d-flex justify-content-end">
        <ul class="navbar-nav p-2 mt-2 mt-lg-0 ">
            <li class="nav-item  text-white m-3 ">
                <br class="">Bienvenido <?= $_SESSION['email'] ?>
                <a href="<?php echo URLROOT; ?>/users/logout">
                    <button class="btn btn-outline-primary mx-3">Salir</button>
                </a>
            </li>

        </ul>
    </div>
    <?php else : ?>
    <div class="collapse navbar-collapse d-flex justify-content-end">
        <ul class="navbar-nav p-2 mt-2 mt-lg-0 ">
            <li class="nav-item mx-3">
                <a class="" href="<?php echo URLROOT; ?>/users/login">
                    <button class="btn btn-outline-primary">Iniciar
                        Sesion</button>
                </a>
            </li>
            <li class="nav-item ">
                <a href="<?php echo URLROOT; ?>/users/register">
                    <button class="btn btn-outline-primary">Registrarse</button>
                </a>
            </li>
        </ul>
    </div>
    <?php endif; ?>
</nav>