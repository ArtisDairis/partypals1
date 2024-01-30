<?php
include "./php/connection.php";

$searchValue = $_SESSION['username'];

$sql_info = "SELECT * FROM `events` WHERE FIND_IN_SET('$searchValue', `animators_id`)";
$result_info = $conn->query($sql_info);
    if ($result_info === false) 
    {
        echo "Error: " . $conn->error; // Output any database errors
    } 
    else 
    {
        if ($result_info->num_rows > 0) 
        {
            echo "<table class='pasutijumi_table'>";
            echo "<tr class='table_row'>";
            echo "<th class=''>Pasākuma nosaukums</th>";
            echo "<th class=''>Vārds</th>";
            echo "<th class=''>Uzvārds</th>";
            echo "<th class=''>Telefona numurs</th>";
            echo "<th class=''>E-pasts</th>";
            echo "<th class=''>Adrese</th>";
            echo "<th class=''>Pasākuma laika sākums</th>";
            echo "<th class=''>Pasākuma laika beigas</th>";
            echo "<th class=''>Pasākuma datums</th>";
            echo "<th class=''>Apraksts</th>";
            echo "<th class=''>Animatori</th>";
            echo "<th class=''>Vai ir kalendārā?</th>";
            echo "</tr>";
            while ($row_info = $result_info->fetch_assoc()) 
            {
                echo "<tr class='table_row'>";
                echo "<td>".$row_info['event_name']."</td>";
                echo "<td>".$row_info['name']."</td>";
                echo "<td>".$row_info['surname']."</td>";
                echo "<td>".$row_info['phone_number']."</td>";
                echo "<td>".$row_info['e_mail']."</td>";
                echo "<td>".$row_info['adress']."</td>";
                echo "<td>".$row_info['event_time_start']."</td>";
                echo "<td>".$row_info['event_time_end']."</td>";
                echo "<td>".$row_info['event_date']."</td>";
                echo "<td>".$row_info['about_event']."</td>";
                echo "<td>".$row_info['animators_id']."</td>";
                echo "<td>".$row_info['is_global']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }

$conn->close();
?>
