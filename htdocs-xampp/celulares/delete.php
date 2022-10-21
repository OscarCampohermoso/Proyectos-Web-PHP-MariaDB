<?php

    include("conexion.php");
    $con=conectar();

    $id_celular=$_GET['id'];

    $sql="DELETE FROM celular_info  WHERE id_celular='$id_celular'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /celulares/index.php");
    }
?>
