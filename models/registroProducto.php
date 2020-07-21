<?php 
class Producto{

    public $id_producto;
    public $description;
    public $gramos;
    public $contenido;
    public $tipo;
    public $precio;
    public $fecha;
    public $entrada;
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
    public function getFecha(){
        return $this->fecha;
    }
    public function getEntrada(){
        return $this->entrada;
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
    public function setFecha($fecha){
        return $this->fecha=$fecha;
    }
    public function setEntrada($entrada){
        return $this->entrada=$entrada;
    }


    public function showAllProducts(){
        $consult= "SELECT * FROM productos";
        $resultado= $this->db->query($consult);
        return $resultado;
    }

    public function insertProducto(){
        $insert = "INSERT INTO productos VALUES ({$this->getIdProducto()},'{$this->getDescription()}','{$this->getGramos()}','{$this->getContenido()}','{$this->getTipo()}','{$this->getPrecio()}')";

        $insertt = "INSERT INTO entradas VALUES (NULL,{$this->getIdProducto()},'{$this->getFecha()}','{$this->getEntrada()}')";
        
        // var_dump($insert);
        // var_dump($insertt);
        // die();
        $resultado = $this->db->query($insert);
        $resultadoo = $this->db->query($insertt);

        return $resultado;
        return $resultadoo;
       }

    public function getOneProduct(){
    $consult = "SELECT * FROM productos WHERE id_producto = '{$this->getIdProducto()}'";
    $consulta = $this->db->query($consult);

    return $consulta;
    }
   

}


?>