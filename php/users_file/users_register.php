<?php
include "../connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $password_v1 = $_POST['passvord_v1'];
    $password_v2 = $_POST['passvord_v2'];
    $phone = $_POST['phone'];
    $e_pasts = $_POST['e_pasts'];

    $is_adult = ($age >= 18) ? 1 : 0; // Use 1 for true, 0 for false

    if ($password_v1 === $password_v2) 
    {
        $sql = "INSERT INTO users (username, password, name, surname, gender, is_adult, phone_number, e_mail, photo)
            VALUES ('$username', '$password_v1', '$name', '$surname', '$gender', '$is_adult', '$phone', '$e_pasts', 'user.png')";

        if ($conn->query($sql) === TRUE) 
        {
            echo "New record created successfully";
            // header("location:http://localhost/kursa_darbs/index.php");
        } 
        else 
        {
            //echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } 
    else 
    {
        //echo "Passwords do not match.";
    }
}
?>
