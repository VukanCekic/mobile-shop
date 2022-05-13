<?php
try {
    $db_host = "localhost";
    $db_name = "web_shop";
    $db_user = "root";
    $db_pass = "";
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch (PDOException $e) {
    $error = "Database Error: ";
    $error .= $e->getMessage();
    include("view/error.php");
    exit();
}
