<?php

include("Conexion.php");

$con = conectar();

#Recibimos la matricula enviada por la URL
$matricula = $_GET['id'];

#
$sql = "DELETE FROM alumnos WHERE matricula='$matricula'";

$query = mysqli_query($con, $sql);

#
if ($query) {
    header("Location: Alumnos.php");
    exit();
} else {
    echo "Error al eliminar el alumno: " . mysqli_error($con);
}

?>