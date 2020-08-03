<?php 

class Historial{
    public $numero;
    public $folio;
    public $fecha2;
    public $fecha;
    public $usuario;
    public $cantidad;
    public $metodo_pago;
    public $descuento;
    public $total;

    private $db;

    public function __construct() {
		$this->db = Database::connect();
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        return $this->numero = $numero;
    }
    public function getFolio()
    {
        return $this->folio;
    }
    public function setFolio($folio)
    {
        return $this->folio = $folio;
    }

    public function getId_producto()
    {
        return $this->id_producto;
    }

    public function setId_producto($id_producto)
    {
        return $this->id_producto = $id_producto;


    }

    public function getFecha()
    {
        return $this->fecha;
    }

    
    public function setFecha($fecha)
    {
        return $this->fecha = $fecha;

    }

    public function getFecha2()
    {
        return $this->fecha2;
    }

    public function setFecha2($fecha2)
    {
        return $this->fecha2 = $fecha2;

    }


    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        return $this->usuario = $usuario;

    }
    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setCantidad($cantidad)
    {
        return $this->cantidad = $cantidad;

    }

    public function getMetodo_pago()
    {
        return $this->metodo_pago;
    }
    public function setMetodo_pago($metodo_pago)
    {
        return $this->metodo_pago = $metodo_pago;
    }
    public function getDescuento()
    {
        return $this->descuento;
    }

    public function setDescuento($descuento)
    {
        return $this->descuento = $descuento;

        
    }
    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        return $this->total = $total;
    }

    public function showCorte(){
    $query="SELECT sum(total) as suma, usuario FROM historial_farmacia WHERE fecha BETWEEN  '{$this->getFecha()}' AND  '{$this->getFecha2()}' AND usuario= '{$this->getUsuario()}'";
        // var_dump($query);
        // die();
    $resultado = $this->db->query($query);
    return $resultado;
    }

    public function showAllHistorial(){
       
        $query="SELECT * FROM historial_farmacia";
        
        $resultado= $this->db->query($query);

        $query2="SELECT sum(total) as suma FROM historial_farmacia";
        
        $resultado2= $this->db->query($query2);
        
        $res=$resultado2->fetch_assoc();
       $_SESSION['total']= $res['suma'];
        return $resultado;
       
    }

        public function showTotal(){

            $query2="SELECT sum(total) as suma FROM historial_farmacia";
        
            $resultado2= $this->db->query($query2);

            return $resultado2;

        }
    

   
}