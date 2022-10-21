<?php

    include("conexion.php");
    $con=conectar();
    var_dump($_FILES);
    print_r($_FILES);
    if ($_FILES['file']['error'] == 4)
    {
        $id_celular=$_POST['id_celular'];
            
        $nombre=$_POST['nombre'];
        $marca = $_POST['marca'];
        $precio = $_POST['precio'];
        $sql = "UPDATE celular_info SET nombre = '$nombre', marca = '$marca', precio = '$precio' WHERE id_celular='$id_celular'";
        $query = mysqli_query($con, $sql);
        if ($query) {
            Header("Location: /celulares/index.php");
        }
    }else{
        $fileName = basename($_FILES["file"]["name"]); //Get File Name 
        $fileType = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION); //Get File Extension

        $fileType = strtolower($fileType); //convert to lowercase
        $uploadFile = $fileName . rand(1000, 10000) . "." . $fileType; //Set File name with Random Number
        //Check File Extension
        if ($fileType != 'jpg' && $fileType != 'jpeg' && $fileType != 'png' && $fileType != 'gif') {
            echo "Upload Failed.Invalid File!!!";
        }
        //Upload Data
        else {
            $id_celular=$_POST['id_celular'];

            $imgData = addslashes(file_get_contents($_FILES['file']['tmp_name']));
            //echo $imgData;
            $nombre = $_POST['nombre'];
            $marca = $_POST['marca'];
            $precio = $_POST['precio'];
            $sql = "UPDATE celular_info SET imagen = '{$imgData}', nombre = '$nombre', marca = '$marca', precio = '$precio' WHERE id_celular='$id_celular'";
            $query = mysqli_query($con, $sql);
            if ($query) {
                Header("Location: /celulares/index.php");
            }
        }
    }
    

    
    
?>