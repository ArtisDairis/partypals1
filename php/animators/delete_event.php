<?php
include "../connection.php";

if(isset($_POST['event_id']))
{
    $event_id = $_POST['event_id'];
    
    $sql_delete = "DELETE FROM `events` WHERE `id` = $event_id AND `status` IN ('Noraidīts', 'Atcelts', 'Pabeigts')";

    if(mysqli_query($conn, $sql_delete))
    {
        echo "Pasākums tika veiksmīgi izdzēsts!";
    }
    else
    {
        echo "Pasākumu neizdevās izdzēst!";
    }
}

$conn->close();
?>
