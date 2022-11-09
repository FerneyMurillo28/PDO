<?php
class Cordinador
{
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;

    public function agreCordi($Nombre,$Apellido,$Correo,$Telefono){
        require_once("../dao/conectar.php");
        $conn=connect();
        $sql="insert into cordinador (Nombre,Apellido,Correo,Telefono) values(?,?,?,?)";
        $consulta=$conn->prepare($sql);
        $consulta->execute((Array($Nombre,$Apellido,$Correo,$Telefono)));
        $conn=null;
        header("location:../view/viewCordinador.php");
    }

    public function borrarCordi($Id) 
    {
        require_once("../dao/conectar.php");
        $conn=connect();
        $sql="delete from cordinador where Id=?";
        $consulta=$conn->prepare($sql);
        $consulta->execute((Array($Id)));
        $conn=null;
        header("location:../view/viewCordinador.php");
    }

    public function consultarCordiXId($id){
        require_once("../../dao/conectar.php");
        $conn=connect();
        $sql="select * from cordinador where Id=?";
        $consulta=$conn->prepare($sql);
        $consulta->execute((Array($id)));
        return $consulta;
        $conn=null;
    }
    public function actualizarCordi($nombre , $apellido , $correo, $telefono,$id)
    {
        require_once("../dao/conectar.php");
        $conn=connect();
        $sql="UPDATE cordinador SET Nombre=?, Apellido=?,Correo=?,Telefono=? WHERE Id=?";
        $consulta=$conn->prepare($sql);
        $consulta->execute((Array($nombre , $apellido , $correo, $telefono, $id)));
        $conn=null;
        header("location:../view/viewCordinador.php");
    }
    
    public function consulCordi(){
        require_once("../dao/conectar.php");
        $conn=connect();
        $sql="select * from cordinador";
        $consulta=$conn->prepare($sql);
        $consulta->execute();
        return $consulta;
        $conn=null;
    }
}
?>