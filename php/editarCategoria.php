<?php
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descri = $_POST['descri'];

if (!$nombre == "" && !$descri == "") {
    require("conexion.php");
    $saber="SELECT nombre FROM categoria WHERE nombre='$nombre'";
    $saberBD=$conexion->query($saber);
    if(($saberBD->num_rows)>0){
     echo 3;
    }else{
        $query = "UPDATE categoria SET nombre='$nombre', descripcion='$descri' WHERE id='$id'";
        $resultado = $conexion->query($query);
        if ($resultado) {
            echo 1;
        }else{
            echo 2;
        }
    }
}
?>