<?php
include "connection.php";

$e_mail = "";

if (isset($_COOKIE['e_mail']) && isset($_COOKIE['is_worker']) && $_COOKIE['is_worker'] == 1) 
{
    // User is logged in and he is worker
    $e_mail = $_COOKIE['e_mail'];
    $sql = "SELECT photo, username FROM animators WHERE e_mail = '$e_mail'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $userPhoto = isset($row['photo']) ? $row['photo'] : '';
    echo '
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="home" class="navbar-brand mb-0 h1">
                    <img class="d-inline-block align-center" src="css/img/header/PartyPalsIco.png" alt="Oooops.." width="30" height="30">
                    PartyPals
                </a>
                <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="animators" class="nav-link disable">Animatori</a>
                        </li>
                        <li class="nav-item active">
                            <a href="events" class="nav-link disable">Pasākumi</a>
                        </li>
                        <li class="nav-item active">
                            <a href="about_us" class="nav-link disable">Par mums</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="css/img/user_img/'.$userPhoto.'" alt="mdo" width="32" height="32" class="rounded-circle">
                        '.$row['username'].'
                    </a>
                    <ul class="dropdown-menu text-small bg-dark text-light" style="">
                        <li>
                            <a class="dropdown-item bg-dark text-light" href="my_profile">Mans konts</a>
                        </li>
                        <li>
                            <a class="dropdown-item bg-dark text-light" href="orders">Mani pasūtījumi</a>
                        </li>
                        <li>
                            <a class="dropdown-item bg-dark text-light" href="orders_list">Pasūtījumu vēsture</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider bg-dark text-light">
                        </li>
                        <li>
                            <a class="dropdown-item bg-dark text-light" id="log_out" href="home">Iziet</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    ';
} 
else 
if (isset($_COOKIE['e_mail']) && isset($_COOKIE['is_worker']) && $_COOKIE['is_worker'] == 0)
{
    $e_mail = $_COOKIE['e_mail'];
    $sql = "SELECT photo, username FROM `users` WHERE e_mail = '$e_mail'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $userPhoto = isset($row['photo']) ? $row['photo'] : '';
    echo '
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="home" class="navbar-brand mb-0 h1">
                    <img class="d-inline-block align-center" src="css/img/header/PartyPalsIco.png" alt="Oooops.." width="30" height="30">
                    PartyPals
                </a>
                <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="animators" class="nav-link disable">Animatori</a>
                        </li>
                        <li class="nav-item active">
                            <a href="events" class="nav-link disable">Pasākumi</a>
                        </li>
                        <li class="nav-item active">
                            <a href="about_us" class="nav-link disable">Par mums</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a href="home" class="d-block link-body-emphasis text-decoration-none dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="css/img/user_img/'.$userPhoto.'" alt="mdo" width="32" height="32" class="rounded-circle">
                        '.$row['username'].'
                    </a>
                    <ul class="dropdown-menu text-small bg-dark text-light" style="">
                        <li>
                            <a class="dropdown-item bg-dark text-light" href="my_profile.php">Mans konts</a>
                        </li>
                        <li>
                            <a class="dropdown-item bg-dark text-light" href="orders_list">Pasūtījumu vēsture</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider bg-dark text-light">
                        </li>
                        <li>
                            <a class="dropdown-item bg-dark text-light" id="log_out" href="home">Iziet</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        ';
}
else
{
    // User is not logged in
    echo '
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="home" class="navbar-brand mb-0 h1">
                    <img class="d-inline-block align-center" src="css/img/header/PartyPalsIco.png" alt="Oooops.." width="30" height="30">
                    PartyPals
                </a>
                <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="animators" class="nav-link disable">Animatori</a>
                        </li>
                        <li class="nav-item active">
                            <a href="events" class="nav-link disable">Pasākumi</a>
                        </li>
                        <li class="nav-item active">
                            <a href="about_us" class="nav-link disable">Par mums</a>
                        </li>
                    </ul>
                </div>
                <form class="d-flex">
                    <button type="button" class="btn" style="color: whitesmoke; border: 1px solid #A36E9E"><a href="auth_reg?bool=true" class="text-reset text-decoration-none">Autorizēties</a></button>
                    <button type="button" class="btn btn-black ms-2" style="background-color: #A36E9E; color: whitesmoke;"><a href="auth_reg?bool=false" class="text-reset text-decoration-none">Reģistrēties</a></button>
                </form>
            </div>
        </nav>
    ';
}
?>
