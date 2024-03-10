<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['e_mail']) && isset($_POST['pass'])) 
{
    $username = $_POST['username'];
    $e_mail = $_POST['e_mail'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO `users` (`username`, `password`, `e_mail`) VALUES (?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $pass, $e_mail);
    
    if ($stmt->execute()) 
    {
        echo "User registered successfully";
    } 
    else 
    {
        echo "Error: " . $conn->error;
    }
}
else 
{
    echo "Invalid request";
}

$conn->close();
?>
