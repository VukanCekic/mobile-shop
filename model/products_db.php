<?php
include("./utils/console_logger.php");

function get_products_by_category_and_limit($category, $limit = 4)
{
        include('connection.php');

        $query = ("SELECT * FROM products WHERE product_category = :product_category LIMIT :number_of_items");
       
        $statement = $conn->prepare($query);
        $statement->bindValue(":product_category", $category);
        $statement->bindValue(':number_of_items', (int) $limit, PDO::PARAM_INT);
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

function get_all_products_count()
{
        include('connection.php');

        $sql = "SELECT COUNT(*) FROM products";
        $res = $conn->query($sql);
        $count =  $res->fetchColumn();

        return $count; 
}

function get_products_per_page($page_number, $sort_order)
{      
        if($sort_order != "ASC" && $sort_order != "DESC"){
                return;
        }
        
        include('connection.php');

        $total_count =  get_all_products_count();
        $total_products_per_page = 3;

        $offset = ($page_number - 1) * $total_products_per_page;
        $total_no_of_pages = ceil($total_count/$total_products_per_page);

        $query = ("SELECT * FROM products ORDER BY `product_price` $sort_order LIMIT $offset,$total_products_per_page");
       
        $statement = $conn->prepare($query);
        $statement->execute();
        $products = $statement->fetchAll();
        $statement->closeCursor();

        
        return array($products, $total_no_of_pages);

}

function get_single_product($product_id)
{
        include('connection.php');

        $query = ("SELECT * FROM products WHERE product_id = ?");
       
        $statement = $conn->prepare($query);
        $statement->execute([$product_id]);
        $product = $statement->fetch();
        $statement->closeCursor();
        
        return $product;
}