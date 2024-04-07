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
                <span class="h1 ms-3">Pasūtījumu vēsture</span>
                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col-2">
                            <div class="input-group mb-3">
                                <input type="text" id="name_value" class="form-control" placeholder="Meklēt pēc nosaukuma..." aria-label="Search" aria-describedby="basic-addon1">
                                <i class="btn text-light active input-group-text fa-solid fa-magnifying-glass nav_bg" style="padding-top: 10px;" onclick="searchName()"></i>
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
                                                    <select class="form-control border-dark rounded" id="filter_status" onchange="filter_status()">
                                                        <option value=""></option>
                                                        <option value="Apstiprināts">Apstiprināts</option>
                                                        <option value="Noraidīts">Noraidīts</option>
                                                        <option value="Atcelts">Atcelts</option>
                                                        <option value="Pabeigts">Pabeigts</option>
                                                    </select>
                                                </div>
                                                <div class="col d-flex justify-content-center">
                                                    <input type="text" name="" id="" class="align-middle border-dark rounded text-center" value="14:00" style="width: 65px;height:38px;">
                                                    <input type="text" name="" id="" class="align-middle border-dark rounded text-center" value="19:00" style="width: 65px;height:38px;">
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
                                            <input type="date" id="date_value" class="form-control" onchange="searchDate()" aria-label="Search" aria-describedby="basic-addon1" value="">
                                            <i class="btn text-light active input-group-text fa-solid fa-calendar-days nav_bg" style="padding-top: 10px;" onclick="" hidden></i>
                                        </div>
                                    </div>
                                    <div class="col">
                                            <button class="btn rounded nav_bg text-light" onclick="reloadData()"><i class=" ps-1 pt-1 pe-1 pb-1 fa-solid fa-repeat"></i></button>
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
                        <div class="col-2" style="width: 200px;">
                            <span class="table_col" onclick="sortDataBy('event_name', 'b1')">Pasākuma nosaukums  <i id="b1" class="fa-solid fa-caret-down"></i></span>
                        </div>
                        <div class="col">
                            <span class="table_col" onclick="sortDataBy('event_time_start', 'b2')">Pasākuma sākums  <i id="b2" class="fa-solid fa-caret-down"></i></span>
                        </div>
                        <div class="col">
                            <span class="table_col" onclick="sortDataBy('event_time_end', 'b3')">Pasākuma beigas  <i id="b3" class="fa-solid fa-caret-down"></i></span>
                        </div>
                        <div class="col">
                            <span class="table_col" onclick="sortDataBy('event_date', 'b4')">Pasākuma datums  <i id="b4" class="fa-solid fa-caret-down"></i></span>
                        </div>
                        <div class="col">
                            <span class="table_col" onclick="sortDataBy('adress', 'b5')">Pasākuma adrese  <i id="b5" class="fa-solid fa-caret-down"></i></span>
                        </div>
                        <div class="col"></div>
                        <div class="col">
                            <span class="ms-3 table_col" onclick="sortDataBy('status', 'b6')">Statuss  <i id="b6" class="fa-solid fa-caret-down"></i></span>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
                <div id="show_data1">

                </div>
            </div>
            <div class="col-1"></div>
        </div>


    <?php
        include "./php/show_footer.php";
    ?>
</body>
<script src="scripts/accordion_btn.js"></script>
<script src="scripts/show_events_list.js"></script>
<script src="scripts/jquery-3.7.1.min.js"></script>
<script src='scripts/log_out.js'></script>
<script src="scripts/anim_register.js"></script>
<script src="scripts/filter_events_history.js"></script>
</html>