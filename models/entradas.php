<?php 
class Entrada{

    public $id;
    public $id_producto;
    public $gramos;
    public $contenido;
    public $tipo;
    public $fecha_registro;
    public $entradas;
    private $db;


    public function __construct() {
		$this->db = Database::connect();
	}

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        return $this->id = $id;
    }

    public function setGramos($gramos)
    {
        return $this->gramos = $gramos;
    }

    public function getGramos()
    {
        return $this->gramos;
    }

    
    public function setContenidos($contenido)
    {
        return $this->contenido = $contenido;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function setTipo($tipo)
    {
        return $this->tipo = $tipo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getId_producto()
    {
        return $this->id_producto;
    }

   
    public function setId_producto($id_producto)
    {
        return $this->id_producto = $id_producto;

    }

   
    public function getFecha_registro()
    {
        return $this->fecha_registro;
    }

   
    public function setFecha_registro($fecha_registro)
    {
        return $this->fecha_registro = $fecha_registro;
    }

   
    public function getEntradas()
    {
        return $this->entradas;
    }

    public function setEntradas($entradas)
    {
        return $this->entradas = $entradas;
    }

    

    public function showAllEntradas(){
        $consult = "SELECT p.id_producto, p.descripcion, p.gramos, p.contenido, p.tipo,
        e.fecha_registro, e.entradas  
        FROM entradas e INNER JOIN productos p ON p.id_producto = e.id_producto";
        $resultado= $this->db->query($consult);
        return $resultado;
    }

    public function insertEntrada(){
     $insert = "INSERT INTO entradas VALUES (NULL,{$this->getId_producto()}, 
     '{$this->getFecha_registro()}','{$this->getEntradas()}')";

        $UpdateInv = "UPDATE inventario SET stock =stock +'{$this->getEntradas()}'
        WHERE id_producto= {$this->getId_producto()}";
    // var_dump($insert);
    // die();
     $resultado = $this->db->query($insert);
     $resultadoInv = $this->db->query($UpdateInv);
     
     return $resultado;
     return $resultadoInv;
    }

}



?>