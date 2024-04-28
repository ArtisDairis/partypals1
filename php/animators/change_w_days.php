<?php
include "../connection.php";

$day_id = $_POST['day_id'];
$days_value = $_POST['days_value'];
$what_do = $_POST['what_do'];

$sql_userid = "SELECT `id` FROM animators WHERE `e_mail` = ?";
$stmt = $conn->prepare($sql_userid);
$stmt->bind_param("s", $_COOKIE['e_mail']);
$stmt->execute();
$result_userid = $stmt->get_result();
$row_userid = $result_userid->fetch_assoc();

if ($what_do == "add") 
{
    if($days_value == "")
    {
        $sql = "UPDATE `animators` SET `work_days` = $day_id WHERE `id` = ". $row_userid['id'];
    }
    else
    {
        $sql = "UPDATE `animators` SET `work_days` = CONCAT(`work_days`, ',$day_id') WHERE `id` = ". $row_userid['id'];
    }
    
} 
elseif ($what_do == "remove") 
{
    $days_array = explode(',', $days_value);
    
    $days_array = array_diff($days_array, array($day_id));
     
    if (empty($days_array))
    {
        $sql = "UPDATE `animators` SET `work_days` = '' WHERE `id` = ". $row_userid['id'];
    } 
    else 
    {
        $updated_days_string = implode(',', $days_array);
         
        $sql = "UPDATE `animators` SET `work_days` = '$updated_days_string' WHERE `id` = ". $row_userid['id'];
    }
}

if ($conn->query($sql) === TRUE) 
{
    $sql_sel = "SELECT `work_days` FROM `animators` WHERE `id` = ". $row_userid['id'];
    $result = $conn->query($sql_sel);
    $row = $result->fetch_assoc();
    echo $row['work_days'];
} 
else 
{
    echo "Error: " . $conn->error;
    echo $sql;
}
$conn->close();
?>