<?php

#Hace la conexion 
include(Conexion.php);


$con = conectar();

    #Recibir la informacion del formulario
    $matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $apema = $_POST['apema'];
    $apepa = $_POST['apepa'];
    $edad = $_POST['edad'];

    #Consultamos la consulta para insertar la informacion 
    $sql = "INSERT INTO alumnos 
    (matricula, nombre, apema, apepa, edad)
    VALUES 
    ('$matricula','$nombre','$apema','$apepa','$edad')";

    #Ejecutamos la consola
    $query = mysqli_query($con, $sql);

    #Comprobamos si se inserto o no el alumno
    if($query){
        header("Location: alumnos.php");
        }else{
        echo"Error al insertar al alumno";
    }





?>