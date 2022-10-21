<?php
    include('database.php');

   $id_order = $_POST['id_order'];
   $order_number = $_POST['order_number'];
   $furniture_description = $_POST['furniture_description'];
   $shipping_price = $_POST['shipping_price'];
   $shipping_cost = $_POST['shipping_cost'];
   $admin_id_admin = $_POST['admin_id_admin'];

   $query = "UPDATE orders SET order_number = '$order_number', furniture_description = '$furniture_description',	shipping_price = '$shipping_price',	shipping_cost = '$shipping_cost',	admin_id_admin = '$admin_id_admin' WHERE
     id_order = '$id_order'";
   echo $id_order . ' order?';
   $result = mysqli_query($connection, $query);
     if(!$result){
        die('Query Faild');
     }

   echo "Update Task Succesfully";
?>