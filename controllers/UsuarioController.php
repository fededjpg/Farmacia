<?php 

require_once 'models/usuario.php';
class UsuarioController{
    public function cajero(){
        $cajero = new Usuario();
        $cajeros=$cajero->showAllCajero();
        require 'view/usuario/cajero.php';
    }

    public function admin(){
        $admin = new Usuario();
        $admins=$admin->showAllAdmin();
        require 'view/usuario/admin.php';
    }

    public function addCajero(){
        $user = new Usuario();

        $usuario=$_POST['usuario'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $fecha=$_POST['fechaNac'];
        $telefono=$_POST['telefono'];
        $contra=$_POST['contra'];

        $user->setUsuario($usuario);
        $user->setNombre($nombre);
        $user->setApellido($apellido);
        $user->setFechaNac($fecha);
        $user->setTelefono($telefono);
        $user->setContra($contra);
        $user->addCajero();
        
        header("Location:".base_url."usuario/cajero");

    }
    public function addAdmin(){
        $user = new Usuario();

        $usuario=$_POST['usuario'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $fecha=$_POST['fechaNac'];
        $telefono=$_POST['telefono'];
        $contra=$_POST['contra'];

        $user->setUsuario($usuario);
        $user->setNombre($nombre);
        $user->setApellido($apellido);
        $user->setFechaNac($fecha);
        $user->setTelefono($telefono);
        $user->setContra($contra);
        $user->addAdmin();
        
        header("Location:".base_url."usuario/admin");

    }

    public function actualizarCajero(){

        $user= $_GET['userName'];
        $cajero = new Usuario();
        $cajero->setUsuario($user);
        $cajer =$cajero->getOneCajero();

        require 'view/usuario/actualizarCajero.php';

    }
    public function actualizarElCajero(){
        $user = new Usuario();

        $usuario=$_POST['usuario'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $fecha=$_POST['fechaNac'];
        $telefono=$_POST['telefono'];
        $seleccion=$_POST['seleccion'];
        $contra=$_POST['contra'];

        $user->setUsuario($usuario);
        $user->setNombre($nombre);
        $user->setApellido($apellido);
        $user->setFechaNac($fecha);
        $user->setTelefono($telefono);
        $user->setRol($seleccion);
        $user->setContra($contra);
        $user->updateCajero();

        header("Location:".base_url."usuario/cajero");
        $_SESSION['success']="El Cajero ". $user->getUsuario() . " se actualizo satisfactoriamente";


    }
    public function actualizarAdmin(){

        $userName= $_GET['userName'];
        $admin = new Usuario();
        $admin->setUsuario($userName);
        $admins =$admin->getOneAdmin();

        require 'view/usuario/actualizarAdmin.php';

    }
    public function actualizarElAdmin(){
        $user = new Usuario();

        $usuario=$_POST['usuario'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $fecha=$_POST['fechaNac'];
        $telefono=$_POST['telefono'];
        $seleccion=$_POST['seleccion'];
        $contra=$_POST['contra'];

        $user->setUsuario($usuario);
        $user->setNombre($nombre);
        $user->setApellido($apellido);
        $user->setFechaNac($fecha);
        $user->setTelefono($telefono);
        $user->setRol($seleccion);
        $user->setContra($contra);
        $user->updateCajero();

        header("Location:".base_url."usuario/admin");
        $_SESSION['success']="El Administrador ". $user->getUsuario() . " se actualizo satisfactoriamente";

    }
}