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
                
                <!-- <div class="modal_nav">
                    <span>Vārds</span>
                    <span>Uzvārds</span>
                    <span>Telefona numurs</span>
                    <span>E-pasts</span>
                    <span>Adrese</span>
                </div> -->
                <table>
                    <tr>
                        <th class='modal_nav'>Vārds</th>
                        <th class='modal_nav'>Uzvārds</th>
                        <th class='modal_nav'>Telefona numurs</th>
                        <th class='modal_nav'>E-pasts</th>
                        <th class='modal_nav'>Adrese</th>
                    </tr>
                    <tr>
                        <?php
                            echo "<td class='modal_col'>".$row_info['name']."</td>";
                            echo "<td class='modal_col'>".$row_info['surname']."</td>";
                            echo "<td class='modal_col'>".$row_info['phone_number']."</td>";
                            echo "<td class='modal_col'>".$row_info['e_mail']."</td>";
                            echo "<td class='modal_col'>".$row_info['adress']."</td>";
                        ?>
                    </tr>
                </table>
                <div class="modal_apr">
                    <span class='modal_apr_nos'>Apraksts</span>
                    <br>
                    <?php
                        echo "<span id='table_apr'>".$row_info['about_event']."</span>";
                    ?>      
                </div>
                
                <?php
        }
    }
}
?>
