<?php
$id=$_POST['id'];


    require("conexion.php");
    $saber="DELETE FROM categoria WHERE id='$id'";
    $saberBD=$conexion->query($saber);
   if($saberBD){
    ?> 
    <script> window.alert("La categoria fue eliminada")</script>
    <?php
   }else{
    ?> 
    <script> window.alert("La categoria no fue eliminada")</script>
    <?php
   }


?>