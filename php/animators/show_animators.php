<?php
// Include the database connection file
include "php/connection.php";

// Fetch data from the database
$sql = "SELECT * FROM animatori";
$result = $conn->query($sql);

$data = array();
$col_max = 0;

echo "<table>";

if ($result->num_rows > 0) 
{
    while ($row = $result->fetch_assoc()) 
    {
        if($row['worker'])
        {
            // Increment the column count
            $col_max++;

            if ($col_max % 5 == 1) 
            {
                // Start a new row for every 5 columns
                echo "<tr>";
            }
            
                echo "<th>";
                echo "<div class='box'>";
                echo "<h2>" . $row["character"] . "</h2>";
                echo "<img src='php/animators/Photo/" . $row["photo"] . "' alt='No img!' class='card_img'>";
                echo "<br>";
                echo "<a href='anim_apraksts.php?id=" . $row["id"] . "' class='btn_darb'>Lasīt vairāk!</a>";
                echo "</div>";
                echo "</th>";
            

            if ($col_max % 5 == 0 || $col_max == $result->num_rows) {
                // Close the row after every 5 columns or at the end of the loop
                echo "</tr>";
            }
        }
    }
}

echo "</table>";

// Close the database connection
$conn->close();
?>
