<?php
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selID = $_POST['selID'];

    $sql_info = "SELECT * FROM `events` WHERE `id` = '$selID'";
    $result_info = $conn->query($sql_info);

    if ($result_info === false) 
    {
        echo json_encode(["error" => "Error: " . $conn->error]); 
    } 
    else 
    {
        if ($result_info->num_rows > 0) 
        {
            $row_info = $result_info->fetch_assoc();
            
            ?>

            <span class='close' onclick='closePasutijumiModal()'>&times;</span>
            <h2>Pasākuma informācija</h2>
                <table>
                    <tr>
                        <th class=''>Vārds</th>
                        <th class=''>Uzvārds</th>
                        <th class=''>Telefona numurs</th>
                        <th class=''>E-pasts</th>
                        <th class=''>Adrese</th>
                        <th class=''>Apraksts</th>
                    </tr>
                    <tr>
                        <?php
                        echo "<td class='table_col'>".$row_info['name']."</td>";
                        echo "<td class='table_col'>".$row_info['surname']."</td>";
                        echo "<td class='table_col'>".$row_info['phone_number']."</td>";
                        echo "<td class='table_col'>".$row_info['e_mail']."</td>";
                        echo "<td class='table_col'>".$row_info['adress']."</td>";
                        echo "<td class='table_col'>".$row_info['about_event']."</td>";
                        ?>
                    </tr>
                </table>
                <?php
        }
    }
}
?>
