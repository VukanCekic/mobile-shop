<?php
include("./model/products_db.php");

if(isset($_GET['sort_order']) && $_GET['sort_order'] != ""){
 $sort_order = $_GET['sort_order'];
}else{
    $sort_order = "ASC";
}

if(isset($_GET['page_no']) && $_GET['page_no'] != ""){
    $page_no = $_GET['page_no'];
}else{
    $page_no = 1;
}

list($products,$total_no_of_pages) = get_products_per_page($page_no, $sort_order);


include("view/shop.php");