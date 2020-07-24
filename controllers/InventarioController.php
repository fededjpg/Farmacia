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
}

?>