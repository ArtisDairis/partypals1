<?php
include "connection.php";

$id = $_POST['id'];
$table_name = $_POST['table_name'];

if (empty($id) || empty($table_name)) 
{
    die("Invalid ID or table name");
}

$sql = "DELETE FROM $table_name WHERE id = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $id);
if ($stmt->execute()) 
{
    setcookie("id", "", time() - 3600, "/");
    setcookie("e_mail", "", time() - 3600, "/");
    setcookie("is_worker", "", time() - 3600, "/");

    header('Location: https://partypals.webexteam.eu/');

    echo "Account deleted successfully";
    exit;
} 
else 
{
    echo "Error deleting account: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

