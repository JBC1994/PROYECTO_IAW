<?php

    session_start();

   /* //A partir de aqui, se inicia la sesion.

    $_SESSION["nombre"] = "joaquin";
    $_SESSION["rol"] = "administrador";

    $rol='administrador';
    echo "Sesión inciada";
*/

    //Gestionamos sesion con carro de la compra y usuario registrado.

    //El usuario ha iniciado sesión.
    $_SESSION["nombre"] = "joaquin";
    //Por que consideramos que el usuario es cliente o usuario.
    $_SESSION["rol"] = 2;

    
?>

<a href="pagina2.php">Ir a pagina 2 </a>
