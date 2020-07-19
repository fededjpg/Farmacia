<?php 
class Producto{

    public $id_producto;
    public $description;
    public $gramos;
    public $contenido;
    public $tipo;
    public $precio;
    private $db;

    public function __construct() {
		$this->db = Database::connect();
	}

    public function getIdProducto(){
        return $this->id_producto;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getGramos(){
        return $this->gramos;
    }
    public function getContenido(){
        return $this->contenido;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getPrecio(){
        return $this->precio;
    }

    public function setIdProducto($id_producto){
        return $this->id_producto=$id_producto;
    }

    public function setDescription($description){
        return $this->description=$description;
    }

    public function setGramos($gramos){
        return $this->gramos=$gramos;
    }
    public function setContenido($contenido){
        return $this->contenido=$contenido;
    }
    public function setTipo($tipo){
        return $this->tipo=$tipo;
    }
    public function setPrecio($precio){
        return $this->precio=$precio;
    }


    public function showAllProducts(){
        $consult= "SELECT * FROM productos";
        $resultado= $this->db->query($consult);
        return $resultado;
    }

}


?>