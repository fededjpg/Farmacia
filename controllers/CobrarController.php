<?php 
require 'models/inventario.php';
require 'models/historial.php';
require 'models/prueba.php';

class CobrarController{
    public function index(){
        //utiizar sesion o si no ajax
        $inventario = new Inventario();
        $inventarios = $inventario->showAllInventario();
        require 'view/cobrar/index.php';

                 
        }

        public function  insertHistorial(){
            $id_producto= $_GET['id_producto'];
            // $id_inventario= $_GET['id_inventario'];
            $historial = new Historial();
            $historial->setId_producto($id_producto);
            $datos=$historial->showAllHistorial();
            
            header("Location:". base_url. "cobrar/index");

            require 'view/cobrar/index.php';


        }

        public function buscar(){
            $buscar=$_POST['buscar'];

            $prueba = new Prueba();
            $prueba->setDescripcion($buscar);
            $sql=$prueba->getBuscar();
            $result = mysqli_num_rows($sql);

if($result > 0){
    $data= mysqli_fetch_assoc($sql);
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit;
}
echo "error";
exit;

        }

        public function recibo(){
            $descripcion=$_POST['descripcion'];
            $gramos=$_POST['gramos'];
            $contenido=$_POST['contenido'];
            $tipo=$_POST['tipo'];
            $precio_publico=$_POST['precio_publico'];
            $stock=$_POST['stock'];
            $cantidad=$_POST['cantidad'];
            $total=$_POST['total'];

            $prueba = new Prueba();
            $prueba->setDescripcion($descripcion);
            $prueba->setGramos($gramos);
            $prueba->setContenido($contenido);
            $prueba->setTipo($tipo);
            $prueba->setPrecio_publico($precio_publico);
            $prueba->setStock($stock);
            $prueba->setCantidad($cantidad);
            $prueba->setTotal($total);
            $prueba->inserta();
        }

        public function visualizar(){
            // FUNCIONAA

            $prueba= new Prueba();
            $datos=$prueba->showAll();

            $datosTabla="";

            
            foreach ($datos as $key => $value) {
                
                $datosTabla= $datosTabla.'
                <tr>
                <td><input type="checkbox" value="'.$value['id'].'" ></td>
                <td>'.$value['descripcion'].'</td>
                <td>'.$value['gramos'].'</td>
                <td>'.$value['contenido'].'</td>
                <td>'.$value['tipo'].'</td>
                <td>'.$value['precio_publico'].'</td>
                <td>'.$value['stock'].'</td>
                <td>'.$value['cantidad'].'</td>
                <td class="sumar">'.$value['total'].'</td>
            </tr>
                ';
            }
            echo $datosTabla;

            // $prueba= new Prueba();
            // $sql=$prueba->showAll();
            // $result = mysqli_fetch_all($sql, MYSQLI_ASSOC);
            // exit(json_encode($result));
        }

        public function eliminarProducto(){
            $id= $_POST['valor'];
            $delete = new Prueba();
            $delete->setId($id);
            $exito=$delete->deleteProduct();

            return 1;
        }
        


}