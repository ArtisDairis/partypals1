<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $selAnimLength = $_POST['selAnimLength'];
    
    $success = false;

    for($i = 0; $i < $selAnimLength; $i++)
    {
        $event_name = $_POST['event_name'];
        $inp_date = date('Y-m-d', strtotime($_POST['inp_date']));
        $event_time_start = $_POST['event_time_start'];
        $event_time_end = $_POST['event_time_end'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $address = $_POST['address'];
        $e_mail = $_POST['e_mail'];
        $about_event = $_POST['about_event'];
        $phone_number = $_POST['phone_number'];
        $selectedAnimators = $_POST['selectedAnimators'][$i];

        $status = "Saņemts";
        
        $sql_anim = "SELECT `username` FROM animators WHERE `id` = ?";
        $stmt_anim = $conn->prepare($sql_anim);
        $stmt_anim->bind_param("i", $selectedAnimators);
        $stmt_anim->execute();
        $result_anim = $stmt_anim->get_result();
        
        if ($result_anim->num_rows > 0) 
        {
            while($row = $result_anim->fetch_assoc())
            {
                $animator_username = $row['username'];

                $sql = "INSERT INTO `events` (`event_name`, `name`, `surname`, `phone_number`, `e_mail`, `adress`, `event_time_start`, `event_time_end`, `event_date`, `about_event`, `animators_id`, `status`)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssssssssss", $event_name, $name, $surname, $phone_number, $e_mail, $address, $event_time_start, $event_time_end, $inp_date, $about_event, $animator_username, $status);
    
                if ($stmt->execute()) 
                {
                    $success = true;
                } 
                else 
                {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        } 
        else 
        {
            echo "No animator found with ID: " . $selectedAnimators;
        }
    }
}

$conn->close();
?>
