<?php 
class Entrada{

    public $id;
    public $id_producto;
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
        $consult = "SELECT e.id_producto, p.descripcion, e.fecha_registro, e.entradas  FROM entradas e INNER JOIN productos p ON p.id_producto= e.id_producto";
        $resultado= $this->db->query($consult);
        return $resultado;
    }
}



?>