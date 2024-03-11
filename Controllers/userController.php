<?php

include_once('Models/users.php');
include_once('views/view.php');
class UserController {

    function getAllUser(){

        $userDAO = new UserDAO();

        //Recupero todos los usuarios de la base de datos.
        //Creamos un array para almacenar los usuarios.
        $arrayUsuarios=$userDAO->getAllUsers();

        Views::show('views/usersviews', $arrayUsuarios);
    }

    function addUser(){
        $erroresForm = [];
        if ( isset ($_POST['insertar']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){

            if (empty($_POST['nombre'])==0)
                $erroresForm['nombre']="El nombre no puede estar vacío.";

            if (empty($_POST['contrasena']) || strlen($_POST['contrasena']) < 8)
                $erroresForm['password']="La contraseña no puede estar vacía y debe de contener más de 8 caracteres.";

            if (empty($_POST['email']) || !filter_var ($_POST['email'], FILTER_VALIDATE_EMAIL))
                $erroresForm['email']="El formato es incorrecto o está vacío.";

            # Comprobamos si hemos detectado errores en el form
            if (count($erroresForm)==0){ //Si el array no esta vacio
                $nombre=filtrado($_POST['nombre']);
                $contrasena=filtrado($_POST['contrasena']);
                $email=filtrado($_POST['email']);
                
                $userDao=new UserDAO();
                $userDao->insertarUsuario($nombre,$email,$contrasena);

                $arrayUser=$userDao->getAllUsers();

                view::show('userview',$arrayUser);
            }
        }
        else { // Si el array esta vacío, hay errores en los campos

            
            view::show('insertuser',$erroresForm);

}

}
  

}

?>