<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $e_mail = $_POST['e_mail'];
    $pass = $_POST['pass'];

    if (empty($e_mail) || empty($pass)) 
    {
        echo "Username and password are required";
    } 
    else 
    {
        $sql = "SELECT username, password, is_worker FROM auth WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $e_mail);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) 
        {
            $row = $result->fetch_assoc();
            $hashed_password = $row['password'];

            // Verify the password using password_verify function
            // if (password_verify($password, $hashed_password)) {
                echo "Login successful!";

                setcookie("e_mail", $e_mail, time() + (86400 * 30), "/");
                setcookie("is_worker", $row['is_worker'], time() + (86400 * 30), "/");
        } 
        else 
        {
            echo "Invalid username";
        }
    }
}

$conn->close();
?>
