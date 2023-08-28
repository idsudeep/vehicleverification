<?php

$host = "us-cdbr-east-06.cleardb.net"; 
$username = "bcb4d4dc45c0e9"; 
$password = "13798fb9"; 
$dbName = "heroku_50aeb3b4cef66cd";

try {
    // Create a new PDO instance
    $connection = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
    
    // Set PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Rest of your code for insert query
    // ...

} catch (PDOException $e) {
    // Handle any database connection errors
    echo "Connection failed: " . $e->getMessage();
}


?>