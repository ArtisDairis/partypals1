<?php
include "./php/connection.php";

$searchValue = $_SESSION['username'];

$sql = "SELECT `id` FROM `events` WHERE FIND_IN_SET('$searchValue', `animators_id`)";

echo "SQL Query: $sql<br>"; // Debugging output

$result = $conn->query($sql);

if ($result === false) {
    echo "Error: " . $conn->error; // Output any database errors
} else {
    if ($result->num_rows > 0) {
        // Loop through each row of the result
        while ($row = $result->fetch_assoc()) 
        {
            // Access the id column of each row
            echo "Event ID: " . $row['id'] . "<br>";
        }
    } else {
        echo "No events found for the specified animator.";
    }
}

// Close the database connection
$conn->close();
?>
