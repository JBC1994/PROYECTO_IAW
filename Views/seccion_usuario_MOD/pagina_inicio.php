<!DOCTYPE html>

<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>seccion usuarioMOD</title>
    <link rel="stylesheet" href="Views/seccion_usuario_MOD/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Views/seccion_usuario_MOD/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="Views/seccion_usuario_MOD/assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light"
        style="background: rgb(34, 34, 34);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;border-style: none;padding-top: 0;padding-bottom: 10px;--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;">
        <div class="container">
            -- Tengo que ver como hacer que el boton de brand me lleve a la pagina de inicio
            <a href="index.php?controller=ProductController&action=getAllProductUser"
                class="btn btn-primary bg-dark border rounded-pill" data-bss-hover-animate="rubberBand"> Brand
            </a>

            <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);width: 1500.969px;">
                <div class="dropdown"><button class="btn btn-secondary dropdown-toggle" data-bss-hover-animate="flash"
                        type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown"
                        style="background: rgb(34,34,34);margin: 20px;border-color: var(--bs-body-color);padding: 0px 60px;height: 25px;width: 170px;">CATEGORÍA&nbsp;</button>
                    <div class="dropdown-menu"><a class="dropdown-item" href="../Coche_Ocasion/index.html">COCHES DE
                            OCASION</a>
                        <a class="dropdown-item" href="../Coche_Kilometro_0/index.html">COCHES KILOMETRO 0</a>
                        <a class="dropdown-item" href="../Coche_Renting/index.html">RENTING</a>
                    </div>
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
            <a href="index.php?controller=ProductController&action=getAllProductUser" class="btn btn-primary pull-right"
                data-bss-disabled-mobile="true" data-bss-hover-animate="swing"
                style="background: var(--bs-body-color); border-color: var(--bs-secondary-color);">
                <i class="fa fa-shopping-cart" data-bss-hover-animate="swing" style="font-size: 29px;"></i>
            </a>
        </div>
    </nav>
    <section style="margin: 40px;">
        <div class="container">
            <?php
        $i = 0;
        foreach ($data as $producto) {
            if ($i % 3 == 0) {
                echo '<div class="row">';
            }
            $linkCarrito = '<a href="index.php?controller=productController&action=addCarrito&idproducto=' . $producto['id_producto'] . '">Añadir al carrito</a>';
            $linkVerProducto = '<a href="index.php?controller=productController&action=getProductById&idproducto=' . $producto['id_producto'] . '">Ver producto</a>';
            echo '<div class="col-auto col-sm-12 col-md-12 col-lg-4 col-xl-4"
            style="padding-top: 15px;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;">';
            echo '<div class="bg-light border rounded shadow card" data-bss-hover-animate="pulse"><img class="card-img-top" src="images/' . $producto['nombre'] . '.jpg">';
            echo '<div class="card-body">
                <h3 class="card-title" style="font-family: Antic, sans-serif;color: rgb(81,87,94);">' . $producto['nombre'] . '</h3>';
            echo '<h5 class="card-sub-title" style="font-family: Antic, sans-serif;color: #38ae53;">' . $producto['precio'] . '€</h5>';
            echo '<p class="card-text" style="font-family: Antic, sans-serif;color: rgb(81,87,94);"></p>
                <p id="lorem">' . $producto['descripcion'] . '</p>';
            echo '<button class="btn btn-outline-success"  type="button"
                    style="font-weight: normal;font-family: Antic, sans-serif; background-color: #add8e6; color: white;">
                    ' . $linkCarrito . ' 
            </button>';
            
            echo '<button class="btn btn-outline-primary" type="button" 
                    style="font-weight: normal;font-family: Antic, sans-serif;">
                    ' . $linkVerProducto . '
            </button>';

            


            echo '</div>
            </div>
        </div>';
            $i++;
            if ($i % 3 == 0 || $i == count($data)) {
                echo '</div>';
            }
        }
        ?>
        </div>
    </section>

    <script src="Views/seccion_usuario_MOD/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="Views/seccion_usuario_MOD/assets/js/script.min.js"></script>
</body>

</html>