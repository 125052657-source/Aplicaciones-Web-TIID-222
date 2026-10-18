<?php
include("conexion.php");
$con = conectar();
 
$id      = $_POST['id'];
$titulo  = $_POST['titulo'];
$autor   = $_POST['autor'];
$paginas = $_POST['paginas'];
$precio  = $_POST['precio'];
 
$sql = "INSERT INTO libros (id, titulo, autor, paginas, precio)
        VALUES (?, ?, ?, ?, ?)";
 
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "issid", $id, $titulo, $autor, $paginas, $precio);
 
if (mysqli_stmt_execute($stmt)) {
    header("Location: Libros.php");
    exit;
} else {
    echo "Error al insertar el libro: " . mysqli_error($con);
}
?>