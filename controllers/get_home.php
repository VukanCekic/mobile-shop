<?php
include("./model/products_db.php");
$featured_products = get_featured_products();
$products_coats = get_products_by_category_and_limit("coats");

include("view/home.php");