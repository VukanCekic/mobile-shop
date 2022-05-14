<?php
include("./utils/console_logger.php");

function get_products_by_category_and_limit($category, $limit = 4)
{
        include('connection.php');

        $query = ("SELECT * FROM products WHERE product_category=:product_category LIMIT:number_of_items");
       
        $statement = $conn->prepare($query);
        $statement->bindValue(":product_category", $category);
        $statement->bindValue(":number_of_items", $limit);
        $statement->execute();

        $products = $statement->fetchAll();
        $statement->closeCursor();
        return $products;
}

function get_featured_products()
{
        include('connection.php');

        $query = ("SELECT * FROM products WHERE featured=TRUE LIMIT 4");
       
        $statement = $conn->prepare($query);
        $statement->execute();
        $featured_products = $statement->fetchAll();
        $statement->closeCursor();
        return $featured_products;
}