<?php
include("conexion.php");
$con = conectar();
$sql = "SELECT * FROM libros";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="pagina">

    <header class="encabezado" style="display: flex; flex-direction: column; background-color: rgb(116, 162, 189); padding: 10px;">
        <h2>EXAMEN 1ER PARCIAL - APLICACIONES WEB</h2>
        <h2>Ingeniería en Tecnologías de la Información e Innovación Digital</h2>
        <h2>Nombre: ________ &nbsp; Grupo: ________ &nbsp; Calificación: ________</h2>
    </header>

    <section class="contenedor formulario">
        <h4>FORMULARIO</h4>
        <form action="Insertar.php" method="post">
            <label>ID
                <input type="text" name="id" required>
            </label>
            <label>Título
                <input type="text" name="titulo" required>
            </label>
            <label>Autor
                <input type="text" name="autor" required>
            </label>
            <label>Páginas
                <input type="number" name="paginas" required>
            </label>
            <label>Precio
                <input type="number" step="0.01" name="precio" required>
            </label>
            <button type="submit">Guardar</button>
        </form>
    </section>

    <section class="contenedor tabla">
        <h4>TABLA DE LIBROS</h4>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Pág.</th>
                    <th>Precio</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila = mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['titulo']; ?></td>
                    <td><?php echo $fila['autor']; ?></td>
                    <td><?php echo $fila['paginas']; ?></td>
                    <td>$ <?php echo $fila['precio']; ?></td>
                    <td><a href="delete.php?id=<?php echo $fila['id']; ?>">Eliminar</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>

    <section class="contenedor r1">
        <p>R1 - README</p>
        <a href="https://github.com/125052657-source/Aplicaciones-Web-TIID-222/blob/main/README.md">URL</a>
    </section>

    <section class="contenedor r2">
        <p>R2 - CV</p>
        <a href="https://github.com/125052657-source/Aplicaciones-Web-TIID-222/blob/main/p2cv.html">URL</a>
    </section>

    <section class="contenedor r3">
        <p>R3 - HTML</p>
        <a href="https://github.com/125052657-source/Aplicaciones-Web-TIID-222/blob/main/practica.html">URL</a>
    </section>

    <footer class="contenedor perfil">
        <img src="" alt="">
        <div class="texto">
            <h4>--------- TU NOMBRE ---------</h4>
            <p>Escribe aquí un párrafo sobre cómo ha sido tu experiencia en estos 4 cuatrimestres en la UPQ.</p>
        </div>
        <img src="" alt="">
    </footer>

</div>
</body>
</html>