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
                    <a class="dropdown-item" href="index.php?controller=userController&action=logout">LOGOUT</a>
                </div>
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
            if (is_array($data)) {
            $i = 0;
        foreach ($data as $producto) {
            if ($i % 3 == 0) {
                if ($i > 0) {
                    echo '</div>'; // Cerrar la fila anterior antes de comenzar una nueva
                }
                echo '<div class="row">';
            }
            $linkVerProducto = '<a href="index.php?controller=productController&action=getProductById&idproducto=' . $producto['id_producto'] . '">Ver producto</a>';
            echo '<div class="col-auto col-sm-12 col-md-12 col-lg-4 col-xl-4" style="padding-top: 15px;padding-bottom: 15px;padding-right: 15px;padding-left: 15px;">';
            echo '<div class="bg-light border rounded shadow card" data-bss-hover-animate="pulse"><img class="card-img-top" src="images/' . $producto['nombre'] . '.jpg">';
            echo '<div class="card-body">
                <h3 class="card-title" style="font-family: Antic, sans-serif;color: rgb(81,87,94);">' . $producto['nombre'] . '</h3>';
            echo '<h5 class="card-sub-title" style="font-family: Antic, sans-serif;color: #38ae53;">' . $producto['precio'] . '€</h5>';
            echo '<p class="card-text" style="font-family: Antic, sans-serif;color: rgb(81,87,94);"></p>
                <p id="lorem">' . $producto['descripcion'] . '</p>';

            // Formulario para seleccionar la cantidad y añadir al carrito
            echo '<form action="index.php?controller=productController&action=addCarrito&idproducto=' . $producto['id_producto'] . '" method="post">';
            echo '<div class="form-group">';
            echo '<label for="cantidad">Cantidad:</label>';
            echo '<input type="number" id="cantidad" name="cantidad" min="1" max="' . $producto['stock'] . '" value="1">';
            echo '</div>';
            echo '<button type="submit" class="btn btn-outline-success" style="font-weight: normal;font-family: Antic, sans-serif; background-color: #add8e6; color: white;">Añadir al carrito</button>';
            echo '</form>';

            echo '<button class="btn btn-outline-primary" type="button" style="font-weight: normal;font-family: Antic, sans-serif;">' . $linkVerProducto . '</button>';

            echo '</div>
            </div>
        </div>';
        $i++;
    }
    echo '</div>'; // Aqui cierro la última fila después del bucle
} else {
    echo 'No hay productos para mostrar';
}
?>
        </div>
    </section>

    <script src="Views/seccion_usuario_MOD/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="Views/seccion_usuario_MOD/assets/js/script.min.js"></script>
</body>

</html>