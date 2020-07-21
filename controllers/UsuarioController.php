<?php 
require_once 'models/usuario.php';

class UsuarioController{

    public function index(){
        $usuario = new Usuario();
        $usuario->setNombre('federico');
    }
}
