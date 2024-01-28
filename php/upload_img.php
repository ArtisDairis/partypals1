<?php
$directory = "../css/img/user_img";

if (!file_exists($directory) || !is_dir($directory)) 
{
    mkdir($directory, 0755, true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["photo"])) 
{
    $uploadFile = $directory . '/' . basename($_FILES["photo"]["name"]);

    // Check if the file is an image
    $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
    if ($imageFileType == "jpg" || $imageFileType == "jpeg" || $imageFileType == "png" || $imageFileType == "gif") 
    {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $uploadFile)) 
        {
            echo "File uploaded successfully.";
        } 
        else 
        {
            echo "Error uploading file.";
        }
    } 
    else 
    {
        echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
} 
else 
{
    echo "No file uploaded.";
}
?>