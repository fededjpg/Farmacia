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
}

?>