<?php
class Alumno
{
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;
    public $programa;

    public function agreAlumno($Nombre , $Apellido , $Correo, $Telefono, $Programa){
        require_once("../dao/conectar.php");
        $conn=connect();
        $sql="insert into alumno (Nombre,Apellido,Correo,Telefono,Programa) values(?,?,?,?,?)";
        $consulta=$conn->prepare($sql);
        $consulta->execute((Array($Nombre,$Apellido,$Correo,$Telefono,$Programa)));
        $conn=null;
        header("location:../view/viewAlumno.php");
    }

    public function borrarAlumno($Id) 
    {
        require_once("../dao/conectar.php");
        $conn=connect();
        $sql="delete from alumno where Id=?";
        $consulta=$conn->prepare($sql);
        $consulta->execute((Array($Id)));
        $conn=null;
        header("location:../view/viewAlumno.php");
    }

    
    public function consulAlumno(){
        require_once("../dao/conectar.php");
        $conn=connect();
        $sql="select * from alumno";
        $consulta=$conn->prepare($sql);
        $consulta->execute();
        return $consulta;
        $conn=null;
    }

    public function consultarAlumnoXId($id){
        require_once("../../dao/conectar.php");
        $conn=connect();
        $sql="select * from alumno where Id=?";
        $consulta=$conn->prepare($sql);
        $consulta->execute((Array($id)));
        return $consulta;
        $conn=null;
    }
    public function actualizarAlumno($nombre , $apellido , $correo, $telefono, $programa,$id)
    {
        require_once("../dao/conectar.php");
        $conn=connect();
        $sql="UPDATE alumno SET Nombre=?, Apellido=?,Correo=?,Telefono=?,Programa=? WHERE Id=?";
        $consulta=$conn->prepare($sql);
        $consulta->execute((Array($nombre , $apellido , $correo, $telefono, $programa,$id)));
        $conn=null;
        header("location:../view/viewAlumno.php");
    }
}
?>