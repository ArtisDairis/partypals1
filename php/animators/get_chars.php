<?php
    include "../connection.php";

    if (isset($_POST['charId'])) 
    {
        $charid = $_POST['charId'];
        $sql = "SELECT * FROM characters WHERE `id` = " . $charid;
        $result = $conn->query($sql);
        if ($result) 
        {
            if ($result->num_rows > 0) 
            {
                $row_char = $result->fetch_assoc(); 
                echo $row_char['theme'];
            }
        }
    }
?>