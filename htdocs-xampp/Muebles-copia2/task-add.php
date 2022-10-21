<?php
    include('database.php');
    $query = "SELECT MAX(id_order) FROM orders";
    $result = mysqli_query($connection, $query);
    $array = $result->fetch_array();
    $function = $array['MAX(id_order)'] + 1;

    if(isset($_POST['order_number'])){
        $order_number = $_POST['order_number'];
        $furniture_description = $_POST['furniture_description'];
        $shipping_price = $_POST['shipping_price'];
        $shipping_cost = $_POST['shipping_cost'];
        $admin_id_admin = $_POST['admin_id_admin'];
        $query = "INSERT INTO  orders (id_order, order_number, furniture_description,	shipping_price,	shipping_cost,	admin_id_admin) VALUES ('$function','$order_number', '$furniture_description',	'$shipping_price',	'$shipping_cost',	'$admin_id_admin')";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die('Query Failed. ');
        }
        echo 'Order Added Successfullly';
    }
?>