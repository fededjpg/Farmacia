<?php 

require_once 'models/inventario.php';

class InventarioController{

    public function index(){
        $inventario = new Inventario();
        $inventarios = $inventario->showAllInventario();
        

        require_once 'view/inventario/inventario.php';
    }

    public function exportar(){
        $inventario = new Inventario();
        $inventarios = $inventario->showAllInventario();
        require_once 'generarpdf/index.php';
    }

    public function actualizar(){

        $id=$_GET['id'];
        $id_inventario=$_GET['id_inventario'];
        $inventario = new Inventario();
        $inventario->setId_producto($id);
        $inventario->setId_inventario($id_inventario);
        $inventarios=$inventario->getOneInventario();
        require 'view/inventario/actualizar.php';
    }

    public function insertarIgualiacion(){

        $inventario = new Inventario();

        $id_inventario=$_POST['id_inventario'];
        $id_producto=$_POST['id_producto'];
        $faltantes=$_POST['faltantes'];
        $restantes=$_POST['restantes'];

        $inventario->setId_inventario($id_inventario);
        $inventario->setId_producto($id_producto);
        $inventario->setFaltantes($faltantes);
        $inventario->setRestantes($restantes);

        $inventario->insertIgualacion();

        header("Location:".base_url."inventario/index");
        $_SESSION['success'] ="El Inventario se Igualo Exitosamente";

    }

    

}

?>