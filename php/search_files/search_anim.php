<?php
include "../connection.php";

$searched_value = $_POST['s_value'];
$split_value = explode(" ", $searched_value);
$sql_search = "SELECT * FROM `animators` WHERE find_in_set(?, `name`) OR find_in_set(?, `surname`)"; 

$stmt = $conn->prepare($sql_search);

$stmt->bind_param("ss", $split_value[0], $split_value[count($split_value)-1]);

$stmt->execute();

$result = $stmt->get_result();
$anim_ids = ""; 

if ($result->num_rows > 0) 
{
    while ($row = $result->fetch_assoc()) 
    {
        $anim_ids .= $row['id'] . ",";
    }
} 
else 
{
    echo "Nav atrasts neviens animators.";
}

$stmt->close();

echo "Animator IDs: " . $anim_ids;
?>
