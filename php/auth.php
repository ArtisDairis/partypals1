<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $e_mail = $_POST['e_mail'];
    $pass = $_POST['pass'];

    echo "code works!";
    if (empty($e_mail) || empty($pass)) 
    {
        echo "Username and password are required";
    } 
    else 
    {
        $sql = "SELECT `id`, `username`, `password`, `is_worker` FROM `auth` WHERE `username` = ? AND `password` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $e_mail, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        $row = $result->fetch_assoc();

        if($row['is_worker'] == 1)
        {
            $sql_get_id = "SELECT `id` FROM `animators` WHERE `e_mail` = ?";
            $stmt1 = $conn->prepare($sql_get_id);
            $stmt1->bind_param("s", $e_mail);
            $stmt1->execute();
            $result1 = $stmt1->get_result();
            $row1 = $result1->fetch_assoc();
        }
        elseif($row['is_worker'] == 0)
        {
            $sql_get_id = "SELECT `id` FROM `users` WHERE `e_mail` = ?";
            $stmt1 = $conn->prepare($sql_get_id);
            $stmt1->bind_param("s", $e_mail);
            $stmt1->execute();
            $result1 = $stmt1->get_result();
            $row1 = $result1->fetch_assoc();
        }

        if ($result->num_rows > 0) 
        {
                echo "Login successful!";

                if($row['id'] == '1')
                {
                    setcookie("id", $row['id'], time() + (86400 * 30), "/");
                }
                else
                {
                    setcookie("id", $row1['id'], time() + (86400 * 30), "/");
                }
                setcookie("e_mail", $e_mail, time() + (86400 * 30), "/");
                setcookie("is_worker", $row['is_worker'], time() + (86400 * 30), "/");
                echo "You login successfuly!";
        } 
        else 
        {
            echo "Invalid username";
        }
    }
}

$conn->close();
?>
