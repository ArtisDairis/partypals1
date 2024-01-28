<?php
    include "connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // Hash the password (use a strong hashing algorithm like bcrypt)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
        // Retrieve hashed password from the database based on the provided username
        $sql = "SELECT username, password, is_worker FROM auth WHERE username = '$username'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) 
        {
            $row = $result->fetch_assoc();
            // Verify the password
            if ($password == $row['password'])
            {
                echo "Login successful!";
                $_SESSION["username"] = $username;
                $_SESSION["is_worker"] = $row['is_worker'];

                header("location:http://localhost/kursa_darbs/index.php?user=$username");
                exit();
            } 
            else 
            {
                echo "Invalid password";
                header("location:http://localhost/kursa_darbs/index.php");
                exit();
            }
        } 
        else 
        {
            echo "Invalid username";
        }
    }
    


    $conn->close();
?>