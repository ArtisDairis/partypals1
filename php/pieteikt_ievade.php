<?php
    include "connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $sql = "INSERT INTO `events`(`event_name`, `name`, `surname`, `phone_number`, `e_mail`, `adress`, `event_time_start`, `event_time_end`, `event_date`, `about_event`, `animators_id`, `is_global`) VALUES ('".$_POST['event_name']."','".$_POST['name']."','".$_POST['surname']."','".$_POST['phone_number']."','".$_POST['e_mail']."','".$_POST['adress']."','".$_POST['event_time_start']."','".$_POST['event_time_end']."','".$_POST['event_date']."','".$_POST['about_event']."','".$_POST['animators_id']."','".$_POST['is_global']."')";

        if ($conn->query($sql) === TRUE) 
        {
            header("location:http://localhost/kursa_darbs/index.php?user=".$_SESSION['username']);
            exit();
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>