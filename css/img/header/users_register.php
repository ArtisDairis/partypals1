<?php
include "../connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password_v1 = $_POST['passvord_v1'];
    $password_v2 = $_POST['passvord_v2'];
    $phone = $_POST['phone'];
    $e_pasts = $_POST['e_pasts'];

    if ($password_v1 === $password_v2) 
    {
        $sql = "INSERT INTO users (username, password, name, surname, phone_number, e_mail, photo)
            VALUES ('$username', '$password_v1', '$name', '$surname', '$phone', '$e_pasts', 'user.png')";

        if ($conn->query($sql) === TRUE) 
        {
            echo "New record created successfully";
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } 
    else 
    {
        echo "Passwords do not match.";
    }
}
?>
