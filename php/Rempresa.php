<?php
$nombre=$_POST ['nombre'];
$qsomos=$_POST ['qsomos'];
$tele=$_POST ['tele'];
$direc=$_POST ['direc'];
$email=$_POST ['email'];
$face=$_POST ['face'];
$twi=$_POST ['twi'];
$insta=$_POST ['insta'];

if (!$nombre == "" && !$qsomos == ""&& !$tele == ""&& !$direc == ""&& !$email == ""&& !$face == ""&& !$twi == ""&& !$insta == "") {
    require("conexion.php");
    $saber="SELECT nombre FROM empresa WHERE nombre='$nombre'";
    $saberBD=$conexion->query($saber);
    if(($saberBD->num_rows)>0){
        echo 3;
    }else{
        $saber="INSERT INTO empresa (nombre,quienes_somos,telefono,direccion,email,facebook,twitter,instagram) 
        VALUES('$nombre', '$qsomos', '$tele', '$direc', '$email', '$face', '$twi', '$insta')";
        $saberBD=$conexion->query($saber);
        if ($saberBD) {
            echo 1;
        }else{
            echo 2;
        }
    }
}
?>