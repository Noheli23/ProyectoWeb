<?php

$conexion=new mysqli("localhost","root","","empresa");
if(mysqli_connect_errno($conexion)){
    echo "Falló conectar la base de datos" .mysqli_connect_error();
}

?>