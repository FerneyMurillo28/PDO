<?php
    require_once("../models/claseCordi.php");
    $cordinador=new Cordinador();
    $datos=$cordinador->consulCordi();
    print("
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css'>
</head>
<body>
    <form action='../controller/controladorCor.php'>
        <input type='submit' id='btnCordi' name='btnCordi' value='Agregar'>
    </form>
    <table id='table_id' class='display' style='width:100%' method='post'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th></th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>");
while($data=$datos->fetch(PDO::FETCH_ASSOC)){
    print('<tr>
        <td>'.$data['Id'].'</td>    
        <td>'.$data['Nombre'].'</td>
        <td>'.$data['Apellido'].'</td>
        <td>'.$data['Correo'].'</td>
        <td>'.$data['Telefono'].'</td>
        <td>
            <input type="button" name="btnBorrarCordi" value="Borrar" onclick="borrar('.$data['Id'].')")/>
        </td>
        <td>
            <input type="button" name="btnActCordi" value="Actualizar" onclick="validar('.$data['Id'].')")/>
        </td>
        </tr>');
}
print("       </tbody>
    </table>
    <a href='./Ingreso.php'><button>Regresar</button></a>
</body>
    <script>
        function borrar(Id){
            var dato=confirm('Seguro que desea eliminar el registro '+Id+'?');
            if(!dato){
                window.location.href='../view/viewCordinador.php';
            }else{
                window.location.href='../controller/controladorCor.php?Id='+Id+'&value=Borra';
            }
        }
    </script>
    <script>
        function validar(Id){
            var dato=confirm('Seguro que desea actualizar el registro '+Id+'?');
            if(!dato){
                window.location.href='../view/viewCordinador.php';
            }else{
                window.location.href='../controller/controladorCor.php?Id='+Id+'&value=Actualiza';
            }
        }
    </script>
</html>
<script src='https://code.jquery.com/jquery-3.5.1.js'></script>
<script type='text/javascript' charset='utf8' src='https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js'></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable(
        );
    });
</script>
");
?>