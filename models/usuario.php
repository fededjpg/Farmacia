<?php 

class Usuario{
    public $nombre;
    public $apellido;
    public $segApellido;
    public $edad;


    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getSegNombre(){
        return $this->segApellido;
    }
    public function getEdad(){
        return $this->edad;
    }

    public function setNombre($nombre){
        return $this->nombre=$nombre;
    }

    public function setApellido($apellido){
        return $this->apellido=$apellido;
    }

    public function setSegApellido($segApellido){
        return $this->segApellido=$segApellido;
    }

    public function setEdad($edad){
        return $this->edad=$edad;
    }

}


?>