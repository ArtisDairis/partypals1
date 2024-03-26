<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartyPals</title>
    <link rel="stylesheet" href="css/font_family.scss">
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="css/img/header/PartyPalsIco.png">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Livvic&display=swap');
.background 
{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
.nav_bg
{
    background: radial-gradient(50% 417.98% at 50% 50%, #7C18FB 0%, #9644FF 100%);
}
.footer
{
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #333;
    color: #fff;
    padding: 20px;
}
#show_data 
{ 
    height: 500px; 
    overflow-y: auto;
    z-index: 9998;
}
::-webkit-scrollbar
{
    width: 10px;
}
.table_col
{
    cursor: pointer;
}
</style>


<body>

<?php
    include "php/show_header.php";
?>

<div class="background">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <br><br>
</div>
<br><br>
    <?php
        include "./php/show_anim_reg.php";
    ?>
    <div class="container-fluid text-white mt-4">
        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <span class="h1 ms-3">Pasūtjumi</span>
                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col-2">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Meklēt pēc nosaukuma..." aria-label="Search" aria-describedby="basic-addon1">
                                <i class="btn text-light active input-group-text fa-solid fa-magnifying-glass nav_bg" style="padding-top: 10px;"></i>
                            </div>
                        </div>
                        <div class="col-2 ms-2">

                            <div class="input-group dropend mb-3 nav_bg">
                                <input type="text" class="form-control" aria-label="Text input with dropdown button" disabled="true" value="Filtrēt pēc: Statuss, Laiks">
                                <button class="btn active dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                <div class="dropdown-container">
                                    <ul class="dropdown-menu dropdown-menu-end" style="width: 500px;">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col">
                                                    <select class="form-control border-dark rounded" name="asd" id="asd">
                                                        <option value="1">Apstiprināts</option>
                                                        <option value="2">Nē</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="" id="" class="align-middle border-dark rounded text-center" value="14:00" style="width: 65px;height:38px;">
                                                    <input type="text" name="" id="" class="align-middle border-dark rounded text-center" value="19:00" style="width: 65px;height:38px;">
                                                </div>
                                                <div class="col">
                                                    <select class="form-control border-dark rounded" name="asd" id="asd">
                                                        <option value="1">Jā</option>
                                                        <option value="2">Nē</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-3"></div>
                        <div class="col">
                            <div class="container ms-5">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Datums" aria-label="Search" aria-describedby="basic-addon1" value="01.01.2024.">
                                            <i class="btn text-light active input-group-text fa-solid fa-calendar-days nav_bg" style="padding-top: 10px;"></i>
                                        </div>
                                    </div>
                                    <div class="col">
                                            <button class="btn rounded nav_bg text-light"><i class=" ps-1 pt-1 pe-1 pb-1 fa-solid fa-repeat"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-1"></div>
            <div class="col rounded" style="background-color: #4F4F4F;">
                <div class="container-fluid align-center mt-3 pt-2 pb-2 bg-dark" style="border-radius: 25px;">
                    <div class="row">
                        <div class="col">
                            <span class="table_col" onclick="sortDataBy('event_name')">Pasākuma nosaukums  <i class="fa-solid fa-caret-down"></i></span>
                        </div>
                        <div class="col">
                            <span class="table_col" onclick="sortDataBy('event_time_start')">Pasākuma sākums  <i class="fa-solid fa-caret-down"></i></span>
                        </div>
                        <div class="col">
                            <span class="table_col" onclick="sortDataBy('event_time_end')">Pasākuma beigas  <i class="fa-solid fa-caret-down"></i></span>
                        </div>
                        <div class="col">
                            <span class="table_col" onclick="sortDataBy('event_date')">Pasākuma datums  <i class="fa-solid fa-caret-down"></i></span>
                        </div>
                        <div class="col">
                            <span class="table_col" onclick="sortDataBy('adress')">Pasākuma adrese  <i class="fa-solid fa-caret-down"></i></span>
                        </div>
                        <div class="col"></div>
                        <div class="col">
                            <span class="ms-3 table_col" onclick="sortDataBy('status')">Statuss  <i class="fa-solid fa-caret-down"></i></span>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
                <div id="show_data">

                </div>
            </div>
            <div class="col-1"></div>
        </div>


    <?php
        include "./php/show_footer.php";
    ?>
</body>
<script src="scripts/accordion_btn.js"></script>
<script src="scripts/show_events.js"></script>
<script src="scripts/jquery-3.7.1.min.js"></script>
<script src='scripts/log_out.js'></script>
<script src="scripts/anim_register.js"></script>
<script src="scripts/filter_events.js"></script>
</html>