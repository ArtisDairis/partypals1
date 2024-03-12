<?php
include "./connection.php";

$sql = "SELECT `order_num` FROM `theme`";

$result = $conn->query($sql);

$order_numbers = array();

if ($result->num_rows > 0) 
{
    while ($row = $result->fetch_assoc()) 
    {
        $order_numbers[] = $row['order_num'];
    }
}

echo implode(',', $order_numbers);
?>