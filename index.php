<?php
session_start();

include_once('Controllers/userController.php');
include_once('Controllers/productoController.php');

if (isset($_REQUEST['action']) && isset($_REQUEST['controller'])) {
    $act = $_REQUEST['action'];
    $cont = $_REQUEST['controller'];

    // Instanciación del controlador e invocación del método
    $controller = new $cont();
    $controller->$act();
} else {
    $productDAO = new ProductoDAO();
    $arrayProductos = $productDAO->getAllProductos();
    view::show('Views/seccion_usuario_MOD/pagina_inicio', $arrayProductos);
}

?>