<?php

    include("conexion.php");

    $id_celular=$_GET['id'];

    $sql="DELETE FROM celular  WHERE id_celular='$id_celular'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /ex/abm.php");
    }
?>
