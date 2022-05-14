<?php

if($id && is_numeric($id)){
    include("./model/products_db.php");
    $product = get_single_product($id);
    
    if($product){
        include("view/single-product.php");
        return; 
    }

    $error = "No product with given ID found";
    include("view/error.php");
    return; 
}

$error = "Malformed or missing ID for product";
include("view/error.php");