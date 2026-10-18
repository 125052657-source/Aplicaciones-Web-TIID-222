<?php
 
include("Conexion.php");
$con = conectar();
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $apema = $_POST['apema'];
    $apepa = $_POST['apepa'];
    $edad = $_POST['edad'];
 
    $sql = "UPDATE alumnos
            SET nombre = ?, apema = ?, apepa = ?, edad = ?
            WHERE matricula = ?";
 
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "sssis", $nombre, $apema, $apepa, $edad, $matricula);
 
    if (mysqli_stmt_execute($stmt)) {
        header("Location: Alumnos.php");
        exit();
    } else {
        echo "Error al actualizar el alumno: " . mysqli_error($con);
        exit();
    }
}
 
$matricula = $_GET['id'] ?? '';
 
$sql = "SELECT * FROM alumnos WHERE matricula = ?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "s", $matricula);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_array($resultado);
 
if (!$row) {
    header("Location: Alumnos.php");
    exit();
}
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
</head>
<body>
 
    <h1>Editar Alumno</h1>
 
    <form action="Editar.php" method="POST">
 
        <label>Matricula</label>
        <input type="text"
            name="matricula"
            value="<?php echo htmlspecialchars($row['matricula']); ?>"
            readonly>
 
        <label>Nombre</label>
        <input type="text"
            name="nombre"
            value="<?php echo htmlspecialchars($row['nombre']); ?>"
            placeholder="Nombre">
 
        <label>Apellido Materno</label>
        <input type="text"
            name="apema"
            value="<?php echo htmlspecialchars($row['apema']); ?>"
            placeholder="Apellido Mat.">
 
        <label>Apellido Paterno</label>
        <input type="text"
            name="apepa"
            value="<?php echo htmlspecialchars($row['apepa']); ?>"
            placeholder="Apellido Pat.">
 
        <label>Edad</label>
        <input type="text"
            name="edad"
            value="<?php echo htmlspecialchars($row['edad']); ?>"
            placeholder="Edad">
 
        <button type="submit">Actualizar</button>
        <a href="Alumnos.php">Cancelar</a>
 
    </form>
 
</body>
</html>