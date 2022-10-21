<?php
    include("conexion.php");
    $query = "SELECT MAX(id_user) FROM admin_user";
    $result = mysqli_query($con, $query);
    $array = $result->fetch_array();
    //var_dump($array);
    $function = $array['MAX(id_user)'];
    // var_dump($_FILES);
    if (isset($_FILES["file"])) {
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
            $imgData = addslashes(file_get_contents($_FILES['file']['tmp_name']));
            $nombre = $_POST['nombre'];
            $marca = $_POST['marca'];
            $precio = $_POST['precio'];
            $sql = "INSERT INTO celular (image, nombre, marca, precio, admin_user_id_user) VALUES('{$imgData}','$nombre','$marca','$precio', '$function')";
            $query = mysqli_query($con, $sql);
            if ($query) {
                Header("Location: /ex/abm.php");
            }
        }
    }
?>

