<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate input data
    if(empty($username) || empty($password)) {
        echo "Username and password are required";
        exit();
    }

    // SQL injection prevention using prepared statements
    $sql = "SELECT username, password, is_worker FROM auth WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verify the password using password_verify function
        // if (password_verify($password, $hashed_password)) {
            echo "Login successful!";
            setcookie("username", $username, time() + (86400 * 30), "/");
            setcookie("is_worker", $row['is_worker'], time() + (86400 * 30), "/");

            header("location: http://localhost/kursa_darbs/index.php?user=$username");
            exit();
        } else {
            echo "Invalid password";
            header("location: http://localhost/kursa_darbs/index.php");
            exit();
        }
    } else {
        echo "Invalid username";
        exit();
    }
//}

$conn->close();
?>
