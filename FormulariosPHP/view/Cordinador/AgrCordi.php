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
        <h1 class='titulo'>Formulario De agregar</h1>
        <form action='../../controller/controladorCor.php' method='post'>
            Nombre:<input type="text" name="newNameCordi" id="newNameCordi"><br>
            Apellido:<input type="text" name="newApellCordi" id="newApellCordi"><br>
            Correo:<input type="text" name="newCorrCordi" id="newCorrCordi"><br>
            Telefono:<input type="text" name="newTelCordi" id="newTelCordi"><br>
            Programa:<input type="text" name="newProCordi" id="newProCordi"><br>
            <input type="submit" name="btnNewCordi">
        </form>
        <a href='../viewCordinador.php'><button>Regresar</button></a>
    </div>
</body>
</html>