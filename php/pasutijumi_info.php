<?php
include "./php/connection.php";

$searchValue = $_COOKIE['username'];

$sql_info = "SELECT * FROM `events` WHERE FIND_IN_SET('$searchValue', `animators_id`)";
$result_info = $conn->query($sql_info);
    if ($result_info === false) 
    {
        echo "Error: " . $conn->error; // Output any database errors
    } 
    else 
    {
        function formatTime($time)
        {
            // Assuming $time is a string in 'HH:mm:ss' format
            $dateTime = DateTime::createFromFormat('H:i:s', $time);
            return $dateTime->format('H:i');
        }
        function formatDate($date)
        {
            $dateFormat = DateTime::createFromFormat('Y-m-d', $date);
            return $dateFormat->format('d.m.Y');
        }
        if ($result_info->num_rows > 0) 
        {
            echo "<table class='pasutijumi_table'>";
            echo "<tr class='table_row'>";
            echo "<th class=''>Pasākuma nosaukums</th>";
            echo "<th class=''>Pasākuma laika sākums</th>";
            echo "<th class=''>Pasākuma laika beigas</th>";
            echo "<th class=''>Pasākuma datums</th>";
            echo "<th class=''>Animatori</th>";
            echo "<th class=''>Lasīt vairāk!</th>";
            echo "</tr>";
            while ($row_info = $result_info->fetch_assoc()) 
            {
                echo "<tr class='table_row'>";
                echo "<td class='table_col'>".$row_info['event_name']."</td>";
                echo "<td class='table_col'>" . formatTime($row_info['event_time_start']) . "</td>";
                echo "<td class='table_col'>" . formatTime($row_info['event_time_end']) . "</td>";
                echo "<td class='table_col'>".formatDate($row_info['event_date'])."</td>";
                // echo "";
                echo "<td class='table_col'>".$row_info['animators_id']."</td>";
                // echo "<td class='table_col'>".$row_info['is_global']."</td>";
                echo "<td class='table_col'><button type='button' class='pasutModal' id='".$row_info['id']."' onclick='openPasutijumiModal()'>Info</button></td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }

$conn->close();
?>
