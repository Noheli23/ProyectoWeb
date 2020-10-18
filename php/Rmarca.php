<?php

$nombre=$_POST ['nombre'];
$descri=$_POST ['descri'];

require("conexion.php");
$saber="SELECT nombre FROM MARCA WHERE nombre='$nombre'";

$saberBD=$conexion->query($saber);


if(($saberBD->num_rows)>0){
    
    ?> 
    <script> window.alert("La marca ya esta registrada")</script>
    <?php
}else{
    $conex="INSERT INTO marca (nombre,descripcion) VALUES('$nombre', '$descri')";
    $resul=$conexion->query($conex);
?> 
<script> window.alert("Marca registrada")</script>
<?php
}
?>