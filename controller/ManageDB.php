<?php
class ManageDB {
    private $servidor;
    private $usuario;
    private $password;
    private $db;
    private $conexion;

    function __construct(){
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->password = "";
        $this->db = "decidamos_login";
        $this->conectar();
    }

    // Metodo encargado de crear la conexion a la DB
    function conectar(){
        try {
            $this->conexion  = new mysqli($this->servidor, $this->usuario, $this->password, $this->db);            
        } catch (\Throwable $th) {
            if($this->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }
        }
    }

    // Metodo encargado de crear un elemento
    function create($tabla,$atributos,$value){
        $sql = "insert into $tabla ($atributos) values($value)";
        if ($this->conexion->query($sql)){
            return true;
        }else {
            return false;
        }
    }

    // Metodo encargado de buscar un elemento
    function search($tabla,$atributos,$filtro){
        $sql = "select $atributos from $tabla";
        if ($filtro != null){
            $sql = $sql." where $filtro";
        }
        
        $result = $this->conexion->query($sql);
        return $result->fetch_assoc();
    }
}

?>