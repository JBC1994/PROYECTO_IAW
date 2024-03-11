<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>seccion usuarioMOD (copy)</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<?php 

if(isset($_POST["registrar"])){

    // validamos los datos del formularios "enviar" echo "Se ha pulsado el boton";

if (empty($_POST['txt-usuario'])){

    echo "El nombre no puede estar vacio <br>";

}

if (empty($_POST['txt-password']) || strlen($_POST['txt-password']) < 8){

    echo "Debe escribir al menos 8 caracteres <br>";
    
    }
}


?>

<body>
    <nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light"
        style="background: rgb(34, 34, 34);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;border-style: none;padding-top: 0;padding-bottom: 10px;--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;">
        <div class="container"><button class="btn btn-primary bg-dark border rounded-pill"
                data-bss-hover-animate="rubberBand" type="button">Brand</button>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);width: 1500.969px;">
                <div class="dropdown"><button class="btn btn-secondary dropdown-toggle" data-bss-hover-animate="flash"
                        type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown"
                        style="background: rgb(34,34,34);margin: 20px;border-color: var(--bs-body-color);padding: 0px 60px;height: 25px;width: 170px;">CATEGORÍA&nbsp;</button>
                    <div class="dropdown-menu"><a class="dropdown-item" href="../Coche_Ocasion/index.html">COCHES DE
                            OCASION</a><a class="dropdown-item" href="../Coche_Kilometro_0/index.html">COCHES KILOMETRO
                            0</a><a class="dropdown-item" href="../Coche_Renting/index.html">RENTING</a></div>
                </div><input type="text" class="form-control dropdown-search-input" placeholder="Buscar producto..."
                    style="width: 340px;height: 0px;margin: 0px 0px 0px;padding: 15px;"><button
                    class="btn btn-primary border rounded-pill" data-bss-hover-animate="rubberBand" type="button"
                    style="padding: 0px 0px;width: 90px;height: 35px;margin: 10px;background: rgb(255,255,255);color: rgb(0,0,0);border-style: hidden;">Buscar</button>
            </div>
            <div class="dropdown"><button class="btn btn-secondary dropdown-toggle" data-bss-hover-animate="flash"
                    type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown"
                    style="background: rgb(34,34,34);margin: 20px;border-color: var(--bs-body-color);padding: 0px 60px;height: 25px;width: 170px;">ACCEDER</button>
                <div class="dropdown-menu"><a class="dropdown-item" href="../login_usuario_MOD/index.php">LOGIN</a><a
                        class="dropdown-item" href="../registro_MOD/index.html">REGISTRAR</a></div>
            </div>
            <a href="../carrito_MOD/index.html" class="btn btn-primary pull-right" data-bss-disabled-mobile="true"
                data-bss-hover-animate="swing"
                style="background: var(--bs-body-color); border-color: var(--bs-secondary-color);">
                <i class="fa fa-shopping-cart" data-bss-hover-animate="swing" style="font-size: 29px;"></i>
            </a>
        </div>
    </nav>
    <div id="main">
    <div class="text-center" id="info">
      <h3 class="text-center">Bienvenido</h3>
      <p class="text-center">Ingrese usuario y contraseña</p>

      <form class="text-start" id="form-login" method="POST" action="">
        <div class="mb-3">
          <label class="form-label" id="lbl-usuario" for="txt-usuario">Usuario</label>
          <input class="form-control" type="text" id="txt-usuario" name="txt-usuario"> 
        </div>
        <div class="mb-3">
          <label class="form-label" id="lbl-password" for="txt-password">Password</label>
          <input class="form-control" type="password" id="txt-password" name="txt-password">
        </div>
        <button class="btn btn-primary" data-bss-hover-animate="pulse" id="btn-sesion" type="submit" name="registrar" style="--bs-primary: #256db4;--bs-primary-rgb: 37,109,180;background: #256db4;">Iniciar Sesión</button>
        <button class="btn btn-primary" data-bss-hover-animate="pulse" id="btn-sesion-1" type="submit" style="--bs-primary: #256db4;--bs-primary-rgb: 37,109,180;background: #256db4;margin: 10px;">¿Olvidaste contraseña?</button>
      </form>
    </div>
  </div>

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/script.min.js"></script>
</body>
</html>