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

    //Aqui saco un producto por id, para verlo en detalle.
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

    //Aqui lo que hago es que directamente manejo la vista de insertar producto, y si se ha enviado el formulario, llamo a la funcion de insertar producto.

    
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
        //El array de productos es $data solo que esta implementado como $arrayProductos, recogerá toda la información de la BBDD. 
    }

    //Este fragmento de código va dirigido a la vista carrito, que es la que muestra el carrito de compras.
    //Declaramos la sesion si existe, si no, creamos una nueva, y si ya existe, la cargamos.
    //Despues $carrito almacena el carrito de compras y sino almacena un array vacio.
    function getAllProductUser(){
        if (isset($_SESSION['carrito'])){
            $carrito = $_SESSION['carrito'];
            view::show('Views/carrito_MOD/carrito', $carrito);
        } else {
                view::show('Views/carrito_MOD/carrito');
    }
}

}