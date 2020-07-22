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
        
        $clave=$_POST['id_producto'];
        $descripcion=$_POST['descripcion'];
        $gramos=$_POST['gramos'];
        $contenido=$_POST['contenido'];
        $tipo=$_POST['tipo'];
        $precio=$_POST['precio_publico'];
        $precio_pro=$_POST['precio_proveedor'];
        $fecha=$_POST['fecha'];
        $entrada=$_POST['entrada'];

        $producto->setIdProducto($clave);
        $producto->setDescription($descripcion);
        $producto->setGramos($gramos);
        $producto->setContenido($contenido);
        $producto->setTipo($tipo);
        $producto->setPrecio($precio);
        $producto->setPrecioproveedor($precio_pro);
        $producto->setFecha($fecha);
        $producto->setEntrada($entrada);
        
        $producto->insertProducto();

        header("Location:".base_url."registro/index");

        $_SESSION['success']="El producto ".$producto->getDescription() . " se agergo correctamente";

    

     }

     public function actualizar(){

         $id=$_GET['id'];

         $producto = new Producto();
         
         $producto->setIdProducto($id);

        $productos=$producto->getOneProduct();

        require_once 'view/registro/actualizar.php';
     }

     public function actualizarProducto(){
        
        $producto = new Producto();
        
        $clave=$_POST['id_producto'];
        $descripcion=$_POST['descripcion'];
        $gramos=$_POST['gramos'];
        $contenido=$_POST['contenido'];
        $tipo=$_POST['tipo'];
        $precio=$_POST['precio_publico'];
        $precio_pro=$_POST['precio_proveedor'];

        $producto->setIdProducto($clave);
        $producto->setDescription($descripcion);
        $producto->setGramos($gramos);
        $producto->setContenido($contenido);
        $producto->setTipo($tipo);
        $producto->setPrecio($precio);
        $producto->setPrecioproveedor($precio_pro);
        
        $producto->updateProduct();

        header("Location:".base_url."registro/index");

        $_SESSION['success']="El producto ".$producto->getDescription() . " se actualizo correctamente";
       require_once 'view/registro/actualizar.php';
    }

}