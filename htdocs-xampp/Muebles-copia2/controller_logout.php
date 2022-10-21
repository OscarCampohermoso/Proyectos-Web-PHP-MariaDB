<?php
    session_start();
    session_destroy();
    header('Location: /Muebles-copia2/index.php');
?>