<?php
require_once('../controller/ManageDB.php');
class Elector {
    private $id;
    private $nombre;
    private $nombre2;
    private $apell1;
    private $apell2;
    private $identid;
    private $edad;
    private $centro_trabajo;
    private $conexion;
    
    function __construct(){
        $this->conexion = new ManageDB();
    }

    // Metodo encargado de crear un elemento
    function create($nombre,$nombre2,$apell1,$apell2,$identid,$edad,$centro_trabajo){
        $flag = $this->conexion->create('elector',"'nombre'","$nombre,$nombre2,$apell1,$apell2,$identid,$edad,$centro_trabajo");
        if ($flag) {
            return true;
        }else{
            return false;
        }
    }

    // Metodo encargado de editar una persona
    function edit($id,$data){

    }

    // Metodo encargado de buscar una persona por 
    // parametros definidos
    function search($params){

    }

    // Metodo para eliminar un elemento
    function delete($id){

    }
}
?>