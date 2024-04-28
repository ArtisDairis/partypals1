<?php
include "../connection.php";

$id = $_POST['id'];
$pass = $_POST['pass'];

$sql_select = "SELECT * FROM `animators_reg` WHERE `id` = ?";
$stmt_select = $conn->prepare($sql_select);
$stmt_select->bind_param("i", $id);
$stmt_select->execute();
$result_username = $stmt_select->get_result();

if ($result_username->num_rows > 0) 
{
    $row = $result_username->fetch_assoc();

    $recruit = $row['recruit'];

    if ($recruit == "Pienemts") {
        $sql_insert = "INSERT INTO `animators`(`username`, `password`, `name`, `surname`, `phone_number`, `e_mail`, `about_me`, `photo`, `worker`) VALUES (?, ?, ?, ?, ?, ?, ?, 'user.png', '0')";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("sssssss", $row['username'], $pass, $row['name'], $row['surname'], $row['phone_number'], $row['e_mail'], $row['about_me']);
        $stmt_insert->execute();

        $inserted_id = $stmt_insert->insert_id;
        $sql_fetch_inserted_data = "SELECT `username`, `password`, `name`, `surname`, `e_mail`, `worker` FROM `animators` WHERE `id` = ?";
        $stmt_fetch_inserted_data = $conn->prepare($sql_fetch_inserted_data);
        $stmt_fetch_inserted_data->bind_param("i", $inserted_id);
        $stmt_fetch_inserted_data->execute();
        $result_inserted_data = $stmt_fetch_inserted_data->get_result();

        if ($result_inserted_data->num_rows > 0) 
        {
            $inserted_row = $result_inserted_data->fetch_assoc();
            $response = array(
                'status' => 'success',
                'message' => 'Data inserted successfully',
                'data' => array(
                    'name' => $inserted_row['name'],
                    'surname' => $inserted_row['surname'],
                    'email' => $inserted_row['e_mail'],
                    'recruit' => $recruit
                )
            );
            echo json_encode($response);
        } 
        else 
        {
            echo json_encode(array('status' => 'error', 'message' => 'Error fetching inserted data.'));
        }
    } 
    else if ($recruit == "Atteikts")
    {
        $response = array(
            'status' => 'success',
            'message' => 'Recruit value is "Atteikts", skipping insertion into animators table.',
            'data' => array(
                'name' => $row['name'],
                'surname' => $row['surname'],
                'email' => $row['e_mail'],
                'recruit' => $recruit
            )
        );
        echo json_encode($response);
    }
} 
else 
{
    echo json_encode(array('status' => 'error', 'message' => 'No data found for the given ID.'));
}
?>
