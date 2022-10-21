<?php
    session_start();
    session_destroy();
    header('Location: /ex/index.php');
?>