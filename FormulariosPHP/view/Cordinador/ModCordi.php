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
            require_once("../../models/claseCordi.php");
            $id=$_REQUEST['id'];
            $cordi=new Cordinador();
            $datos=$cordi->consultarCordiXId($id);
            while ($data=$datos->fetch(PDO::FETCH_ASSOC)){

            print("<form action='../../controller/controladorCor.php' method='post'>
                <input type='hidden' value='".$data["Id"]."' name='ActIdCor' />
                Nombre:<input type='text' value='".$data["Nombre"]."' name='ActNomCor' id='ActNomCor'><br>
                Apellido:<input type='text' value='".$data["Apellido"]."' name='ActApellCor' id='ActApellCor'><br>
                Correo:<input type='text' value='".$data["Correo"]."' name='ActCorCor' id='ActCorCor'><br>
                Telefono:<input type='text' value='".$data["Telefono"]."' name='ActTelCor' id='ActTelCor'><br>
        
                <input type='submit' name='btnActCor'>
            </form>
            <a href='../viewCordinador.php'><button>Regresar</button></a>");
            }
        ?>
    </div>
</body>
</html>