<?php
include_once("../models/classAlumno.php");
if(!isset($_REQUEST["Id"])){
    $_REQUEST["Id"]=0;
}
if(!isset($_REQUEST["alumno"])){
    //Agregar
    if(isset($_REQUEST["btnAlumno"])){
        header("location:../view/alumno/addAlumno.php");
    }
    elseif(isset($_REQUEST["btnNewAlumno"]) &&($_REQUEST["btnNewAlumno"]!= null)){
        $nombre=$_REQUEST["newNameAlumno"];
        $apellido=$_REQUEST["newApellAlumno"];
        $correo=$_REQUEST["newCorrAlumno"];
        $telefono=$_REQUEST["newTelAlumno"];
        $programa=$_REQUEST["newProAlumno"];
        $alumno = new Alumno();
        $alumno->agreAlumno($nombre , $apellido , $correo, $telefono, $programa);
    }

    //Eliminar
    elseif((($_REQUEST['Id']!=null)) && ($_REQUEST["value"]=="Borra")){
        $id=$_REQUEST['Id'];
        $alumno = new Alumno();
        $alumno->borrarAlumno($id);
    }

    //Modificar
    elseif(($_REQUEST['Id']!=null) && ($_REQUEST["value"]=="Actualiza")){
        header("location:../view/Alumno/ModAlumno.php?id=".$_REQUEST['Id']);
    }
    elseif(isset($_REQUEST["btnActAlumno"]) && ($_REQUEST["btnActAlumno"]!=null)){
        $id=$_REQUEST["ActIdALu"];
        $nombre=$_REQUEST["ActNomAlu"];
        $apellido=$_REQUEST["ActApellAlu"];
        $correo=$_REQUEST["ActCorAlu"];
        $telefono=$_REQUEST["ActTelAlu"];
        $programa=$_REQUEST["ActProAlu"];
        $alumno = new Alumno();
        $alumno->actualizarAlumno($nombre , $apellido , $correo,$telefono,$programa,$id);
    }
}elseif($_REQUEST["alumno"]==1){
    header("location:../view/viewAlumno.php");
}

?>