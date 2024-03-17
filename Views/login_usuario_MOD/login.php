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
    <nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light"
        style="background: #002525; padding: 0; --bs-primary: #ffffff;">
        <div class="container">
            <a href="index.php" class="btn btn-primary bg-dark border rounded-pill" data-bss-hover-animate="tada">JBC
                MOTOR</a>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: #fff; width: 1500.969px;">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" data-bss-hover-animate="tada" type="button"
                        aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown"
                        style="background: rgb(34,34,34); margin: 20px; border-color: var(--bs-body-color); padding: 0px 60px; height: 25px; width: 170px;">CATEGORÍA&nbsp;</button>
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
                <button class="btn btn-secondary dropdown-toggle" data-bss-hover-animate="tada" type="button"
                    aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown"
                    style="background: rgb(34,34,34); margin: 20px; border-color: var(--bs-body-color); padding: 0px 60px; height: 25px; width: 170px;">ACCEDER</button>
                <div class="dropdown-menu">
                    <!-- No estaria mal implementar el nombre de usuario en el login cuando inice sesion el usuario. -->
                    <a class="dropdown-item" href="index.php?controller=userController&action=verlogin">LOGIN</a>
                    <a class="dropdown-item" href="index.php?controller=userController&action=logout">LOGOUT</a>
                </div>
            </div>
            <a href="index.php?controller=ProductController&action=getAllProductUser" class="btn btn-primary pull-right"
                data-bss-disabled-mobile="true" data-bss-hover-animate="headShake"
                style="background: var(--bs-body-color); border-color: var(--bs-secondary-color);">
                <i class="fa fa-shopping-cart" data-bss-hover-animate="headShake" style="font-size: 29px;"></i>
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
                <!-- Aqui lo que hago es mostrar un error si el usuario no existe o la contraseña es incorrecta. -->

                <?php
                /*
$Data (Viene de view.php), y $data es un array que se pasa a la vista desde el controlador, que es userController.

En el patrón de diseño MVC (Modelo-Vista-Controlador), el controlador maneja la lógica de la aplicación, interactúa con el modelo para obtener y manipular datos, y luego envía esos datos a la vista para ser presentados al usuario.
El controlador userController está pasando un array $data a la vista. 
Este array puede contener varios tipos de datos que la vista necesita para renderizar el HTML, y uno de esos datos puede ser un mensaje de error.

Si ocurre un error durante el proceso de inicio de sesión (por ejemplo, si el usuario introduce una contraseña incorrecta), el controlador puede agregar un mensaje de error al array $data bajo la clave 'error', y luego pasar $data a la vista.

La vista entonces comprueba si existe un mensaje de error en $data con isset($data['error']). Si existe, la vista genera un div con una alerta de Bootstrap que muestra el mensaje de error.

                */
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