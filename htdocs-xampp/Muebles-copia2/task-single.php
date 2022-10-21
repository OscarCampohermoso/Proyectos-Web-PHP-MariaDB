<?php
    include('database.php');
    $id_order = $_POST['id_order'];
    $query = "SELECT * FROM orders WHERE id_order= $id_order";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query Failed');
    }

    $json = array();
    while ($row = mysqli_fetch_array($result)){
        $json[] = array(
            'order_number' => $row['order_number'],
            'furniture_description' => $row['furniture_description'],
            'shipping_price' => $row['shipping_price'],
            'shipping_cost' => $row['shipping_cost'],	
            'admin_id_admin' => $row['admin_id_admin'],	
            'id_order' => $row['id_order']
        );
    }

    $jsonstring = json_encode($json[0]);
    echo $jsonstring;

?>
