<?php
    include('database.php');

    $query =  "SELECT * FROM orders";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query Failed'.mysqli_error($connection));
    } 

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'order_number' => $row['order_number'],
            'furniture_description' => $row['furniture_description'],
            'shipping_price' => $row['shipping_price'],
            'shipping_cost' => $row['shipping_cost'],	
            'admin_id_admin' => $row['admin_id_admin'],	
            'id_order' => $row['id_order']
        );
    }
    $jsonstring = json_encode($json);
    echo "$jsonstring";
?>