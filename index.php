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
.navbar
{
    width: auto;
}
body
{
    font-family: 'Livvic',sans-serif;
}
.about_us 
{
    position: relative;
    box-shadow: #C9C9C9 5px 0px;
    transition: box-shadow 0.3s ease;
}

#video-bg, #video-bg1
{
    width: 100%;
    height: auto;
}

.about_us:hover 
{
    padding-right: 1vw;
    box-shadow: #C9C9C9 8px 0px;
}

.list_ico 
{
    color: whitesmoke;
    margin: 0.2vw 0.1vw 0.2vw 0.1vw; 
    background-color: #7429D4; 
    width: 70px; 
    padding-top: 1vw; 
    padding-right: 0.6vw;
    box-shadow: #46009F 3px 3px;
    transition: padding-right 0.3s ease;
}
.about_us:hover .list_ico 
{
    padding-right: 1vw;
}

.about_us_text
{
    font-size: 1vw;
}
.num
{
    color: #7429D4;
    font-size: 2.5vw;
}
.p_n_apr
{
    background-color: whitesmoke;
    width: 15vw;
    height: 6vw;
}
.p_n_text
{
    font-size: 1vw;
}
.sub_text
{
    font-size: 2.5vw;
}
.sub_btn
{
    font-size: 2vw;
}
#for_us
{
    position: relative;
    z-index: 5;
    font-family: 'Livvic',sans-serif;
}
.color_background 
{
    position: relative;
}

.color_background::before 
{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(70, 0, 90, 0.2);
}
.overlay-text 
{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.index_text
{
    font-weight: 700;
    text-shadow: purple 1px 1px;
}
.about_us_ico
{
    font-size: 2vw;
    text-shadow: inset #C9C9C9 1px 1px;
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

    <div class="container-fluid position-relative p-0 mt-3">
        <div class="row m-0">
            <div class="col p-0">
                <div class="color_background">
                    <video id="video-bg" autoplay muted>
                        <source src="css/galerija/video.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="overlay-text">
                    <div id="for_us" class="container mt-1">
                        <div class="row">
                            <div class="col-12 rounded-3">
                                <h1 class="index_text text-start text-white" style="font-size: 4vw;">PartyPals</h1>
                                <p class="index_text text-start text-white" style="font-size: 1.5vw">ir uzņēmums, kas specializējas svētku organizēšanā, piedāvājot unikālus un aizraujošus animatoru pakalpojumus. Mūsu komanda ir pilna ar radošiem talantiem, kuri ir gatavi padarīt jūsu pasākumu neaizmirstamu un dot iespēju izjust īsto prieka sajūtu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container mt-5">
        <div class="row">
            <div class="col bg-light rounded-3">
                <p class="h1 text-center mt-2">Apraksts</p>
                <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quaerat minima exercitationem, laboriosam ipsa vel tenetur obcaecati sit cupiditate laudantium, ex doloribus atque neque ratione libero reiciendis numquam repudiandae tempore?</p>
            </div> 
        </div>
    </div> -->
    <div class="container mt-3">
        <p class="h1 text-center text-light">Kāpēc tieši mēs</p>
        <div class="row">
            <div class="col text-center">
                <div class="about_us row bg-light rounded-3">
                    <div class="list_ico col-5 d-flex justify-content-center rounded-3">
                        <i class="about_us_ico fa-regular fa-face-laugh-beam"></i>
                    </div>
                    <div class="col-7 m-2">
                        <p class="about_us_text text-center h5 mt-2">Daudz pozitīvu atsauksmju</p>
                    </div>
                </div>
            </div>
            <div class="col text-center ms-3">
                <div class="about_us row bg-light rounded-3">
                    <div class="list_ico col-5 d-flex justify-content-center rounded-3">
                        <i class="about_us_ico fa-regular fa-lightbulb"></i>
                    </div>
                    <div class="col-7 m-2">
                        <p class="about_us_text text-center h5 mt-2">Radoši organizatori</p>
                    </div>
                </div>
            </div>
            <div class="col text-center ms-3">
                <div class="about_us row bg-light rounded-3">
                    <div class="list_ico col-5 d-flex justify-content-center rounded-3">
                        <i class="about_us_ico fa-solid fa-heart"></i>
                    </div>
                    <div class="col-7 m-2">
                        <p class="about_us_text text-center h5 mt-2">Iespēja atrast visu, ko vēlies</p>
                    </div>
                </div>
            </div>
            <div class="col text-center ms-3">
                <div class="about_us row bg-light rounded-3">
                    <div class="list_ico col-5 d-flex justify-content-center rounded-3">
                        <i class="about_us_ico fa-regular fa-face-laugh-beam"></i>
                    </div>
                    <div class="col-7 m-2">
                        <p class="about_us_text text-center h5 mt-2">Izveidot sapņoto pasākumu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <p class="h1 mt-5 text-center text-light">Mūsu animatoru novadītie svētķi</p>
        <div class="row mt-5 text-center">
            <div class="col">
                <div class="p_n_apr rounded-3">
                    <p class="num h2" id="p1">0</p>
                    <p class="p_n_text h4">Pilsētas svētki</p>
                </div>
            </div>
            <div class="col">
                <div class="p_n_apr rounded-3">
                    <p class="num h2" id="p2">0</p>
                    <p class="p_n_text h4">Pieaugušo dzimšanas diena</p>
                </div>
            </div>
            <div class="col">
                <div class="p_n_apr rounded-3">
                    <p class="num h2" id="p3">0</p>
                    <p class="p_n_text h4">Bērna dzimšanas diena</p>
                </div>
            </div>
            <div class="col">
                <div class="p_n_apr rounded-3">
                    <p class="num h2" id="p4">0</p>
                    <p class="p_n_text h4">Korporatīvi</p>
                </div>
            </div>
        </div>
        <div class="row mt-2 text-center">
            <div class="col">
                <div class="p_n_apr rounded-3">
                    <p class="num h2" id="p5">0</p>
                    <p class="p_n_text h4">Kāzas</p>
                </div>
            </div>
            <div class="col">
                <div class="p_n_apr rounded-3">
                    <p class="num h2" id="p6">0</p>
                    <p class="p_n_text h4">Pasākumi bērniem</p>
                </div>
            </div>
            <div class="col">
                <div class="p_n_apr rounded-3">
                    <p class="num h2" id="p7">0</p>
                    <p class="p_n_text h4">Skolu pasākumi</p>
                </div>
            </div>
            <div class="col">
                <div class="p_n_apr rounded-3">
                    <p class="num h2" id="p8">0</p>
                    <p class="p_n_text h4">Jubilejas</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid position-relative p-0 mt-5">
        <div class="row m-0">
            <div class="col p-0">
                <div class="color_background">
                    <video id="video-bg1" autoplay muted>
                        <source src="css/galerija/video1.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="overlay-text">
                    <div class="col">
                        <p class="sub_text h1 text-start text-light">Vai vēlaties pieteikt pasākumu?</p>
                    </div>
                    <div class="col">
                        <button type="button" class="sub_btn btn btn-success"><a href="#" class="text-reset text-decoration-none">Pieteikt</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
    <div class="container-fluid bg-dark text-light mt-5">
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
</div>

</body>
<script src="scripts/index.js"></script>
<script src="scripts/jquery-3.7.1.min.js"></script>
<script src='scripts/log_out.js'></script>
</html>