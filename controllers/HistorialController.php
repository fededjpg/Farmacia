<?php 

require_once 'models/historial.php';

class HistorialController{
    public function index(){
    
        $historial = new Historial();
        $historiales = $historial->showAllHistorial();

        require 'view/historial/index.php';

    }

    public function corte(){
        $historial = new Historial();
        $fecha1 = $_POST['fechas'];
        $fecha2 = $_POST['fechass'];
        $usuario = $_POST['corteUsuario'];

        $historial->setFecha($fecha1);
        $historial->setFecha2($fecha2);
        $historial->setUsuario($usuario);


        $sql = $historial->showCorte();
        $result =mysqli_num_rows($sql);

        if($result > 0){
            $data= mysqli_fetch_assoc($sql);
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            exit;
        }
        echo "error";
        exit;

    }
}