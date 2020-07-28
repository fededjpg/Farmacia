<?php 

class Historial{
    public $numero;
    public $folio;
    public $id_producto;
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

    public function showAllHistorial(){
        $query="INSERT INTO historial VALUES (NULL, 1, {$this->getId_producto()}, 'usuario', 3, 'tarjeta', 0, 97)";

        $resultado = $this->db->query($query);

        return $resultado;

    }

    public function visualizar(){
       
        $query="SELECT folio,id_producto,usuario,cantidad FROM historial WHERE numero=4";
        $resultado= $this->db->query($query);
        return $resultado;
    }
}