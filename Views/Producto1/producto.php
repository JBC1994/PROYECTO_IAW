    <!DOCTYPE html>
    <html data-bs-theme="light" lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Producto1</title>
        <link rel="stylesheet" href="Views/Producto1/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="Views/Producto1/assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="Views/Producto1/assets/css/styles.min.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light"
            style="background: #002525; padding: 0; --bs-primary: #ffffff;">
            <div class="container">
                <a href="index.php" class="btn btn-primary bg-dark border rounded-pill"
                    data-bss-hover-animate="rubberBand">JBC MOTOR</a>
                <div class="collapse navbar-collapse" id="navcol-1" style="color: #fff; width: 1500.969px;">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" data-bss-hover-animate="flash" type="button"
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
                    <button class="btn btn-secondary dropdown-toggle" data-bss-hover-animate="flash" type="button"
                        aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown"
                        style="background: rgb(34,34,34); margin: 20px; border-color: var(--bs-body-color); padding: 0px 60px; height: 25px; width: 170px;">ACCEDER</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.php?controller=userController&action=verlogin">LOGIN</a>
                        <a class="dropdown-item" href="../registro_MOD/index.html">LOGOUT</a>
                    </div>
                </div>
                <a href="index.php?controller=ProductController&action=getAllProductUser"
                    class="btn btn-primary pull-right" data-bss-disabled-mobile="true" data-bss-hover-animate="swing"
                    style="background: var(--bs-body-color); border-color: var(--bs-secondary-color);">
                    <i class="fa fa-shopping-cart" data-bss-hover-animate="swing" style="font-size: 29px;"></i>
                </a>
            </div>
        </nav>
        <?php
        if (isset($data)) {
            // Display Product Details
            if (isset($data['nombre'], $data['descripcion2'], $data['precio'], $data['id_producto'], $data['stock'])) {
                echo '<div class="gift__img col-sm-3 col-12"><img class="card-img-top" src="images/' . $data['nombre'] . '.jpg">';
                echo '<h4 class="gift__name">' . $data['nombre'] . '</h4>';
                echo '<div class="gift__details">';
                echo '<p>' . $data['descripcion2'] . '</p>';
                echo '</div>';
                echo '<div class="gift__price-wrap col-12 col-sm-6"><br>';
                echo '<div class="gift__normal-price"><span>Precio normal:&nbsp;</span><span>' . $data['precio'] . '</span></div><br>';
                //Añado el boton de añadir al carrito.
                echo '<form action="index.php?controller=productController&action=addCarrito&idproducto=' . $data['id_producto'] . '" method="post">';
                echo '<div class="form-group">';
                echo '<label for="cantidad">Cantidad:</label>';
                echo '<input type="number" id="cantidad" name="cantidad" min="1" max="' . $data['stock'] . '" value="1">';
                echo '</div>';
                echo '<button type="submit" class="btn btn-outline-success" style="font-weight: normal;font-family: Antic, sans-serif; background-color: #add8e6; color: white;">Añadir al carrito</button>';
                echo '</form>';
                echo '</div>';
            } else {
                echo 'Algunos datos del producto no están disponibles';
            }
        } else {
            echo 'No hay productos para mostrar';
        }
    ?>

        <!--
        <div class="gift row">
            <div class="gift__img col-sm-3 col-12"><img class="card-img-top"
                    src="images/' . $producto['nombre'] . '.jpg">';
                <div class="gift__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                        class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star fa-star-half-o"></i><span
                        class="gift__rating-number">921</span></div>
            </div>
            <div class="gift__info col-sm-9 col-12">
                <h4 class="gift__name">Alfa Romeo Giulietta 1.6 JTDM2 Quadrifoglio </h4>
                <div class="gift__details">
                    <p><span style="text-decoration: underline;">COCHE DE OCASIÓN&nbsp;</span><br>Magnifico Alfa Romeo
                        Giulietta, 1.6 JTDM2 105cv, acabado "Quadrifoglio".<br>Euro5.<br>Coche Diesel.<br>Kilómetros
                        certificados, 130.000Km.<br>Correa de distribución recién cambiada.<br>Transferencia incluida en
                        el
                        precio.<br>Asientos de cuero(calefactables, eléctricos), Control de crucero, Techo solar,
                        Suspensiones bilstein adaptativas, ordenador de a bordo, manos libres, etc.</p>
                </div>
                <div class="gift__bottom row">
                    <div class="gift__price-wrap col-12 col-sm-6">
                        <div class="gift__normal-price"><span>Precio normal:&nbsp;</span><span
                                class="gift__data">15.000€</span></div>
                        <div class="gift__today-price"><span>Precio total:&nbsp;</span><span
                                class="gift__data">13.900€</span></div>
                        <div class="gift__quantity-left"><span>Cantidad: </span><span class="gift__data">9</span></div>
                    </div>
                    <div class="gift__cta-wrap col-12 col-sm-6"><a class="flux_cta gift__cta" target="_blank"
                            href="#">Añade
                            carrito</a><span class="gift__cta-note">34 Usuarios están viendo ahora</span></div>
                </div>
            </div>
        </div>
        -->
        <script src="Views/Producto1/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="Views/Producto1/assets/js/script.min.js"></script>
    </body>

    </html>