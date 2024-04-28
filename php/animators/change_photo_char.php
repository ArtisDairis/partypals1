<?php
include "../connection.php";

$char_id = $_POST['char_id'];

if(isset($_FILES["char_photo"]) && $_FILES["char_photo"]["error"] == 0)
{
    $target_dir = "../../css/img/char_img/";
    $target_file = $target_dir . basename($_FILES["char_photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["char_photo"]["tmp_name"]);
    if($check !== false) 
    {
        if ($_FILES["char_photo"]["size"] > 500000) 
        {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        } 
        else 
        {
            if (move_uploaded_file($_FILES["char_photo"]["tmp_name"], $target_file)) 
            {
                $sql_update = "UPDATE characters SET char_photo = '".basename($_FILES["char_photo"]["name"])."' WHERE id = $char_id";
                if ($conn->query($sql_update) === TRUE) 
                {
                    echo "File uploaded and database updated successfully.";
                } 
                else 
                {
                    echo "Error updating database: " . $conn->error;
                }
            } 
            else 
            {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } 
    else 
    {
        echo "File is not an image.";
        $uploadOk = 0;
    }
} 
else 
{
    echo "Error uploading file: " . $_FILES["char_photo"]["error"];
}

$conn->close();
?>
