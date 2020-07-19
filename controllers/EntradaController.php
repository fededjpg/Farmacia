<?php 
require_once 'models/entradas.php';

class EntradaController{
    public function index(){
        
        $entrada =new Entrada();
        $entradas = $entrada->showAllEntradas();
        

        require 'view/entrada/index.php';
    }
}

?>