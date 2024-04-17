<?php
include "../connection.php";

$sql_char = "SELECT * FROM characters WHERE `worker_id` = " . $_COOKIE['id'];
$result_char = $conn->query($sql_char);

if ($result_char) {
    if ($result_char->num_rows > 0) {
        while ($row_char = $result_char->fetch_assoc()) 
        {
            $char_id = $row_char['id'];
            $char_name = $row_char['char_name'];
            echo '
            <div class="row bg-dark border border-light rounded mt-2 ms-2 me-2 mb-2">
                <div class="col mt-1 pt-2 pb-2">
                    <p class="h5">' . $char_name . '</p>
                </div>
                <div class="col-2 mt-2 pt-1 me-4">
                    <i class="divs btn text-light fa-solid fa-gear" onclick="btnSettings(this, \'' . $char_id . '\')"></i>
                </div>
            </div>
            ';
        }
    } else {
        echo "No characters found for this worker.";
    }
} else {
    echo "Error executing query: " . $conn->error;
}
?>