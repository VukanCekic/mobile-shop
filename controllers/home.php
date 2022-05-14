<?php
include("./model/products_db.php");

$featured_products = get_featured_products();
$products_clothes = get_products_by_category_and_limit("clothes",4);
include("view/home.php");