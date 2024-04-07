<?php
include "../connection.php";

if(isset($_POST['event_id']))
{
    $event_id = $_POST['event_id'];
    $time_type = $_POST['time_type'];
    $time_value = $_POST['time_value'];
    
    $sql_time = "UPDATE `events` SET event_time_$time_type = $time_value WHERE `id` = $event_id";

    if(mysqli_query($conn, $sql_time))
    {
        echo "Pasākuma laiks tika veiksmīgi nomainīts!";
    }
    else
    {
        echo "Pasākuma laiku neizdevās izmainīt!";
    }
}

$conn->close();
?>
