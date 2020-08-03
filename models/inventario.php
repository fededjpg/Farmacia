<?php 
class Inventario{

  
    public $id_producto;
    public $id_inventario;
    public $faltantes;
    public $restantes;
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

    public function getFaltantes()
    {
        return $this->faltantes;
    }


    public function setFaltantes($faltantes)
    {
        return $this->faltantes = $faltantes;
   
    }

    public function getRestantes()
    {
        return $this->restantes;
    }

    public function setRestantes($restantes)
    {
        return $this->restantes = $restantes;
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
        $consult = "  SELECT  id_producto, descripcion, gramos, contenido,tipo, stock
        FROM productos WHERE id_producto > 3";

        // SELECT  i.id_inventario, p.id_producto, p.descripcion, p.gramos, p.contenido, p.tipo,
        // e.fecha_registro, e.entradas, sum(e.entradas) as 'stock'  
        // FROM entradas e INNER JOIN productos p ON p.id_producto = e.id_producto
        // INNER JOIN inventario i ON p.id_producto = i.id_producto
        // group by p.id_producto

        $resultado= $this->db->query($consult);
        $consulta = "SELECT MAX(folio) as numero FROM historial_farmacia";

        $respuesta2=$this->db->query($consulta);

        $res=$respuesta2->fetch_assoc();
        
        $_SESSION['numeral']= $res['numero']+1;
        return $resultado;   

    }

    public function missingExport(){

        $query = "SELECT  id_producto, descripcion, gramos, contenido,tipo, precio_proveedor, stock
        FROM productos WHERE stock <= 3 AND descripcion != 'caja' AND descripcion != 'retiro' ";

        $resultado= $this->db->query($query);
        return $resultado;
    }




    public function showAllProducto(){
    $consult="SELECT * FROM productos where descripcion =  '{$this->getDescripcion()}'";
        // $consult = "SELECT i.id_inventario, p.id_producto, p.descripcion, p.gramos, p.contenido, p.precio_publico, p.tipo, i.stock
        // FROM productos p 
        // INNER JOIN inventario i
	    // ON p.id_producto = {$this->getId_producto()}	
        // WHERE i.id_inventario = {$this->getId_inventario()}";
        $resultado= $this->db->query($consult);
        return $resultado;   
    }
    
    // getRestantes es Sobrantes
    public function insertIgualacion(){
        $insert = "INSERT INTO igualacion_inventario VALUES (NULL,{$this->getId_producto()}, 
        {$this->getFaltantes()},{$this->getRestantes()},CURDATE())";

        $UpdateInv=" UPDATE productos SET stock= stock - {$this->getFaltantes()}, 
        stock=stock+{$this->getRestantes()}
        WHERE id_producto={$this->getId_producto()}";
        
        // var_dump($insert);
        // die();

        // var_dump($UpdateInv);
        // die();

        $resultado= $this->db->query($insert);
        $resUp= $this->db->query($UpdateInv);

        return $resUp;
        return $resultado;


    }

    public function getOneInventario(){

        $consult ="	SELECT id_producto, descripcion
        FROM productos
        WHERE id_producto = {$this->getId_producto()}";

        $result=$this->db->query($consult);

        return $result;

    }   

    public function showAllIgualacion(){

        $query = "SELECT p.id_producto, p.descripcion, p.gramos, p.contenido, p.tipo ,i.faltantes, i.sobrantes, i.fechas 
        FROM productos p, igualacion_inventario i 
        WHERE i.id_producto = p.id_producto AND i.id_producto > 3;";

        $resultado = $this->db->query($query);
        return $resultado;
    }

}
   
     