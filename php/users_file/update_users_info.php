<?php
    include "../connection.php";

    $e_mail = $_COOKIE['e_mail'];
    $is_worker = $_COOKIE['is_worker'];

    $sql = "UPDATE `users` SET 
    `username`='". $_POST['username'] ."',
    `password`='".$_POST['password']."',
    `name`='".$_POST['name']."',
    `surname`='".$_POST['surname']."',
    `phone_number`='".$_POST['phone_num']."',
    `e_mail`='".$_POST['e_mail']."', 
    `photo`='".$_POST['photo']."'
    WHERE `e_mail` = '$e_mail'";

    setcookie("e_mail", $_POST['e_mail'], time() + (86400 * 30), "/");

    if ($conn->query($sql) === TRUE) 
    {
        echo "Record updated successfully";
        header("https://partypals.webexteam.eu/my_profile");
        // http://localhost/Bootstrap5/kursa_darbs/my_profile
        exit();
    } 
    else 
    {
        echo "Error updating record: " . $conn->error;
        header("https://partypals.webexteam.eu/my_profile");
        // http://localhost/Bootstrap5/kursa_darbs/my_profile
        exit();
    }

    $conn->close();
?>