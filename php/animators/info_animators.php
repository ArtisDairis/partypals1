<?php
// Include the database connection file
include "php/connection.php";

// Check if the id is set in the URL
if (isset($_GET['id'])) 
{
    $id = $_GET['id'];

    // Fetch data for the specified id from the database
    $sql = "SELECT * FROM animators WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        // Fetch the data
        $row = $result->fetch_assoc();

        // Use the data as needed
        $character = $row['character'];
        $name = $row['name'];
        $surname = $row['surname'];
        $apraksts = $row['about_me'];
        $photo = $row['photo'];

        // Output the information
        echo "
        <div class='apraksts'>
            <div class='left_apr'>
                <h1>$character</h1>
                <p>$name $surname</p>
                <p>$apraksts</p>
            </div>
            <div class='right_apr'>
                <img src='css/img/user_img/$photo' alt='No img!' class='animator_img'>
            </div>
        </div>
        ";
    } 
    else 
    {
        echo "No information available for the specified ID.";
    }
} 
else 
{
    // Handle the case when the id is not set in the URL
    echo "ID parameter is missing.";
}

// Close the database connection
$conn->close();
?>
