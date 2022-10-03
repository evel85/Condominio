<?php

class conexion{

    private $servidor="localhost";
    private $dbname="condominio";
    private $usuario="root";
    private $contrasenia="";
    private $conexion;

    public function __construct()
    {
        try{
            $this->conexion=new PDO("mysql:host=$this->servidor;dbname=$this->dbname",$this->usuario,$this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            return "Falla de conexión".$e;

        }
    }

    //Método para Insertar/Borrar/Actualizar
    public function ejecutar($sql){
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertID();//retorna el último id agregado
    }

    //Método para Leer/Consultar/Seleccionar
    public function consultar($sql){
        $sentencia=$this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();//retorna todos los registros
    }

}

?>