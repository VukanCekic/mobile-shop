<?php
try {
    $conn = new PDO("localhost", "root", "");
} catch (PDOException $e) {
    $error = "Database Error: ";
    $error .= $e->getMessage();
    include("view/error.php");
    exit();
}
