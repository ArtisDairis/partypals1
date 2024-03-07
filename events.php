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
.background 
{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
#video-bg
{
    width: 100%;
    height: auto;
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
</div>

<br><br>

    <div class="container-fluid position-relative p-0 mt-3" style="z-index: 1;">
        <div class="row bg-dark position-relative" style="height: 350px;">
            <div class="col position-relative">
                <video id="video-bg" autoplay muted loop id="myVideo" style="position: absolute; z-index: 3; width: 100%; height: 350px;">
                    <source src="./css/galerija/pils_svetki.mp4" type="video/mp4">
                </video>
                <b class="h1 ms-2 text-center text-light bg-dark rounded" style="z-index: 5; position: absolute;left: 44.7%;bottom: 50%;">Pilsētas svētki</b>
                <button class="btn btn-success ms-2 mt-5" style="z-index: 5; position: absolute; bottom: 40%; left: 48%;">Lasīt vairāk!</button>
            </div>
        </div>
    </div>

    <div class="container-fluid position-relative p-0 mt-3" style="z-index: 1;">
        <div class="row bg-dark position-relative" style="height: 350px;">
            <div class="col position-relative">
                <video id="video-bg" autoplay muted loop id="myVideo" style="position: absolute; z-index: 3; width: 100%; height: 350px;">
                    <source src="./css/galerija/bd_man.mp4" type="video/mp4">
                </video>
                <b class="h1 ms-2 text-center text-light bg-dark rounded" style="z-index: 5; position: absolute;left: 38%; bottom: 50%;">Pieaugušo dzimšanas diena</b>
                <button class="btn btn-success ms-2 mt-5" style="z-index: 5; position: absolute; bottom: 40%; left: 48%;">Lasīt vairāk!</button>
            </div>
        </div>
    </div>

    <div class="container-fluid position-relative p-0 mt-3" style="z-index: 1;">
        <div class="row bg-dark position-relative" style="height: 350px;">
            <div class="col position-relative">
                <video id="video-bg" autoplay muted loop id="myVideo" style="position: absolute; z-index: 3; width: 100%; height: 350px;">
                    <source src="./css/galerija/kids_bd.mp4" type="video/mp4">
                </video>
                <b class="h1 ms-2 text-center text-light bg-dark rounded" style="z-index: 5; position: absolute;left: 40%; bottom: 50%;">Bērna dzimšanas diena</b>
                <button class="btn btn-success ms-2 mt-5" style="z-index: 5; position: absolute; bottom: 40%; left: 48%;">Lasīt vairāk!</button>
            </div>
        </div>
    </div>

    <div class="container-fluid position-relative p-0 mt-3" style="z-index: 1;">
        <div class="row bg-dark position-relative" style="height: 350px;">
            <div class="col position-relative">
                <video id="video-bg" autoplay muted loop id="myVideo" style="position: absolute; z-index: 3; width: 100%; height: 350px;">
                    <source src="./css/galerija/corporate.mp4" type="video/mp4">
                </video>
                <b class="h1 ms-2 text-center text-light bg-dark rounded" style="z-index: 5; position: absolute;left: 45.6%; bottom: 50%;">Korporatīvi</b>
                <button class="btn btn-success ms-2 mt-5" style="z-index: 5; position: absolute; bottom: 40%; left: 48%;">Lasīt vairāk!</button>
            </div>
        </div>
    </div>

    <div class="container-fluid position-relative p-0 mt-3" style="z-index: 1;">
        <div class="row bg-dark position-relative" style="height: 350px;">
            <div class="col position-relative">
                <video id="video-bg" autoplay muted loop id="myVideo" style="position: absolute; z-index: 3; width: 100%; height: 350px;">
                    <source src="./css/galerija/weddings.mp4" type="video/mp4">
                </video>
                <b class="h1 ms-2 text-center text-light bg-dark rounded" style="z-index: 5; position: absolute;left: 48%; bottom: 50%;">Kāzas</b>
                <button class="btn btn-success ms-2 mt-5" style="z-index: 5; position: absolute; bottom: 40%; left: 48%;">Lasīt vairāk!</button>
            </div>
        </div>
    </div>

    <div class="container-fluid position-relative p-0 mt-3" style="z-index: 1;">
        <div class="row bg-dark position-relative" style="height: 350px;">
            <div class="col position-relative">
                <video id="video-bg" autoplay muted loop id="myVideo" style="position: absolute; z-index: 3; width: 100%; height: 350px;">
                    <source src="./css/galerija/kids_party.mp4" type="video/mp4">
                </video>
                <b class="h1 ms-2 text-center text-light bg-dark rounded" style="z-index: 5; position: absolute;left: 42%; bottom: 50%;">Pasākumi bērniem</b>
                <button class="btn btn-success ms-2 mt-5" style="z-index: 5; position: absolute; bottom: 40%; left: 48%;">Lasīt vairāk!</button>
            </div>
        </div>
    </div>

    <div class="container-fluid position-relative p-0 mt-3" style="z-index: 1;">
        <div class="row bg-dark position-relative" style="height: 350px;">
            <div class="col position-relative">
                <video id="video-bg" autoplay muted loop id="myVideo" style="position: absolute; z-index: 3; width: 100%; height: 350px;">
                    <source src="./css/galerija/school_party.mp4" type="video/mp4">
                </video>
                <b class="h1 ms-2 text-center text-light bg-dark rounded" style="z-index: 5; position: absolute;left: 43.5%; bottom: 50%;">Skolu pasākumi</b>
                <button class="btn btn-success ms-2 mt-5" style="z-index: 5; position: absolute; bottom: 40%; left: 48%;">Lasīt vairāk!</button>
            </div>
        </div>
    </div>

    <div class="container-fluid position-relative p-0 mt-3 mb-5" style="z-index: 1;">
        <div class="row bg-dark position-relative" style="height: 350px;">
            <div class="col position-relative">
                <video id="video-bg" autoplay muted loop id="myVideo" style="position: absolute; z-index: 3; width: 100%; height: 350px;">
                    <source src="./css/galerija/jubilejs.mp4" type="video/mp4">
                </video>
                <b class="h1 ms-2 text-center text-light bg-dark rounded" style="z-index: 5; position: absolute;left: 46.5%; bottom: 50%;">Jubilejas</b>
                <button class="btn btn-success ms-2 mt-5" style="z-index: 5; position: absolute; bottom: 40%; left: 48%;">Lasīt vairāk!</button>
            </div>
        </div>
    </div>
    
<br><br><br><br><br><br>

    <footer class="">
        <div class="footer container-fluid bg-dark text-light mt-5">
            <div class="row">
                <div class="col-2"></div>
                <div class="col pt-2 pb-2">
                    <p class="h2">Kontaktinformācija</p>
                    <p class="h6">Autors: Artis Dairis Kroičs</p>
                    <p class="h6">Tālrunis: +37129120520</p>
                    <p class="h6">E-pasts: partypals@gmail.com</p>
                </div>
                <div class="col pt-2 pb-2">
                    <p class="h2">Seko mums</p>
                    <div class="footer_cntnt">
                        <a href="#" class="ms-4"><i style="font-size: 24px;" class="fa-brands fa-square-instagram text-light"></i></a>
                        <a href="#" class="ms-4"><i style="font-size: 24px;" class="fa-brands fa-facebook text-light"></i></a>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </footer>


</body>
<script src="scripts/jquery-3.7.1.min.js"></script>
<script src='scripts/log_out.js'></script>
</html>
