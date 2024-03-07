<?php
$servername = "localhost";
$username1 = "root";
$password = "mysql";
$dbname = "partypals";

$conn = new mysqli($servername, $username1, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

?>
