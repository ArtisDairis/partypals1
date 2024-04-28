<?php
include "connection.php";

$anim_ids = $_POST["e_anims"];

$anim_ids_array = explode(",", $anim_ids);

$character_names = array();

foreach ($anim_ids_array as $anim_id) 
{
    $anim_id = intval($anim_id);

    $sql_get_names = "SELECT char_name FROM `characters` WHERE `id` = $anim_id";

    $result_get_names = $conn->query($sql_get_names);

    if ($result_get_names) 
    {
        while ($row_get_names = $result_get_names->fetch_assoc()) 
        {
            $character_names[] = $row_get_names['char_name'];
        }
    }
}

echo json_encode($character_names);
?>
