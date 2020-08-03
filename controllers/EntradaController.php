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
        $descripcion=$_POST['descripcion'];
        $gramos=$_POST['gramos'];
        $tipo=$_POST['tipo'];
        $fecha=$_POST['fecha'];
        $entradas=$_POST['entradas'];
        

        $Entrada->setId_producto($clave);
        $Entrada->setFecha_registro($fecha);
        $Entrada->setEntradas($entradas);
        $Entrada->setDescripcion($descripcion);
        $Entrada->setGramos($gramos);
        $Entrada->setTipo($tipo);
        $Entrada->insertEntrada();

        header("Location:".base_url."entrada/index");
        $_SESSION['success'] ="El medicamento ".$Entrada->getId_producto()." resgitro exitosamente";
    }

    public function actualizar(){
        $id=$_GET['id'];

        $entrada= new Entrada();
        $entrada->setId_producto($id);
        $entradas =$entrada->getOneEntry();

        require 'view/entrada/actualizar.php';
    }
}

