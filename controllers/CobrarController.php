<?php 
require 'models/inventario.php';

class CobrarController{
    public function index(){
        //utiizar sesion o si no ajax
        $inventario = new Inventario();
        $inventarios = $inventario->showAllInventario();
        require 'view/cobrar/index.php';

                 
        }
        


}