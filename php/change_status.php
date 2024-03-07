<?php
include "connection.php";

$id = $_POST['id'];
$status = $_POST['status'];

$sql = "UPDATE `events` SET `status`=? WHERE `id` = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param("si", $status, $id);

$stmt->execute();

$stmt->close();
$conn->close();
?>
