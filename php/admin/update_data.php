<?php
include "../connection.php";

$value = $_POST['value'];
$column_name = $_POST['column_name'];
$table_name = $_POST['table_name'];
$id = $_POST['id'];

$sql = "UPDATE `$table_name` SET `$column_name` = ? WHERE `id` = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) 
{
    die("Error preparing statement: " . $conn->error);
}

$stmt->bind_param("si", $value, $id);

if (!$stmt->execute()) 
{
    die("Error executing statement: " . $stmt->error);
}
else
{
    echo "Data updated successful!";
}

$stmt->close();
$conn->close();
?>
