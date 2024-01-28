<?php
if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

// Database configuration
$servername = "localhost";
$username1 = "root";
$password = "mysql";
$dbname = "partypals";

// Create connection
$conn = new mysqli($servername, $username1, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

?>
