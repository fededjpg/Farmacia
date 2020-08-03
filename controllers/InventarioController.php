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
        $inventario = new Inventario();
        $inventario->setId_producto($id);
        $inventarios=$inventario->getOneInventario();
        require 'view/inventario/actualizar.php';
    }

    public function insertarIgualiacion(){

        $inventario = new Inventario();

        $id_producto=$_POST['id_producto'];
        $faltantes=$_POST['faltantes'];
        $restantes=$_POST['restantes'];

        $inventario->setId_producto($id_producto);
        $inventario->setFaltantes($faltantes);
        $inventario->setRestantes($restantes);

        $inventario->insertIgualacion();

        header("Location:".base_url."inventario/index");
        $_SESSION['success'] ="El Inventario se Igualo Exitosamente";

    }

    public function showAllProducto(){

        $id= $_POST['id'];

        $productos = new Inventario();
        $productos->setId_producto($id);
        $productos->showAllProducto();


    }

    public function igualacion(){

        $igualacion = new Inventario();
        $igualaciones=$igualacion->showAllIgualacion();

        require_once 'view/inventario/igualacion.php';
    }

    

}

?>