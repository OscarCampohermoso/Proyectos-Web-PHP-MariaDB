<?php
    include('database.php');
    if(isset($_POST['id_order'])){
        $id = $_POST['id_order'];
        $query = "DELETE FROM orders WHERE id_order= $id";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die('Query Failed');
        }
        echo "Task Deleted Succesfully";
    }
    
?>
