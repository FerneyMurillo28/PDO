<?php
include_once("../models/classNovedad.php");
if(!isset($_REQUEST["Id"])){
    $_REQUEST["Id"]=0;
}
if(!isset($_REQUEST["nove"])){

    //Agregar
    if(isset($_REQUEST["btnNov"])){
        header("location:../view/Novedad/AgrNov.php");
        $novedad = new Novedad();
    }
    elseif(isset($_REQUEST["btnNewNov"]) &&($_REQUEST["btnNewNov"]!= null)){
        $tipo=$_REQUEST["newTipoNov"];
        $fecha=$_REQUEST["newFechNov"];
        $descripcion=$_REQUEST["newDescNov"];
        $novedad = new Novedad();
        $novedad->agreNov($tipo , $fecha , $descripcion);
    }

    //Eliminar
    elseif((($_REQUEST['Id']!=null)) && ($_REQUEST["value"]=="Borra")){
        $id=$_REQUEST['Id'];
        $novedad = new Novedad();
        $novedad->borrarNov($id);
    }

    //Modificar
    elseif(($_REQUEST['Id']!=null) && ($_REQUEST["value"]=="Actualiza")){
        header("location:../view/Novedad/ModNov.php?id=".$_REQUEST['Id']);
    }
    elseif(isset($_REQUEST["btnActNov"]) && ($_REQUEST["btnActNov"]!=null)){
        $id=$_REQUEST["ActIdNov"];
        $tipo=$_REQUEST["ActNomNov"];
        $fecha=$_REQUEST["ActApellNov"];
        $descripcion=$_REQUEST["ActCorNov"];
        $novedad = new Novedad();
        $novedad->actualizarNovedad($tipo,$fecha,$fecha,$id);
    }
}elseif($_REQUEST["nove"]==1){
    header("location:../view/viewNovedad.php");
}
?>