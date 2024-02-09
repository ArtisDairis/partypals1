<?php
include "../connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST['username1'];
    $e_mail = $_POST['e_mail1'];

    $sql = "SELECT `id` FROM `animators` WHERE `username`='$username' AND `e_mail`='$e_mail'";
    $result = $conn->query($sql);

    $sql1 = "SELECT `id` FROM `users` WHERE `username`='$username' AND `e_mail`='$e_mail'";
    $result1 = $conn->query($sql1);

    $response = array();

    if ($result->num_rows > 0) 
    {
        $row = $result->fetch_assoc();
        $response['animatori'] = true;
        $response['users'] = false;
        $response['animatori_id'] = $row['id'];
    } 
    elseif ($result1->num_rows > 0) 
    {
        $row = $result1->fetch_assoc();
        $response['animatori'] = false;
        $response['users'] = true;
        $response['users_id'] = $row['id'];
    } 
    else 
    {
        $response['error'] = "Record not found";
    }

    echo json_encode($response);
}
?>
