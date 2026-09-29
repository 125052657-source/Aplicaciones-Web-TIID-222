<?php
function conectar() {
    #Informacion del servidor 
    $host="localhost";
    $user="root";
    $pass="";

    #base de datos
    $db="AW_Crud";


    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$db);

    return $con;
}


?>