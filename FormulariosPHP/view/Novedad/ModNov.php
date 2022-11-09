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
            require_once("../../models/classNovedad.php");
            $id=$_REQUEST['id'];
            $novedad=new Novedad();
            $datos=$novedad->consultarNovedadXId($id);
            while ($data=$datos->fetch(PDO::FETCH_ASSOC)){

            print("<form action='../../controller/controladorNov.php' method='post'>
                <input type='hidden' value='".$data["Id"]."' name='ActIdNov' />
                Tipo:<input type='text' value='".$data["Tipo"]."' name='ActNomNov' id='ActNomNov'><br>
                Fecha:<input type='text' value='".$data["Fecha"]."' name='ActApellNov' id='ActApellNov'><br>
                Descripcion:<input type='text' value='".$data["Descripcion"]."' name='ActCorNov' id='ActCorNov'><br>
                <input type='submit' name='btnActNov'>
            </form>
            <a href='../viewNovedad.php'><button>Regresar</button></a>");
            }
        ?>
    </div>
</body>
</html>