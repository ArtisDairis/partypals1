<?php
include "../connection.php";

$sql = "SELECT `work_days` FROM animators WHERE `e_mail` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_COOKIE['e_mail']);
$stmt->execute();
$result = $stmt->get_result();

$days = ['Pirmdiena','Otrdiena','Trešdiena','Ceturtdiena','Piektdiena','Sestdiena','Svētdiena'];

if($result->num_rows > 0) 
{
    $row = $result->fetch_assoc();
    $days_nums = explode(",",$row['work_days']);
    sort($days_nums);
    
    foreach($days as $index => $day) 
    {
        if(in_array(strval($index + 1), $days_nums)) 
        {
            echo '
                <div class="row bg-dark border border-light rounded mt-2 ms-2 me-2 mb-2">
                    <div class="col mt-1 pt-2 pb-2">
                        <p class="h5">'.$day.'</p>
                    </div>
                </div>
            ';
        }
    }
}
?>
