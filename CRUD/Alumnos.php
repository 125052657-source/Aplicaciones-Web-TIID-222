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

    <h1>TABLA DE ALUMNOS</h1>

    <table border="2">
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            <?php
                while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><php echo $rom['matricula']?></td>        
                <td><php echo $rom['nombre']?></td>
                <td><php echo $rom['apema']?></td>
                <td><php echo $rom['apepa']?></td>
                <td><php echo $rom['edad']?></td>
            </tr>
            <?php
                }
            ?>

        </tbody>
    </table>

        <h1>Formulario</h1>

    <form action="Insertar.php" method="POST">



        <input type="text"
            class="form-control"
            name="matricula"
            placeholder="Matricula">

        <input type="text"
            class="form-control"
            name="nombre"
            placeholder="Nombre">

        <input type="text"
            class="form-control"
            name="apema"
            placeholder="Apellido Mat.">

        <input type="text"
            class="form-control"
            name="apepa"
            placeholder="Apellido Pat.">

        <input type="text"
            class="form-control"
            name="edad"
            placeholder="Edad">

        <button type="submit">Guardar</button>

    </form>
    
</body>

</html>
