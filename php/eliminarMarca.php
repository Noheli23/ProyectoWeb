<?php
$id=$_POST['id'];


    require("conexion.php");
    $saber="DELETE FROM marca WHERE id='$id'";
    $saberBD=$conexion->query($saber);
   if($saberBD){
    ?> 
    <script> window.alert("La marca fue eliminada")</script>
    <?php
   }else{
    ?> 
    <script> window.alert("La marca no fue eliminada")</script>
    <?php
   }


?>