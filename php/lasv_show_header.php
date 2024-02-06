<?php
include "connection.php";

// Start the session if not started already
session_start();

$username = "";

// Check if the user is logged in (you might have your own logic for this)
if (isset($_COOKIE['username']) && isset($_COOKIE['is_worker']) && $_COOKIE['is_worker'] == 1) {
    // User is logged in and is a worker
    $username = $_COOKIE['username'];

    echo "
        <div class='block1'>
            <a href='../index.php?user=$username'><h1 class='h1text'>PartyPaLs</h1></a>
        </div>

        <div class='block2'>
            <a class='link1' href='../index.php?user=$username'><b>Mājas lapa</b></a>
            <a class='link1' href='../animatori.php?user=$username'><b>Animātori</b></a>
            <a class='link1' href='../kalendars.php?user=$username'><b>Kalendārs</b></a>
            <a class='link1' href='../piedavajumi.php?user=$username'><b>Piedāvājumi</b></a>
            <a class='link1' href=''><b>Pasūtījumi</b></a>
            <a class='link1' href='../mans_konts.php?user=$username'><b>Mans konts</b></a>
            <a class='link1' href='../par_mums.php?user=$username'><b>Par mums</b></a>
        </div>

        <div class='block3'>
            <img src='../css/img/header/user.png' class='ico1' alt='User'>
            <span class='username'><b>$username</b></span>

            <form method='post' action='../php/log_out.php'>
                <input type='submit' class='btn1' name='logout' value='Log Out'>
            </form>
        </div>
    ";
} elseif (isset($_COOKIE['username']) && isset($_COOKIE['is_worker']) && $_COOKIE['is_worker'] == 0) {
    // User is logged in and is not a worker
    $username = $_COOKIE['username'];

    echo "
        <div class='block1'>
            <a href='../index.php'><h1 class='h1text'>PartyPaLs</h1></a>
        </div>

        <div class='block2'>
            <a class='link1' href='../index.php?user=$username'><b>Mājas lapa</b></a>
            <a class='link1' href='../animatori.php?user=$username'><b>Animātori</b></a>
            <a class='link1' href='../kalendars.php?user=$username'><b>Kalendārs</b></a>
            <a class='link1' href='../piedavajumi.php?user=$username'><b>Piedāvājumi</b></a>
            <a class='link1' href=''><b>Pasūtījumi</b></a>
            <a class='link1' href='../par_mums.php?user=$username'><b>Par mums</b></a>
        </div>

        <div class='block3'>
            <img src='../css/img/header/user.png' class='ico1' alt='User'>
            <span class='username'><b>$username</b></span>

            <form method='post' action='../php/log_out.php'>
                <input type='submit' class='btn1' name='logout' value='Log Out'>
            </form>
        </div>
    ";
} else {
    // User is not logged in
    echo "
        <div class='block1'>
            <a href='../index.php'><h1 class='h1text'>PartyPaLs</h1></a>
        </div>

        <div class='block2'>
            <a class='link1' href='../index.php'><b>Mājas lapa</b></a>
            <a class='link1' href='../animatori.php'><b>Animātori</b></a>
            <a class='link1' href='../kalendars.php'><b>Kalendārs</b></a>
            <a class='link1' href='../piedavajumi.php'><b>Piedāvājumi</b></a>
            <a class='link1' href='../par_mums.php'><b>Par mums</b></a>
        </div>

        <div class='block3'>
            <img src='../css/img/header/user.png' class='ico1' alt='User'>
            <button class='btn1' id='openSignIn' onclick='openSignInModal()'><b>Log In</b></button>
        </div>
    ";
}
?>
