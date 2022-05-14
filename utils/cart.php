<?php
function create_cart_session()
{

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];
    $product_category = $_POST['product_category'];

    $product_array = array(
        'product_id' => $product_id,
        'product_name' => $product_name,
        'product_price' => $product_price,
        'product_image' => $product_image,
        'product_quantity' => $product_quantity,
        'product_category' => $product_category
    );

    $_SESSION['cart'][$product_id] = $product_array;
    // [ id=>[] , id=>[], id=>[]  ]
}