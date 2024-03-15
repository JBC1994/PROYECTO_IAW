<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Panel_de_control_administrador</title>
    <link rel="stylesheet" href="Views/Panel_de_control_administrador/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="Views/Panel_de_control_administrador/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="Views/Panel_de_control_administrador/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="Views/Panel_de_control_administrador/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="Views/Panel_de_control_administrador/assets/css/styles.min.css">
</head>

<body>

    <body>
        <nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light"
            style="background: rgb(34, 34, 34);border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;border-style: none;padding-top: 0;padding-bottom: 10px;--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;">
            <div class="container">
                <a href="index.php" class="btn btn-primary bg-dark border rounded-pill"
                    data-bss-hover-animate="rubberBand">
                    Brand
                </a>
                <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);width: 1500.969px;">
                    <div class="dropdown"><button class="btn btn-secondary dropdown-toggle"
                            data-bss-hover-animate="flash" type="button" aria-haspopup="true" aria-expanded="false"
                            data-bs-toggle="dropdown"
                            style="background: rgb(34,34,34);margin: 20px;border-color: var(--bs-body-color);padding: 0px 60px;height: 25px;width: 170px;">CATEGORÍA&nbsp;</button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="../Coche_Ocasion/index.html">COCHES DE
                                OCASION</a><a class="dropdown-item" href="../Coche_Kilometro_0/index.html">COCHES
                                KILOMETRO
                                0</a><a class="dropdown-item" href="../Coche_Renting/index.html">RENTING</a></div>
                    </div><input type="text" class="form-control dropdown-search-input" placeholder="Buscar producto..."
                        style="width: 340px;height: 0px;margin: 0px 0px 0px;padding: 15px;"><button
                        class="btn btn-primary border rounded-pill" data-bss-hover-animate="rubberBand" type="button"
                        style="padding: 0px 0px;width: 90px;height: 35px;margin: 10px;background: rgb(255,255,255);color: rgb(0,0,0);border-style: hidden;">Buscar</button>
                </div>
                <div class="dropdown"><button class="btn btn-secondary dropdown-toggle" data-bss-hover-animate="flash"
                        type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown"
                        style="background: rgb(34,34,34);margin: 20px;border-color: var(--bs-body-color);padding: 0px 60px;height: 25px;width: 170px;">ACCEDER</button>
                    <div class="dropdown-menu"><a class="dropdown-item"
                            href="../login_usuario_MOD/index.php">LOGIN</a><a class="dropdown-item"
                            href="../registro_MOD/index.html">LOGOUT</a></div>
                </div>
                <a href="../carrito_MOD/index.html" class="btn btn-primary pull-right" data-bss-disabled-mobile="true"
                    data-bss-hover-animate="swing"
                    style="background: var(--bs-body-color); border-color: var(--bs-secondary-color);">
                    <i class="fa fa-shopping-cart" data-bss-hover-animate="swing" style="font-size: 29px;"></i>
                </a>
            </div>
        </nav>
        <div style="margin: 40px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 style="width: 343px;">Listado de Pedidos</h2>
                    </div>
                    <div class="col-md-4 d-flex justify-content-end align-self-start"><i
                            class="fas fa-search d-xl-flex justify-content-xl-center align-items-xl-center"></i><input
                            class="border rounded d-xl-flex justify-content-xl-center align-items-xl-center search-field"
                            type="search" id="search-field"
                            style="background-color: #eaeaea;width: 80%;height: 38px;padding: 0px;margin-left: 17px;"
                            name="search"></div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Precio</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                // Aqui lo que hago es sacar el array de productos y recorrerlo para mostrarlo en la tabla.
                                // Despues creo un boton de "linkBorrado" que me lleva a la funcion de borrar producto.
                                // La funcion de borrar producto esta en el controlador de producto.
                                foreach ($data as $producto) {
                                    echo '<tr>'; 
                                    echo '<td>' . $producto['id_producto'] . '</td>';
                                    echo '<td>' . $producto['nombre'] . '</td>';
                                    echo '<td>' . $producto['categoria'] . '</td>';
                                    echo '<td>' . $producto['precio'] . '</td>';
                                    $linkBorrado = '<a href="index.php?controller=productController&action=deleteproduct&idproducto=' . $producto['id_producto'] . '">Borrar producto</a>';
                                    echo "<td><button type='button' class='btn btn-danger'><i class='far fa-trash-alt d-xl-flex justify-content-xl-center align-items-xl-center'>{$linkBorrado}</i></button></td>";                                    echo '</tr>'; // Cierro la fila
                                }
                                ?>
                                </tr>
                            </tbody>
                        </table>

                        <form id="myForm" action="index.php?controller=productController&action=insertarProducto"
                            method="post">
                            <label for="nombre">Nombre del producto:</label><br>
                            <input type="text" id="nombre" name="nombre"><br>
                            <label for="Descripcion">Descripcion:</label><br>
                            <input type="text" id="Descripcion" name="descripcion"><br>
                            <label for="Precio">Precio:</label><br>
                            <input type="text" id="Precio" name="precio"><br>
                            <label for="Stock">Stock:</label><br>
                            <input type="text" id="Stock" name="stock"><br>
                            <label for="Categoria">Categoria:</label><br>
                            <input type="text" id="Categoria" name="categoria"><br>
                            <label for="Descripcion2">Descripcion detallada:</label><br>
                            <input type="text" id="Descripcion2" name="descripcion2"><br><br>
                            <input type="submit" value="Añadir producto">
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <script src="Views/Panel_de_control_administrador/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="Views/Panel_de_control_administrador/assets/js/script.min.js"></script>
    </body>

</html>