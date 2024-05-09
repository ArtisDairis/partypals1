<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $selAnimLength = $_POST['selAnimLength'];
    $event_type = $_POST['event_type'];
    $selectedAnimators = $_POST['selectedAnimators'];

    $sql_increase_order = "UPDATE theme SET order_num = order_num + 1 WHERE id = ?";
    $stmt_increase_order = $conn->prepare($sql_increase_order);
    $stmt_increase_order->bind_param("i", $event_type);
    $stmt_increase_order->execute();

    $status = "Saņemts";
    $sql_insert_event = "INSERT INTO events (event_name, name, surname, phone_number, e_mail, adress, event_time_start, event_time_end, event_date, about_event, animators_id, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_insert_event = $conn->prepare($sql_insert_event);

    for ($i = 0; $i < $selAnimLength; $i++)
    {
        $sql_anim_id = "SELECT `worker_id` FROM `characters` WHERE `id` = ?";
        $stmt_anim_id = $conn->prepare($sql_anim_id);
        $stmt_anim_id->bind_param("i", $selectedAnimators[$i]);
        $stmt_anim_id->execute();
        $result_anim_id = $stmt_anim_id->get_result();
        $row_anim_id = $result_anim_id->fetch_assoc();

        $worker_id = $row_anim_id['worker_id'];

        $stmt_sel_anim_username = $conn->prepare("SELECT username FROM animators WHERE id = ?");
        $stmt_sel_anim_username->bind_param("i", $worker_id);
        $stmt_sel_anim_username->execute();
        $result_sel_anim_username = $stmt_sel_anim_username->get_result();

        if ($result_sel_anim_username->num_rows > 0)
        {
            $row_sel_anim_username = $result_sel_anim_username->fetch_assoc();
            $animator_username = $row_sel_anim_username['username'];

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

            $stmt_insert_event->bind_param("ssssssssssss", $event_name, $name, $surname, $phone_number, $e_mail, $address, $event_time_start, $event_time_end, $inp_date, $about_event, $animator_username, $status);
            if ($stmt_insert_event->execute())
            {
                $success = true;
            } 
            else 
            {
                echo "Error: " . $sql_insert_event . "<br>" . $conn->error;
            }
        }
        else 
        {
            echo "No animator found with ID: " . $selectedAnimatorId;
        }
    }

    $stmt_insert_event->close();
}

$conn->close();
?>
