<?php
if($_POST['bool'] == 'true')
{
    $directory = "../css/img/user_img";
}
else
{
    $directory = "../css/img/char_img";
}
if (!file_exists($directory) || !is_dir($directory)) 
{
    mkdir($directory, 0755, true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["photo"])) 
{
    $uploadFile = $directory . '/' . basename($_FILES["photo"]["name"]);

    $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
    if (in_array($imageFileType, array("jpg", "jpeg", "png", "gif"))) 
    {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $uploadFile)) 
        {
            echo basename($_FILES["photo"]["name"]);
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