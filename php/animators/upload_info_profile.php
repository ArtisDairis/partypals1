<?php
    include "../connection.php";

    $e_mail = $_COOKIE['e_mail'];
    $is_worker = $_COOKIE['is_worker'];

    if (isset($_POST['worker'])) 
    {
        $worker = intval($_POST['worker']);
    } else 
    {
        $worker = 0;
    }

    $sql = "UPDATE `animators` SET 
    `username`='". $_POST['username'] ."',
    `password`='".$_POST['password']."',
    `name`='".$_POST['name']."',
    `surname`='".$_POST['surname']."',
    `phone_number`='".$_POST['phone_num']."',
    `e_mail`='".$_POST['e_mail']."', 
    `about_me`='".$_POST['about_me']."', 
    `photo`='".$_POST['photo']."',
    `worker`='".$worker."' 
    WHERE `e_mail` = '$e_mail'";

    setcookie("e_mail", $_POST['e_mail'], time() + (86400 * 30), "/");

    if ($conn->query($sql) === TRUE) 
    {
        echo "Record updated successfully";
        echo "<br> $worker";
        header("http://localhost/Bootstrap5/kursa_darbs/my_profile");
        //https://partypals.webexteam.eu/my_profile
        exit();
    } 
    else 
    {
        echo "Error updating record: " . $conn->error;
        header("http://localhost/Bootstrap5/kursa_darbs/my_profile");
        //https://partypals.webexteam.eu/my_profile
        exit();
    }

    $conn->close();
?>