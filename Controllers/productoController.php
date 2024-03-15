<?php
include_once 'Models/productosDAO.php';
include_once 'views/view.php';
include_once 'utils/utils.php';
class ProductController {

    function getAllProductAdmin(){

        $productDAO=new ProductoDAO();
        $arrayProductos=$productDAO->getAllProductos();
        view::show('views/Panel_de_control_administrador/admin', $arrayProductos);
    }

    function getAllProductUser(){
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

            if (empty($_POST['descripcion2'])==0)
                $erroresForm['descripcion2']="La categoría no puede estar vacía.";
            

            # Comprobamos si hemos detectado errores en el form
            if (count($erroresForm)==0){ //Si el array no esta vacio
                $id=filtrado($_POST['id']);
                $nombre=filtrado($_POST['nombre']);
                $descripcion=filtrado($_POST['descripcion']);
                $precio=filtrado($_POST['precio']);
                $stock=filtrado($_POST['stock']);
                $categoria=filtrado($_POST['categoria']);
                $descripcion2=filtrado($_POST['descripcion2']);
                
                $productDao=new ProductoDAO();
                $productDao->insertarProducto($nombre,$descripcion,$precio,$stock,$categoria,$descripcion2);
                $arrayProductos=$productDao->getAllProductos();

                view::show('views/Panel_de_control_administrador/admin',$arrayProductos);
            }
        }
        else { // Si el array esta vacío, hay errores en los campos

            view::show('insertar_producto',$erroresForm);

        }
    }

    function addCarrito() {
        
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
                $_SESSION['carrito'][$idproducto];
            }
        } else {
            // Si no se ha enviado 'idproducto' o no es un número, muestra un mensaje de error
            echo 'Error: Producto no válido.';
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

    function verPaginaInicial(){
        $productDAO = new ProductoDAO();
        $arrayProductos = $productDAO->getAllProductos();
        view::show('Views/seccion_usuario_MOD/pagina_inicio', $arrayProductos); 
    }

    function deleteproduct(){
        $productDAO = new ProductoDAO();
        $idProducto = $_REQUEST['idproducto'];
        $productDAO->eliminarProductoPorId($idProducto); // Tendremos que implementar lo que tenemos en nuestra clase DAO de borrado de producto.
        $arrayProductos = $productDAO->getAllProductos();
        view::show('views/Panel_de_control_administrador/admin', $arrayProductos);
    }

    function insertarProducto(){
        $productDAO = new ProductoDAO();
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $descripcion2 = $_POST['descripcion2'];
        $productDAO->insertarProducto($nombre, $descripcion, $precio, $stock, $categoria, $descripcion2);
        $arrayProductos = $productDAO->getAllProductos();
        view::show('views/Panel_de_control_administrador/admin', $arrayProductos);
    }

}