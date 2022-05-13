<?php
include("./model/products_db.php");

$featured_products = get_featured_products();
include("view/home.php");
?>