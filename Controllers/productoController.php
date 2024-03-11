<?php
include_once 'Models/productosDAO.php';
include_once 'views/view.php';
include_once 'utils/utils.php';
class ProductController {

    function getAllProductAdmin(){

        $productDAO=new ProductoDAO();
        $arrayProductos=$productDAO->getAllProductos();
        view::show('Views/administrador/almacen_administrador', $arrayProductos);
    }

    function getAllProductUser(){
        session_start();
        view::show('Views/carrito_MOD/carrito', $_SESSION['carrito']);
    }

    //Añadir producto es solo para el administrador
    function addProduct(){ 
        $erroresForm = [];
        if ( isset ($_POST['insertar']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){

            if (empty($_POST['nombre'])==0)
                $erroresForm['nombre']="El nombre no puede estar vacío.";

            if (empty($_POST['descripcion'])==0)
                $erroresForm['descripcion']="La descripción no puede estar vacía.";

            if (empty($_POST['precio'])==0)
                $erroresForm['precio']="El precio no puede estar vacío.";

            if (empty($_POST['stock'])==0)
                $erroresForm['stock']="El stock no puede estar vacío.";

            if (empty($_POST['categoria'])==0)
                $erroresForm['categoria']="La categoría no puede estar vacía.";

            # Comprobamos si hemos detectado errores en el form
            if (count($erroresForm)==0){ //Si el array no esta vacio
                $id=filtrado($_POST['id']);
                $nombre=filtrado($_POST['nombre']);
                $descripcion=filtrado($_POST['descripcion']);
                $precio=filtrado($_POST['precio']);
                $stock=filtrado($_POST['stock']);
                $categoria=filtrado($_POST['categoria']);
                
                $productDao=new ProductoDAO();
                $productDao->insertarProducto($nombre,$descripcion,$precio,$stock,$categoria);
                $arrayProductos=$productDao->getAllProductos();

                view::show('almacen_administrador',$arrayProductos);
            }
        }
        else { // Si el array esta vacío, hay errores en los campos

            view::show('insertar_producto',$erroresForm);

        }
    }

    function addCarrito() {
        session_start();
        if (!isset($_SESSION['carrito'])){
            $_SESSION['carrito'] = array();
        }
    
        // Comprueba que 'idproducto' se ha enviado y es un número
        if (isset($_REQUEST['idproducto']) && is_numeric($_REQUEST['idproducto'])) {
            $idproducto = $_REQUEST['idproducto'];
    
            // Si el producto ya está en el carrito, incrementa la cantidad
            if (isset($_SESSION['carrito'][$idproducto])) {
                $_SESSION['carrito'][$idproducto]++;
            } else {
                // Si no, añade el producto al carrito con una cantidad de 1
                $_SESSION['carrito'][$idproducto] = 1;
            }
        } else {
            // Manejar el error...
        }
    
        // Mostramos de nuevo la lista de productos
        $productDAO = new ProductoDAO();
        $arrayProductos = $productDAO->getAllProductos();
        view::show('views/seccion_usuario_MOD/pagina_inicio', $arrayProductos);
    }


    function getProductById(){
        $productDAO = new ProductoDAO();
        $idProducto = $_REQUEST['idproducto'];
        $producto = $productDAO->getProductoById($idProducto);
        view::show('Views/producto1/producto', $producto);

    }



}