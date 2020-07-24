<?php 
class Inventario{

  
    public $id_producto;
    public $id_inventario;
    public $descripcion;
    public $gramos;
    public $contenido;
    public $tipo;
    public $stock;
    private $db;

    public function __construct() {
		$this->db = Database::connect();
    }

    public function getId_producto()
    {
        return $this->id_producto;
    }


    public function setId_producto($id_producto)
    {
        return $this->id_producto = $id_producto;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function getId_inventario()
    {
        return $this->id_inventario;
    }

   
    
    public function setId_inventario($id_inventario)
    {
        return $this->id_inventario = $id_inventario;

        
    }

    public function setDescripcion($descripcion)
    {
        return $this->descripcion = $descripcion;
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

    public function getStock()
    {
        return $this->stock;
    }


    public function setStock($stock)
    {
        return $this->stock= $stock;
    }

    public function showAllInventario(){
        $consult = "  SELECT  i.id_inventario, p.id_producto, p.descripcion, p.gramos, p.contenido, p.tipo,
        e.fecha_registro, e.entradas, sum(e.entradas) as 'stock'  
        FROM entradas e INNER JOIN productos p ON p.id_producto = e.id_producto
        INNER JOIN inventario i ON p.id_producto = i.id_producto
        group by p.id_producto";

        $resultado= $this->db->query($consult);
        return $resultado;
        

    }

    public function export(){
        // $consult = "SELECT p.id_producto, p.descripcion, p.gramos, p.contenido, p.tipo,
        // e.fecha_registro, e.entradas, sum(e.entradas) as 'stock'  
        // FROM entradas e INNER JOIN productos p ON p.id_producto = e.id_producto
        // WHERE p.nombre LIKE '%{$this->getDescripcion()}' 
        // group by p.id_producto"+
    }

    public function getOneInventario(){

        $consult ="	SELECT i.id_inventario, p.id_producto, p.descripcion, p.gramos, 
        p.contenido, p.tipo, i.stock 
        FROM productos p 
        INNER JOIN inventario i
	    ON p.id_producto = {$this->getId_producto()}	
        WHERE i.id_inventario = {$this->getId_inventario()}";

        $result=$this->db->query($consult);

        return $result;
    }
   

 
}
    //    SELECT i.id_inventario, p.id_producto, p.descripcion, p.gramos, 
    //     p.contenido, p.tipo, i.stock 
    //     FROM productos p, inventario i 
    //     WHERE  i.id_producto = p.id_producto or p.id_producto=7502216796331
     