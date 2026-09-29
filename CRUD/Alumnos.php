<?php
    include("Conexion.php");

    #Mandamos a llamar para ejecutar la funcion
    $con = conectar();

    #Dame todo lo que tengas en la tabla de alumnos 
    $sql = "SELECT * FROM alumnos";

    #
    $query = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<body>

    <h4>TABLA DE ALUMNOS</h4>

    <table border="2">
        <th>Matricula</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Acciones</th>
        <th></th>
    </table>
    
</body>
</html>
