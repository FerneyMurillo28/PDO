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
        <form action='../../controller/controlador.php' method='post'>
            Nombre:<input type="text" name="newNameAlumno" id="newNameAlumno"><br>
            Apellido:<input type="text" name="newApellAlumno" id="newApellAlumno"><br>
            Correo:<input type="text" name="newCorrAlumno" id="newCorrAlumno"><br>
            Telefono:<input type="text" name="newTelAlumno" id="newTelAlumno"><br>
            Programa:<input type="text" name="newProAlumno" id="newProAlumno"><br>
            <input type="submit" name="btnNewAlumno">
        </form>
        <a href='../viewAlumno.php'><button>Regresar</button></a>
    </div>
</body>
</html>


    
