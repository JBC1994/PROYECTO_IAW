<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>carritoMOD</title>
    <link rel="stylesheet" href="Views/carrito_MOD/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Views/carrito_MOD/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="Views/carrito_MOD/assets/css/styles.min.css">
</head>

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

    <div class="shopping-cart">
        <div class="px-4 px-lg-0">

            <div class="pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                            <!-- Shopping cart table -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="p-2 px-3 text-uppercase">Producto</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Descripcion</div>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Precio</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Cantidad</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="py-2 text-uppercase">Borrar</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                    if (isset($data)) {
                      $costeTotal = 0;
                      foreach ($_SESSION['carrito'] as $idProducto) {
                        $productDAO = new ProductoDAO();
                        $producto = $productDAO->getProductoById($idProducto);
                        echo '<tr> <th scope="row" class="border-0"> <div class="p-2"> <img src="images/' . $producto['nombre'] . '.jpg" alt="" width="70" class="img-fluid rounded shadow-sm"><div class="ml-3 d-inline-block align-middle">';
                        echo '<h5 class="mb-0"> <a href="" class="text-dark d-inline-block align-middle">' . $producto['nombre'] . '</a>';
                        echo ' </h5><span class="text-muted font-weight-normal font-italic d-block">Categoria:' . $producto['categoria'] . '</span>
                            </div>
                            </div>
                            </th>
                          <td align=left class="border-0 align-middle"><p class="mb-0"><strong>' . $producto['descripcion'] . '</strong></p></td>
                          <td class="border-0 align-middle"><strong>$' . $producto['precio'] . '</strong></td> <td class="border-0 align-middle">' . $producto['stock'] . '</td>
                          <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td></tr>';
                        $costeTotal = $costeTotal + ($producto['stock'] * $producto['precio']);
                      }
                      print_r($costeTotal);

                    }

                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- End -->
                        </div>
                    </div>

                    <div class="row py-5 p-4 bg-white rounded shadow-sm">
                        <div class="col-lg-6">
                            <!-- <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
              <div class="p-4">
                <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                <div class="input-group mb-4 border rounded-pill p-2">
                  <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                  <div class="input-group-append border-0">
                    <button id="button-addon3" type="sumit" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                  </div>
                </div>
              </div>
              <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
              <div class="p-4">
                <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
                <textarea name="" cols="30" rows="2" class="form-control"></textarea>
              </div>
            </div>
                  -->
                            <div class="col-lg-6">
                                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">SUMA TOTAL
                                </div>
                                <div class="p-4">
                                    <p class="font-italic mb-4">Shipping and additional costs are calculated based on
                                        values you have entered.</p>
                                    <ul class="list-unstyled mb-4">
                                        <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                                class="text-muted">Order Subtotal </strong><strong>$390.00</strong></li>
                                        <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                                class="text-muted">Shipping and handling</strong><strong>$10.00</strong>
                                        </li>
                                        <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                                class="text-muted">Tax</strong><strong>$0.00</strong></li>
                                        <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                                class="text-muted">Total</strong>
                                            <?php 
                    echo '<h5 class="font-weight-bold">'.$costeTotal.'€</h5>'
                  ?>
                                        </li>
                                    </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Precio total</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <script src="Views/carrito_MOD/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="Views/carrito_MOD/assets/js/script.min.js"></script>
</body>

</html>



foreach ($data as $usuario) {
$link = '<a href="index.php?controller=useController&action=addcarrito&idproducto='.$usuario ['id_pructo'] . '">' .
    $usuario['nombre'] . '</a>';
echo $link;

}