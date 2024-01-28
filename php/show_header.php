<?php
include "connection.php";

$username = "";

// Start the session (assuming you're using sessions for user authentication)

// Check if the user is logged in (you might have your own logic for this)
if (isset($_SESSION['username']) && $_SESSION['is_worker']==1)
{
    // User is logged in and he is worker
    $username = $_SESSION['username'];
    $sql = "SELECT photo FROM animatori WHERE username = '$username'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $userPhoto = isset($row['photo']) ? $row['photo'] : '';

    echo "
        <div class='block1'>
            <a href='index.php?user=$username'><h1 class='h1text'>PartyPaLs</h1></a>
        </div>

        <div class='block2'>
            <a class='link1' href='index.php?user=$username'><b>Mājas lapa</b></a>
            <a class='link1' href='animatori.php?user=$username'><b>Animātori</b></a>
            <a class='link1' href='kalendars.php?user=$username'><b>Kalendārs</b></a>
            <a class='link1' href='piedavajumi.php?user=$username'><b>Piedāvājumi</b></a>
            <a class='link1' href='las_vairak.php'><b>Pasūtījumi</b></a>
            <a class='link1' href='mans_konts.php?user=$username'><b>Mans konts</b></a>
            <a class='link1' href='par_mums.php?user=$username'><b>Par mums</b></a>
        </div>

        <div class='block3'>
            <img src='".($userPhoto ? 'css/img/user_img/' . $userPhoto : "css/img/header/user.png")."' class='ico1' alt='User'>
            <span class='username'><b>$username</b></span>

            <form methot='post' action='php\log_out.php'>
                <input type='submit' class='btn1' name='logout' value='Log Out'>
            </form
        </div>
    ";
} 
else 
if (isset($_SESSION['username']) && $_SESSION['is_worker']==0) 
{
    $username = $_SESSION['username'];

    // User is logged in and he is not worker
    echo "
        <div class='block1'>
            <a href='index.php'><h1 class='h1text'>PartyPaLs</h1></a>
        </div>

        <div class='block2'>
            <a class='link1' href='index.php?user=$username'><b>Mājas lapa</b></a>
            <a class='link1' href='animatori.php?user=$username'><b>Animātori</b></a>
            <a class='link1' href='kalendars.php?user=$username'><b>Kalendārs</b></a>
            <a class='link1' href='piedavajumi.php?user=$username'><b>Piedāvājumi</b></a>
            <a class='link1' href=''><b>Pasūtījumi</b></a>
            <a class='link1' href='par_mums.php?user=$username'><b>Par mums</b></a>
        </div>

        <div class='block3'>
            <img src='css/img/header/user.png' class='ico1' alt='User'>
            <span class='username'><b>$username</b></span>

            <form methot='post' action='php\log_out.php'>
                <input type='submit' class='btn1' name='logout' value='Log Out'>
            </form
        </div>
    ";
}
else
{
    // User is not logged in
    echo "
        <div class='block1'>
            <a href='index.php'><h1 class='h1text'>PartyPaLs</h1></a>
        </div>

        <div class='block2'>
            <a class='link1' href='index.php'><b>Mājas lapa</b></a>
            <a class='link1' href='animatori.php'><b>Animātori</b></a>
            <a class='link1' href='kalendars.php'><b>Kalendārs</b></a>
            <a class='link1' href='piedavajumi.php'><b>Piedāvājumi</b></a>
            <a class='link1' href='par_mums.php'><b>Par mums</b></a>
        </div>

        <div class='block3'>
            <img src='css/img/header/user.png' class='ico1' alt='User'>
            <button class='btn1' id='openSignIn' onclick='openSignInModal()'><b>Log In</b></button>
        </div>
    ";
}
?>
