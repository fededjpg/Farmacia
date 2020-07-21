<?php 
require_once 'models/registroProducto.php';

class RegistroController{

    public function index(){
        $producto = new Producto();
        $productos=$producto->showAllProducts();

        require_once 'view/registro/index.php';
    }

    public function insertProduct(){
        $producto = new Producto();
        
        $clave=$_POST['clave'];
        $descripcion=$_POST['descripcion'];
        $gramos=$_POST['gramos'];
        $contenido=$_POST['contenido'];
        $tipo=$_POST['tipo'];
        $precio=$_POST['precio'];

        $producto->setIdProducto($clave);
        $producto->setDescription($descripcion);
        $producto->setGramos($gramos);
        $producto->setContenido($contenido);
        $producto->setTipo($tipo);
        $producto->setPrecio($precio);
        
        $producto->insertProducto();
     }

}