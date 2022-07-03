<?php
if (isset($_POST['place_order'])) {
    include("./model/orders_db.php");


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    
    $order_cost = $_SESSION['total'];
    $order_status = "not paid";
    $user_id = $_SESSION['user_id'];
    $order_date = date('Y-m-d H:i:s');

    if(!$name || !$email || !$phone || !$city || !$address || !$phone){
        $checkout_error = "Missing requried params when submiting order";
        include("view/checkout.php");
        return; 
    }

    $created_order_id = create_order($order_cost, $order_status, $user_id, $phone, $city, $address, $order_date);


    include("view/checkout.php");
    return;
}

include("view/checkout.php");

// $error = "No item added for checking out!";
// include("view/error.php");
