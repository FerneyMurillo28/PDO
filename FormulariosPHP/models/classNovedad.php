<?php
    class Novedad{
        public $tipo;

        public function agreNov($Tipo,$Fecha,$Descripcion){
            require_once("../dao/conectar.php");
            $conn=connect();
            $sql="insert into novedades (Tipo,Fecha,Descripcion) values(?,?,?)";
            $consulta=$conn->prepare($sql);
            $consulta->execute((Array($Tipo,$Fecha,$Descripcion)));
            $conn=null;
            header("location:../view/viewNovedad.php");
        }
    
        public function borrarNov($Id) 
        {
            require_once("../dao/conectar.php");
            $conn=connect();
            $sql="delete from novedades where Id=?";
            $consulta=$conn->prepare($sql);
            $consulta->execute((Array($Id)));
            $conn=null;
            header("location:../view/viewNovedad.php");
        }
    
        
        public function consulNove(){
            require_once("../dao/conectar.php");
            $conn=connect();
            $sql="select * from novedades";
            $consulta=$conn->prepare($sql);
            $consulta->execute();
            return $consulta;
            $conn=null;
        }

        public function consultarNovedadXId($id){
            require_once("../../dao/conectar.php");
            $conn=connect();
            $sql="select * from novedades where Id=?";
            $consulta=$conn->prepare($sql);
            $consulta->execute((Array($id)));
            return $consulta;
            $conn=null;
        }
        public function actualizarNovedad($tipo , $fecha , $descripcion,$id)
        {
            require_once("../dao/conectar.php");
            $conn=connect();
            $sql="UPDATE novedades SET Tipo=?, Fecha=?,Descripcion=? WHERE Id=?";
            $consulta=$conn->prepare($sql);
            $consulta->execute((Array($tipo , $fecha , $descripcion,$id)));
            $conn=null;
            header("location:../view/viewNovedad.php");
        }
    }
    ?>