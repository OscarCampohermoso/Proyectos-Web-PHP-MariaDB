<?php
    session_start();
    $user = $_POST['user'];
    $password = $_POST['password'];

    require 'database.php';

    if (!isset($_SESSION['USER']) || empty($_SESSION['USER'])){ 
        $records = $conn->prepare('SELECT id_usuario, usuario, contrasenia FROM usuario_admin WHERE usuario = :user and contrasenia = :password');
        $records->bindParam(':user', $POST['user']);
        $records->bindParam(':password', $POST['password']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        if(isset($records)) {
            $_SESSION['USER'] = $user;
            header('Location: /farmacia/index.php');
        } else {
            $_SESSION['ERROR_MSG'] = "usuario o contrasenia invalidos";
            header('Location: /farmacia/view_login.php');
        }
    } else { 
        header('Location: /farmacia/index.php');
    }
?>