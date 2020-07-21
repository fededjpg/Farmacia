<?php 
require_once 'models/entradas.php';

class EntradaController{
    public function index(){
        
        $entradaa =new Entrada();
        $entradas = $entradaa->showAllEntradas();
        require 'view/entrada/index.php';
    }

    public function insertEntra(){
        $Entrada =new Entrada();
        $clave=$_POST['clave'];
        $fecha=$_POST['fecha'];
        $entradas=$_POST['entradas'];

        $Entrada->setId_producto($clave);
        $Entrada->setFecha_registro($fecha);
        $Entrada->setEntradas($entradas);
        
        $Entrada->insertEntrada();
     }
}

