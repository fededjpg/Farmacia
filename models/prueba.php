<?php 

class Prueba{
        public $id;
        public $descripcion;
        public $gramos;
        public $contenido;
        public $tipo;
        public $precio_publico;
        public $stock;
        public $cantidad;
        public $descuento;
        public $total;
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


        public function getDescripcion()
        {
                return $this->descripcion;
        }

        public function setDescripcion($descripcion)
        {
                return $this->descripcion = $descripcion;
        }


        public function getGramos()
        {
                return $this->gramos;
        }

        public function setGramos($gramos)
        {
                return $this->gramos = $gramos;
        }


        public function getContenido()
        {
                return $this->contenido;
        }

        public function setContenido($contenido)
        {
                return $this->contenido = $contenido;
        }

        public function getTipo()
        {
                return $this->tipo;
        }

        public function setTipo($tipo)
        {
                return $this->tipo = $tipo;

        }

        public function getPrecio_publico()
        {
                return $this->precio_publico;
        }

        public function setPrecio_publico($precio_publico)
        {
                return $this->precio_publico = $precio_publico;
        }

        public function getStock()
        {
                return $this->stock;
        }

        public function setStock($stock)
        {
                return $this->stock = $stock;
        }

        public function getCantidad()
        {
                return $this->cantidad;
        }

        public function setCantidad($cantidad)
        {
                return $this->cantidad = $cantidad;

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

        public function getBuscar(){

        $buscar = "SELECT * FROM productos WHERE nombre like '%{$this->getDescripcion()}%' OR gramos like '%{$this->getDescripcion()}%' OR descripcion like '%{$this->getDescripcion()}%' OR id_producto like '%{$this->getDescripcion()}%' OR tipo like '%{$this->getDescripcion()}%'";
        // $buscar="SELECT i.id_inventario, p.id_producto, p.descripcion, 
        // p.gramos, p.contenido, p.precio_publico,p.tipo, i.stock
        // FROM inventario i 
        // INNER JOIN productos p
        // ON like p.descripcion = '%{$this->getDescripcion()}%' ORgramos like '%{$this->getDescripcion()}%'
        // GROUP BY p.id_producto";

                $respuesta=$this->db->query($buscar);

                return $respuesta;
        }
        public function inserta(){
                $insert="INSERT INTO prueba VALUES (NULL, '{$this->getDescripcion()}', '{$this->getGramos()}', '{$this->getContenido()}', '{$this->getTipo()}', '{$this->getPrecio_publico()}', '{$this->getStock()}', '{$this->getCantidad()}', {$this->getDescuento()}, '{$this->getTotal()}')";
                $resultado = $this->db->query($insert);

                // var_dump($insert);
                return $resultado;


        }

        public function showAll(){
                
                $mostrar = "SELECT * FROM prueba";
                $respuesta= $this->db->query($mostrar);
                return $respuesta;

                
                //FUNCIONA....
                // $mostrar = "SELECT * FROM prueba";
                // $respuesta= $this->db->query($mostrar);

                // return $respuesta;
        }

        public function deleteProduct(){
        $sql="DELETE FROM prueba WHERE id = {$this->getId()}";
        $respuesta=$this->db->query($sql);

        // return $respuesta2;
        return $respuesta;
        }

}
