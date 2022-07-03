<?php

if($id && is_numeric($id)){
    include("./model/products_db.php");
    $product = get_single_product($id);
    
    if($product){
        $related_products = get_products_by_category_and_limit($product["product_category"]);
        include("view/single-product.php");
        return; 
    }

    $error = "No product with given ID found";
    include("view/error.php");
    return; 
}

$error = "Malformed or missing ID for product";
include("view/error.php");