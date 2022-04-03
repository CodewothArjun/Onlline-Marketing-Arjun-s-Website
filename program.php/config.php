<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arjun";

// creating a connection
$conn = new mysqli($servername,$username,$password,$dbname);

// connection check
if($conn->connect_error){
    die("connection failed.".$conn->connect_error);
}

?>