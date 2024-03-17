<?php

include_once('Models/users.php');
include_once('views/view.php');
include_once('Models/productosDAO.php');
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
        else { // Si el array esta vacío, hay errores en los campos del form
            
            view::show('insertuser',$erroresForm);

}

}
 //Aqui implemento la pagina de inicio a login. 

    function verlogin(){
        view::show('Views/login_usuario_MOD/login');
    }
//Aqui implemento la pagina de inicio a admin.
    function veradmin(){
        view::show('Views/Panel_de_control_administrador/admin');
    }
    /////////////////////////////////////////////////////////////////    
    public function login() {

        // Verifico si se enviaron los datos del formulario de inicio de sesión
        if (!isset($_POST['usuario'], $_POST['contrasena'])) {
            // Mostrar un mensaje de error si no se proporcionaron los datos necesarios
            $error['error'] = 'Por favor, Tienes que porcionar un usuario y una contraseña.';
            view::show('views/login_usuario_MOD/login', $error);
            return;
        }
    
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
    
        $userDAO = new UserDAO();
        $usuarioDB = $userDAO->getUserByUsername($usuario);
    
        if (!$usuarioDB || $contrasena !== $usuarioDB['contrasena']) {
            // Mostramos un mensaje de error si el usuario no existe o la contraseña es incorrecta
            $error['error'] = 'Usuario o contraseña incorrectos';
            view::show('views/login_usuario_MOD/login', $error);
            return;
        }
    
        // Iniciar sesión y establecer el rol del usuario
        
        $_SESSION['usuario'] = $usuario;
        $_SESSION['rol'] = $usuarioDB['rol'];

        // Determino el rol del usuario y redirecciono a la vista correspondiente, si es 1 es administrador, si es 2 es usuario
        if($_SESSION['rol'] == '1'){
            $product=new ProductoDAO();
            $arrayProductos = $product->getAllProductos();
            view::show('views/Panel_de_control_administrador/admin', $arrayProductos);
        } else {
            $product=new ProductoDAO();
            $arrayProductos = $product->getAllProductos();
            view::show('Views/seccion_usuario_MOD/pagina_inicio', $arrayProductos);
        }
        

    }

    //Aqui lo que hago es cerrar una sesion.
    function logout(){
        unset($_SESSION ['usuario']);
        session_destroy();
        
        $product=new ProductoDAO();
        $arrayProductos = $product->getAllProductos();
        view::show('Views/seccion_usuario_MOD/pagina_inicio', $arrayProductos);
    }

}

?>