<?php 
require_once 'models/registroProducto.php';

class RegistroController{

    public function index(){
        $producto = new Producto();
        $productos=$producto->showAllProducts();

        require_once 'view/registro/index.php';
    }

}

?>