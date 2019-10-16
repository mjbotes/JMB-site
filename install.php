<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345678');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS users";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
require_once("scripts/config.php");
$sql = "CREATE TABLE IF NOT EXISTS users (
    user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL,
    sname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phone_no VARCHAR(30),
    verified BOOLEAN,
    admin BOOLEAN
    )";
    
    if ($link->query($sql) === TRUE) {
        echo "Table Users created successfully";
        $sql = "INSERT INTO `users`(`name`, `password`, `sname`, `email`, `phone_no`, `verified`, `admin`) VALUES ('ADMIN', 'ADMIN', 'ADMIN' , 'A@DM.IN', '', 1, 1)";    
        if ($link->query($sql) === TRUE) {
            echo "ADMIN created successfully\nEMAIL: A@DM.IN\nPASSWORD: ADMIN";
        } else {
            echo "Error creating table: " . $conn->error;
        }
    } else {
        echo "Error creating table: " . $conn->error;
    }
$sql = "CREATE TABLE IF NOT EXISTS products (
    product_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    img_link VARCHAR(30) NOT NULL,
    p_name VARCHAR(30) NOT NULL,
    price INT(6) UNSIGNED,
    qty INT(6) UNSIGNED
    )";
    
    if ($link->query($sql) === TRUE) {
        echo "Table Products created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
$sql = "CREATE TABLE IF NOT EXISTS cart (
    product_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(30) NOT NULL,
    qty INT(6) UNSIGNED
    )";

    if ($link->query($sql) === TRUE) {
        echo "Table cart created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    $link->close();
?>