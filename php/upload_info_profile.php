<?php
    include "./connection.php";

    $usermame = $_COOKIE['username'];
    $is_worker = $_COOKIE['is_worker'];
    $theme = $_POST['theme'];
    $work_days = $_POST['work_days'];
    
    $sql = "UPDATE `animatori` SET `username`='".$_POST['username']."',`password`='".$_POST['password']."',`name`='".$_POST['name']."',`surname`='".$_POST['surname']."',`gender`='".$_POST['gender']."',`age`='".$_POST['age']."',`adress`='".$_POST['adress']."',`phone_number`='".$_POST['phone_num']."',`e_mail`='".$_POST['e_mail']."',`work_days`='".$work_days."',`about_me`='".$_POST['about_me']."',`character`='".$_POST['character']."',`theme`='".$theme."',`photo`='".$_POST['photo']."',`worker`='".$_POST['worker']."' WHERE `username`= '$usermame'";

    if ($conn->query($sql) === TRUE) 
    {
        echo "Record updated successfully";
        echo "<br>"."UPDATE `animatori` SET `work_days`='".$work_days."',`theme`='".$theme."' WHERE `username`= '$usermame'";
        header("location:http://localhost/kursa_darbs/index.php?user=$usermame");
        exit();
    } 
    else 
    {
        echo "Error updating record: " . $conn->error;
        header("location:http://localhost/kursa_darbs/mans_konts.php?user=$username");
        exit();
    }

    $conn->close();
?>