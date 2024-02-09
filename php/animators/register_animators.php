<?php
include "../connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone_number = $_POST['phone_number'];
    $adress = $_POST['adress'];
    $e_mail = $_POST['e_mail'];
    $my_character = $_POST['my_character'];

    $send_date = date("Y-m-d");

    $sql = "INSERT INTO animators_reg (username, name, surname, phone_number, e_mail, adress, my_character, send_date, recruit)
            VALUES ('$username', '$name', '$surname', '$phone_number', '$e_mail', '$adress', '$my_character', '$send_date', 'Izskata')";

    if ($conn->query($sql) === TRUE) 
    {
        echo "New record created successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} 
?>
