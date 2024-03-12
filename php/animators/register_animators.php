<?php
include "../connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone_num = $_POST['phone_num'];
    $adress = $_POST['adress'];
    $e_mail = $_POST['e_mail'];
    $about_me = $_POST['about_me'];

    $send_date = date("Y-m-d");

    $sql = "INSERT INTO animators_reg (`name`, `surname`, `phone_number`, `e_mail`, `adress`, `about_me`, `send_date`, `recruit`)
            VALUES ('$name', '$surname', '$phone_num', '$e_mail', '$adress', '$about_me', '$send_date', 'Izskata')";

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
