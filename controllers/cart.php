<?php
include("utils/cart.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['add_cart_item'])) {
    if (isset($_SESSION['cart'])) {
        $products_array_ids = array_column($_SESSION['cart'], "product_id");

        if (!in_array($_POST['product_id'], $products_array_ids)) {

            $product_id = $_POST['product_id'];

            $product_array = array(
                'product_id' => $_POST['product_id'],
                'product_name' =>  $_POST['product_name'],
                'product_price' => $_POST['product_price'],
                'product_image' => $_POST['product_image'],
                'product_quantity' => $_POST['product_quantity'],
                'product_category' => $_POST['product_category'],

            );
            $_SESSION['cart'][$product_id] = $product_array;
            
            calculateTotalCart();
            include("view/cart.php");
            return;
        }

        $item_exists = "Product already exists in cart";
        include("view/cart.php");
        return;
    }

    create_cart_session();
    calculateTotalCart();
    
    include("view/cart.php");
    return;
}

if (isset($_POST['delete_cart_item'])) {

    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);


    calculateTotalCart();
    include("view/cart.php");
    return;
  
}

if (isset($_POST['edit_cart_item_quantity'])) {

   $product_id = $_POST['product_id'];
   $product_quantity = $_POST['product_quantity'];

   $product= $_SESSION['cart'][$product_id];
   $product['product_quantity'] = $product_quantity;

   $_SESSION['cart'][$product_id] = $product;

   calculateTotalCart();
   include("view/cart.php");
   return;
  
}

function calculateTotalCart(){

    $total_price = 0;
    $total_quantity = 0;

   foreach($_SESSION['cart'] as $key => $_){

       $product =  $_SESSION['cart'][$key];

       $price =  $product['product_price'];
       $quantity = $product['product_quantity'];

       $total_price =  $total_price + ($price * $quantity);
       $total_quantity = $total_quantity + $quantity;
       

   }

   $_SESSION['total'] = $total_price;
   $_SESSION['quantity'] = $total_quantity;

}

header('location:/');
 


