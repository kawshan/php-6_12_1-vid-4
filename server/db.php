<?php
$servername = "localhost";
$username = "root";
$password = "kawshan6358";
$database="earth1";

// Create connection
$conn = mysqli_connect($servername, $username, $password ,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




?>