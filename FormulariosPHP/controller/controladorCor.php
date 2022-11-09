<?php
include_once("../models/claseCordi.php");
if(!isset($_REQUEST["Id"])){
    $_REQUEST["Id"]=0;
}
if(!isset($_REQUEST["cordi"])){

        //Agregar
        if(isset($_REQUEST["btnCordi"])){
            header("location:../view/Cordinador/AgrCordi.php");
            $alumno = new Cordinador();
        }
        elseif(isset($_REQUEST["btnNewCordi"]) &&($_REQUEST["btnNewCordi"]!= null)){
            $nombre=$_REQUEST["newNameCordi"];
            $apellido=$_REQUEST["newApellCordi"];
            $correo=$_REQUEST["newCorrCordi"];
            $telefono=$_REQUEST["newTelCordi"];
            $cordi = new Cordinador();
            $cordi->agreCordi($nombre , $apellido , $correo, $telefono);
        }

        //Eliminar
        elseif(($_REQUEST['Id']!=null) && ($_REQUEST["value"]=="Borra")){
            $id=$_REQUEST['Id'];
            $cordi = new Cordinador();
            $cordi->borrarCordi($id);
        }


        
        //Modificar
        elseif(($_REQUEST['Id']!=null) && ($_REQUEST["value"]=="Actualiza")){
            header("location:../view/Cordinador/ModCordi.php?id=".$_REQUEST['Id']);
        }
        elseif(isset($_REQUEST["btnActCor"]) && ($_REQUEST["btnActCor"]!=null)){
            $id=$_REQUEST["ActIdCor"];
            $nombre=$_REQUEST["ActNomCor"];
            $apellido=$_REQUEST["ActApellCor"];
            $correo=$_REQUEST["ActCorCor"];
            $telefono=$_REQUEST["ActTelCor"];
            $cordinador = new Cordinador();
            $cordinador->actualizarCordi($nombre , $apellido , $correo,$telefono,$id);
        }
}elseif($_REQUEST["cordi"]==1){
header("location:../view/viewCordinador.php");
}
?>