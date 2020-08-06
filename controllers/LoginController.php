<?php
require_once 'models/usuario.php';

class LoginController
{
    public function index()
    {
        require 'view/login/index.php';
    }

    public function login()
    {
        $user = $_POST['user'];
        $passwd = $_POST['password'];

        $usuario = new Usuario();
        $usuario->setUsuario($user);
        $usuario->setContra($passwd);
        $contador = 0;

        $script = $usuario->login();

        while ($fila = $script->fetch_assoc()) {

           
                $_SESSION['userRol'] = $fila['rol'];
                $_SESSION['user'] = $fila['usuario'];
                $_SESSION['userName'] = $fila['nombre'];
                $_SESSION['userLastName'] = $fila['apellido'];

            
            if (password_verify($usuario->getContra(), $fila['contraseña'])) {
                $contador++;
            }
        }
        if ($contador > 0) {
            $_SESSION['user'];
            $_SESSION['userRol'];
            $_SESSION['userName'];
            $_SESSION['userLastName'];
           
            if($_SESSION['userRol']!= 'admin'){
           echo 1;
            }else{
           echo 2;
            }
        } else {
            echo 0;
        }
    }
}
