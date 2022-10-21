<?php
    session_start();
    $user = $_POST['user'];
    $password = $_POST['password'];

    require 'database.php';

    if (!isset($_SESSION['USER']) || empty($_SESSION['USER'])){ 
        $query = 'SELECT id_admin, usuario, contrasenia FROM admin_user WHERE usuario = "$user" AND contrasenia = "$password"';
        $result = mysqli_query($connection, $query);
        if($result) {
            $_SESSION['USER'] = $user;
            header('Location: /Muebles-copia2/index.php');
        } else {
            $_SESSION['ERROR_MSG'] = "usuario o contrasenia invalidos";
            header('Location: /Muebles-copia2/index.php');
        }
    } else { 
        header('Location: /Muebles-copia2/index.php');
    }
?>