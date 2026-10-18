<?php
include("conexion.php");
$con = conectar();
 
$id = $_GET['id'];
 
$stmt = mysqli_prepare($con, "DELETE FROM libros WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
 
if (mysqli_stmt_execute($stmt)) {
    header("Location: Libros.php");
    exit;
} else {
    echo "Error al eliminar el libro: " . mysqli_error($con);
}
?>
 