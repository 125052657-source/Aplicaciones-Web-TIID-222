<?php
function conectar() {
    $host = "localhost";
    $user = "root";
    $pass = "";

    $db = "AW_Libros";

    $con = mysqli_connect($host, $user, $pass);

    mysqli_select_db($con, $db);
    mysqli_set_charset($con, "utf8mb4");

    return $con;
}
?>