<?php
include "../connection.php";

$id = $_POST['id'];
$column = $_POST['column'];
$data = $_POST['data'];

$sql = "UPDATE `characters` SET `$column` = ? WHERE `id` = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) 
{
    die("Error preparing statement: " . $conn->error);
}
$stmt->bind_param("si", $data, $id);
if (!$stmt->execute()) 
{
    die("Error executing statement: " . $stmt->error);
}

$stmt->close();
$conn->close();
?>