<?php 


class Usuario{
    public $id;
    public $usuario;
    public $nombre;
    public $apellido;
    public $fechaNac;
    public $telefono;
    public $rol;
    public $contra;
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

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        return $this->usuario = $usuario;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        return $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        return $this->apellido = $apellido;
    }

    public function getFechaNac()
    {
        return $this->fechaNac;
    }


    public function setFechaNac($fechaNac)
    {
        return $this->fechaNac = $fechaNac;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        return $this->telefono = $telefono;
    }
    public function getRol()
    {
        return $this->rol;
    }
    public function setRol($rol)
    {
        return $this->rol = $rol;
    }

    public function getContra()
    {
        return $this->contra;
    }
    public function setContra($contra)
    {
        return $this->contra = $contra;
    }


    public function showAllCajero(){
        $consult="SELECT * FROM usuario where rol != 'admin'";
        $result=$this->db->query($consult);
        return $result;
    }

    public function showAllAdmin(){
        $consult="SELECT * FROM usuario where rol = 'admin'";
        $result=$this->db->query($consult);
        return $result;
    }
    public function addCajero(){
        $consult="INSERT INTO usuario VALUES(NULL,'{$this->getUsuario()}', '{$this->getNombre()}', '{$this->getApellido()}','{$this->getFechaNac()}','{$this->getTelefono()}','{$this->getContra()}','cajero')";
        $result=$this->db->query($consult);
        return $result;
    }
    public function addAdmin(){
        $consult="INSERT INTO usuario VALUES(NULL,'{$this->getUsuario()}', '{$this->getNombre()}', '{$this->getApellido()}','{$this->getFechaNac()}','{$this->getTelefono()}','{$this->getContra()}','admin')";
        $result=$this->db->query($consult);
        return $result;
    }

    public function getOneCajero(){
        $consult = "SELECT * FROM usuario where id = {$this->getId()}";
        $result=$this->db->query($consult);
        return $result;
    }

    public function updateCajero(){
        $consulta = "UPDATE usuario SET id= {$this->getId()}, usuario = '{$this->getUsuario()}', nombre= '{$this->getNombre()}', apellido = '{$this->getApellido()}', f_nacimiento= '{$this->getFechaNac()}', telefono = {$this->getTelefono()},contraseña = '{$this->getContra()}',  rol = '{$this->getRol()}' WHERE id = {$this->getId()} ";
        $resultado=$this->db->query($consulta);
        return $resultado;
    }

    public function getOneAdmin(){
        $consult = "SELECT * FROM usuario where id = {$this->getId()}";
        $result=$this->db->query($consult);
        return $result;
    }

    public function updateAdmin(){
        $consulta = "UPDATE usuario SET id= {$this->getId()}, usuario = '{$this->getUsuario()}', nombre= '{$this->getNombre()}', apellido = '{$this->getApellido()}', f_nacimiento= '{$this->getFechaNac()}', telefono = {$this->getTelefono()},contraseña = '{$this->getContra()}',  rol = '{$this->getRol()}' WHERE id = {$this->getId()} ";
        $resultado=$this->db->query($consulta);
        return $resultado;
    }

    public function login(){   
       $query = "SELECT * FROM usuario where usuario = '{$this->getUsuario()}' ";
        $script=$this->db->query($query);
        
        return $script;
    }


}
