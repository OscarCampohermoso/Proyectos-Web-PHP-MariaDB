<?php
    session_start();
    $user = $_POST['user'];
    $password = $_POST['password'];

    require 'conexion.php';

    if (!isset($_SESSION['USER']) || empty($_SESSION['USER'])){ 
        $query = 'SELECT id_user, usuario, contrasenia FROM admin_user WHERE usuario = "$user" AND contrasenia = "$password"';
        $result = mysqli_query($con, $query);
        if($result) {
            $_SESSION['USER'] = $user;
            header('Location: /ex/index.php');
        } else {
            $_SESSION['ERROR_MSG'] = "usuario o contrasenia invalidos";
            header('Location: /ex/index.php');
        }
    } else { 
        header('Location: /ex/index.php');
    }
?>