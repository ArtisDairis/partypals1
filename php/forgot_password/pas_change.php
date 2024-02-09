<?php
require_once "../connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $newPass = $_POST['writedPas'];
    
    if($_POST['isAnim'] == true && isset($_POST['animFindId']))
    {
        $animID = $_POST['animFindId'];
        $sql1 = "UPDATE `animators` SET `password`='$newPass' WHERE `id` = '$animID'";

        if ($conn->query($sql1) === TRUE) {
            echo "Record updated successfully";
            echo "<br>".$sql1;
          } else {
            $error = "Error updating record: " . $conn->error;
            error_log($error);
            echo $error;
          }
    }
    elseif($_POST['isUser'] == true && isset($_POST['usersFindId']))
    {
        $userID = $_POST['usersFindId']; 
        $sql2 = "UPDATE `users` SET `password`='$newPass' WHERE `id` = '$userID'";
        
        if ($conn->query($sql2) === TRUE) {
            echo "Record updated successfully";
            echo "<br>".$sql2;
          } else {
            $error = "Error updating record: " . $conn->error;
            error_log($error);
            echo $error;
          }
    }
    else {
        $error = "Invalid request: No user or animator specified";
        error_log($error);
        echo $error;
    }
}
?>
