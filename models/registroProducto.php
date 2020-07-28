<?php 
class Producto{

    public $id_producto;
    public $nombre;
    public $description;
    public $gramos;
    public $contenido;
    public $tipo;
    public $precio;
    public $precio_proveedor;
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

    function getPrecioproveedor() { 
        return $this->precio_proveedor; 
   } 

   function setPrecioproveedor($precio_proveedor) {  
       $this->precio_proveedor = $precio_proveedor; 
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
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        return $this->nombre = $nombre;
    }

/**visualixar todos lod productos en la tabla */
    public function showAllProducts(){
        $consult= "SELECT * FROM productos";
        $resultado= $this->db->query($consult);
        return $resultado;
    }
/**insertar un producto */
    public function insertProducto(){

        $insertProduct = "INSERT INTO productos VALUES ({$this->getIdProducto()},'{$this->getNombre()}', '{$this->getDescription()}','{$this->getGramos()}','{$this->getContenido()}','{$this->getTipo()}','{$this->getPrecioproveedor()}','{$this->getPrecio()}')";

        $insertEntered = "INSERT INTO entradas VALUES (NULL,{$this->getIdProducto()},'{$this->getFecha()}','{$this->getEntrada()}')";
        
        $insertInv="INSERT INTO inventario(id_producto,stock) VALUES ({$this->getIdProducto()},'{$this->getEntrada()}')";
        //  var_dump($insertInv);
        //  var_dump($insertInv);
        //  die();
        $resultProduct = $this->db->query($insertProduct);
        $resultEntered = $this->db->query($insertEntered);
        $resultInv = $this->db->query($insertInv);
        
        return $resultProduct;
        return $resultEntered;
        return $resultInv;
       }

       /**para actualizar un producto */
    public function getOneProduct(){
    $consult = "SELECT * FROM productos WHERE id_producto = '{$this->getIdProducto()}'";
    $consulta = $this->db->query($consult);

    return $consulta;
    }
    
    public function  updateProduct(){
        $update= "UPDATE productos SET descripcion ='{$this->getDescription()}', 
        gramos='{$this->getGramos()}',
        contenido='{$this->getContenido()}',        
        precio_proveedor='{$this->getPrecioproveedor()}',
        precio_publico = {$this->getPrecio()}, 
        tipo='{$this->getTipo()}'
        WHERE id_producto={$this->getIdProducto()}";

        $resultupdate = $this->db->query($update);
        
        return $resultupdate;
        
              
    }
   
}


	


?>