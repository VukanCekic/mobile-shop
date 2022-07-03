<?php
function create_order($order_cost, $order_status, $user_id, $phone, $city, $address, $order_date)
{
    include('connection.php');

    $query = ("INSERT INTO orders (order_cost,order_status,user_id,user_phone,user_city,user_address,order_date)
    VALUES (?,?,?,?,?,?,?); ");

    $statement = $conn->prepare($query);
    $statement->bindParam('isiisss', $order_cost, $order_status, $user_id, $phone, $city, $address, $order_date);

    $statement->execute();

    if (!$stmt_status) {
        $order_error = "Something went wrong with creating the order!";
        return $order_error;
    }

    $order_id = $conn->lastInsertId();
    
    $statement->closeCursor();
    return $order_id;

};

function create_order_item($order_id,$product_id,$product_name,$product_image,$product_price,$product_quantity,$user_id,$order_date)
{
    include('connection.php');

    $query = ("INSERT INTO orders (order_cost,order_status,user_id,user_phone,user_city,user_address,order_date)
    VALUES (?,?,?,?,?,?,?); ");

    $statement = $conn->prepare($query);
    $statement->bindParam('iissiiis',$order_id,$product_id,$product_name,$product_image,$product_price,$product_quantity,$user_id,$order_date);

    $statement->execute();

    if (!$stmt_status) {
        $order_error = "Something went wrong creating the order items!";
        return $order_error;
    }

    $order_id = $conn->lastInsertId();
    
    $statement->closeCursor();
    return $order_id;

}

