<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "sample_form"; // Replace with your actual database name

// Create connection
$con = new mysqli($server, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}else{
    // echo "successful connection done";
}
?>
