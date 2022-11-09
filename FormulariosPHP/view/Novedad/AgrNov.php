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
        <form action='../../controller/controladorNov.php' method='post'>
            Tipo:<input type="text" name="newTipoNov" id="newTipoNav"><br>
            Fecha:<input type="text" name="newFechNov" id="newFechNov"><br>
            Descripcion:<input type="text" name="newDescNov" id="newDescNov"><br>
            <input type="submit" name="btnNewNov">
        </form>
        <a href='../viewNovedad.php'><button>Regresar</button></a>
    </div>
</body>
</html>