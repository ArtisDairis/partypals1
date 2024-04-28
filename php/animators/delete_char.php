<?php
include "../connection.php";

$id = $_POST['id'];

$sql_delete = "DELETE FROM `characters` WHERE `id` = $id";

if ($conn->query($sql_delete) === TRUE) 
{
    echo "Record deleted successfully";
} 
else 
{
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
