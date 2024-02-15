<?php
include "../connection.php";

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $status = $_POST['status'];
    $eventID = $_POST['eventID'];

    // Check if the status is true or false
    if($status == "Apstiprināts")
    {
        $sql = "UPDATE `events` SET `status` = 'Apstiprināts' WHERE `id` = $eventID";
    }
    else
    {
        $sql = "UPDATE `events` SET `status` = 'Noraidīts' WHERE `id` = $eventID";
    }

    if ($conn->query($sql) === TRUE) 
    {
        echo "Record updated successfully";
    } 
    else 
    {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
