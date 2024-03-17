<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>seccion usuario_MOD</title>
    <link rel="stylesheet" href="Views/login_usuario_MOD/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Views/login_usuario_MOD/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="Views/login_usuario_MOD/assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: #002525; padding: 0; --bs-primary: #ffffff;">
    <div class="container">
        <a href="index.php" class="btn btn-primary bg-dark border rounded-pill" data-bss-hover-animate="rubberBand">JBC MOTOR</a>
        <div class="collapse navbar-collapse" id="navcol-1" style="color: #fff; width: 1500.969px;">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" data-bss-hover-animate="flash" type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown" style="background: rgb(34,34,34); margin: 20px; border-color: var(--bs-body-color); padding: 0px 60px; height: 25px; width: 170px;">CATEGORÍA&nbsp;</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../Coche_Ocasion/index.html">COCHES DE OCASION</a>
                    <a class="dropdown-item" href="../Coche_Kilometro_0/index.html">COCHES KILOMETRO 0</a>
                    <a class="dropdown-item" href="../Coche_Renting/index.html">RENTING</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" data-bss-hover-animate="flash" type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown" style="background: rgb(34,34,34); margin: 20px; border-color: var(--bs-body-color); padding: 0px 60px; height: 25px; width: 170px;">ACCEDER</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="index.php?controller=userController&action=verlogin">LOGIN</a>
                <a class="dropdown-item" href="index.php?controller=userController&action=verlogin">LOGOUT</a>
            </div>
        </div>
        <a href="index.php?controller=ProductController&action=getAllProductUser" class="btn btn-primary pull-right" data-bss-disabled-mobile="true" data-bss-hover-animate="swing" style="background: var(--bs-body-color); border-color: var(--bs-secondary-color);">
            <i class="fa fa-shopping-cart" data-bss-hover-animate="swing" style="font-size: 29px;"></i>
        </a>
    </div>
</nav>
    <div id="main">
        <div class="text-center" id="info">
            <h3 class="text-center">Bienvenido</h3>
            <p class="text-center">Ingrese usuario y contraseña</p>

            <form class="text-start" id="form-login" method="POST"
                action="index.php?controller=userController&action=login">
                <div class="mb-3">
                    <label class="form-label" id="lbl-usuario" for="txt-usuario">Usuario</label>
                    <input class="form-control" type="text" id="txt-usuario" name="usuario">
                </div>
                <div class="mb-3">
                    <label class="form-label" id="lbl-password" for="txt-password">Password</label>
                    <input class="form-control" type="password" id="txt-password" name="contrasena">
                </div>
                
                <?php
                if (isset($data['error'])) {
                    echo "<div class='alert alert-danger' role='alert'>".$data['error']."</div>";
                }

    ?>
                <button class="btn btn-primary" data-bss-hover-animate="pulse" id="btn-sesion" type="submit"
                    name="registrar"
                    style="--bs-primary: #256db4;--bs-primary-rgb: 37,109,180;background: #256db4;">Iniciar
                    Sesión</button>
                <button class="btn btn-primary" data-bss-hover-animate="pulse" id="btn-sesion-1" type="submit"
                    style="--bs-primary: #256db4;--bs-primary-rgb: 37,109,180;background: #256db4;margin: 10px;">¿Olvidaste
                    contraseña?</button>
            </form>

        </div>
    </div>

    <script src="Views/login_usuario_MOD/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="Views/login_usuario_MOD/assets/js/script.min.js"></script>
</body>

</html>