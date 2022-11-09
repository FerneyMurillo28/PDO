<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1 class='titulo'>Formulario De Actualizacion</h1>
        <?php
            require_once("../../models/classAlumno.php");
            $id=$_REQUEST['id'];
            $alumno=new Alumno();
            $datos=$alumno->consultarAlumnoXId($id);
            while ($data=$datos->fetch(PDO::FETCH_ASSOC)){

            print("<form action='../../controller/controlador.php' method='post'>
                <input type='hidden' value='".$data["Id"]."' name='ActIdALu' />
                Nombre:<input type='text' value='".$data["Nombre"]."' name='ActNomAlu' id='ActNomAlu'><br>
                Apellido:<input type='text' value='".$data["Apellido"]."' name='ActApellAlu' id='ActApellAlu'><br>
                Correo:<input type='text' value='".$data["Correo"]."' name='ActCorAlu' id='ActCorAlu'><br>
                Telefono:<input type='text' value='".$data["Telefono"]."' name='ActTelAlu' id='ActTelAlu'><br>
                Programa:<input type='text' value='".$data["Programa"]."' name='ActProAlu' id='ActProAlu'><br>
                <input type='submit' name='btnActAlumno'>
            </form>
            <a href='../viewAlumno.php'><button>Regresar</button></a>");
            }
        ?>
    </div>
</body>
</html>