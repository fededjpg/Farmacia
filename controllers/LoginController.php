<?php 
require_once 'models/usuario.php';

class LoginController{
    public function index(){
        require 'view/login/index.php';
    }

    public function login(){
       $user=$_POST['user'];
       $passwd=$_POST['password'];

        $usuario= new Usuario();
        $usuario->setUsuario($user);
        $usuario->setContra($passwd);
        $contador=0;

        $script=$usuario->login();

        while($fila= $script->fetch_assoc()){
         
            // echo $fila['contraseña'];
            if(password_verify($usuario->getContra(), $fila['contraseña'])){
                $contador++;
            }
        }   
            if($contador < 0){
                SESSION_START();
                $_SESSION['user'] = $script;
                echo 1;
            }
            else{
                echo 0;
            }  
    }         
}