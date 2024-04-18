<?php
include "../connection.php";

if(isset($_POST['event_id'])) 
{
    $event_id = mysqli_real_escape_string($conn, $_POST['event_id']);

    $sql_delete = "DELETE FROM `events` WHERE `id` = $event_id AND (`status` = 'pabeigts' OR `status` = 'atcelts' OR `status` = 'noraidīts')";

    if ($conn->query($sql_delete) === TRUE) 
    {
        echo "Event deleted successfully";
    } 
    else 
    {
        echo "Error deleting event: " . $conn->error;
    }
} 
else 
{
    echo "Event ID not provided";
}

$conn->close();
?>
