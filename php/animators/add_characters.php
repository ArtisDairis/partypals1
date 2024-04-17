<?php
include "../connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $worker_id = $_COOKIE['id'];
    $char_name = $_POST['char_name'];
    $about_char = $_POST['about_char'];
    $char_photo = $_POST['char_photo'];

    $sql_add_char = "INSERT INTO `characters` (`worker_id`, `char_name`, `about_char`, `char_photo`) 
                    VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql_add_char);
    $stmt->bind_param("isss", $worker_id, $char_name, $about_char, $char_photo);

    if ($stmt->execute()) 
    {
        echo "Character added successfully";
    } 
    else 
    {
        echo "Error adding character: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
