<?php

// mysql://bcb4d4dc45c0e9:13798fb9@us-cdbr-east-06.cleardb.net/heroku_50aeb3b4cef66cd?reconnect=true

$servername = "us-cdbr-east-06.cleardb.net"; 
$username = "bcb4d4dc45c0e9"; 
$password = "13798fb9"; 
$database = "heroku_50aeb3b4cef66cd";

$conn = mysqli_connect($servername, $username, $password, $database);


if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}




?>
