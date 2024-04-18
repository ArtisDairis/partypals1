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

    <?php
        include "./php/show_anim_reg.php";
    ?>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col bg-dark ms-4 me-2">
            <video id="video-bg" class="rounded" autoplay muted loop id="myVideo" style="position: absolute; margin-top: -80px; z-index: 2; max-width: 900px; height: 380px;">
                <source src="./css/galerija/pils_svetki.mp4" type="video/mp4">
            </video>
            <div class="container-fluid text-light pt-3 pb-3">
                <div class="row">
                    <div class="col">
                        <b class="h1 ms-2 mt-2 text-light bg-dark rounded" style="z-index: 10; max-width: 600px;">Pilsētas svētki</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        Nekad nav par vēlu aicināt mūsu animtorus uz pilsētas svētkiem. Tieši mūsu talanti spēj padarīt neaizmirstamus svētkus un brīnišķīgas atmiņas par kopā būšanu. 
                    </div>
                    <div class="col d-flex justify-content-end">
                        <ul>
                            <li>Pozitīvas atsauksmes</li>
                            <li>Interaktīvas izklaides</li>
                            <li>Dzīvās izpildes un pārsteigumi</li>
                            <li>Laba izklaide bērniem</li>
                        </ul>
                        <button class="btn btn-success mb-3 ms-2" style="z-index: 5;" onclick="add_sel_theme(1)">Pasūtīt!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col bg-dark ms-2 me-4">
            <video id="video-bg" class="rounded" autoplay muted loop id="myVideo" style="position: absolute; margin-top: -80px; z-index: 2; max-width: 900px; height: 380px;">
                <source src="./css/galerija/bd_man.mp4" type="video/mp4">
            </video>
            <div class="container-fluid text-light pt-3 pb-3">
                <div class="row">
                    <div class="col">
                        <b class="h1 ms-2 text-center text-light bg-dark rounded" style="z-index: 5; max-width: 600px;">Pieaugušo dzimšanas diena</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        Mūsu animatori nodrošina radošu un aizraujošu izklaides pieredzi visiem jūsu viesiem. Aiciniet mūsu animatorus uz savu dzimšanas dienas svinību, un mēs nodrošināsim, ka katrs dalībnieks būs ar smaidu sejā un labām atmiņām sirdī.
                    </div>
                    <div class="col d-flex justify-content-end">
                        <ul>
                            <li>Labas atsauksmes</li>
                            <li>Tematiskas ballītes</li>
                            <li>Interaktīvas aktivitātes</li>
                            <li>Profesionālisms un kvalitāte</li>
                        </ul>
                        <button class="btn btn-success mb-3 ms-2" style="z-index: 5;" onclick="add_sel_theme(2)">Pasūtīt!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col bg-dark ms-4 me-2">
            <video id="video-bg" class="rounded" autoplay muted loop id="myVideo" style="position: absolute; margin-top: -80px; z-index: 2; max-width: 900px; height: 380px;">
                <source src="./css/galerija/kids_bd.mp4" type="video/mp4">
            </video>
            <div class="container-fluid text-light pt-3 pb-3">
                <div class="row">
                    <div class="col">
                        <b class="h1 ms-2 mt-2 text-light bg-dark rounded" style="z-index: 10; width: 600px;">Bērna dzimšanas diena</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        Tieši mūsu animatori padarīs jūsu svētkus par neaizmirstamu piedzīvojumu, kas atstās pozitīvas atmiņas gan bērnam, gan viņa draugiem un ģimenei.
                    </div>
                    <div class="col d-flex justify-content-end">
                        <ul>
                            <li>Pozitīvas atsauksmes</li>
                            <li>Tēmu ballītes</li>
                            <li>Burvju un izrāžu priekšnesumi</li>
                            <li>Izklaides un spēles</li>
                        </ul>
                        <button class="btn btn-success mb-3 ms-2" style="z-index: 5;" onclick="add_sel_theme(3)">Pasūtīt!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col bg-dark ms-2 me-4">
            <video id="video-bg" class="rounded" autoplay muted loop id="myVideo" style="position: absolute; margin-top: -80px; z-index: 2; max-width: 900px; height: 380px;">
                <source src="./css/galerija/corporate.mp4" type="video/mp4">
            </video>
            <div class="container-fluid text-light pt-3 pb-3">
                <div class="row">
                    <div class="col">
                        <b class="h1 ms-2 text-center text-light bg-dark rounded" style="z-index: 5; width: 600px;">Korporatīvi</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        Mūsu animatori ir šeit, lai palīdzētu jums veidot neaizmirstamus korporatīvos pasākumus, kas stiprinās komandas garu un veicinās uzņēmuma veiksmi. Tieši mūsu animatori padarīs jūsu pasākumu neaizmirstamu.
                    </div>
                    <div class="col d-flex justify-content-end">
                        <ul>
                            <li>Korporatīvie pasākumi ar tematiku</li>
                            <li>Izklaides un atpūtas iespējas</li>
                            <li>Profesionālie priekšnesumi un lekcijas</li>
                            <li>Team Building aktivitātes</li>
                        </ul>
                        <button class="btn btn-success mb-3 ms-2" style="z-index: 5;" onclick="add_sel_theme(4)">Pasūtīt!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col bg-dark ms-4 me-2">
            <video id="video-bg" class="rounded" autoplay muted loop id="myVideo" style="position: absolute; margin-top: -80px; z-index: 2; max-width: 900px; height: 380px;">
                <source src="./css/galerija/weddings.mp4" type="video/mp4">
            </video>
            <div class="container-fluid text-light pt-3 pb-3">
                <div class="row">
                    <div class="col">
                        <b class="h1 ms-2 mt-2 text-light bg-dark rounded" style="z-index: 10; width: 600px;">Kāzas</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        Tieši mūsu animatori būs tie, kuri padarīs jūsu kāzas par neaizmirstamu un burvīgu notikumu! Mūsu animatori ir šeit, lai nodrošinātu, ka jūsu lielā diena ir pilna ar prieku, smiekliem un padarītu romantiski pārbagātu atmosfēru.
                    </div>
                    <div class="col d-flex justify-content-end">
                        <ul>
                            <li>Personīgais animācijas pakalpojums</li>
                            <li>Tematiskās kāzas</li>
                            <li>Profesionāli mūziķi un izpildītāji</li>
                            <li>Atmiņu fotogrāfēšana un video filmēšana</li>
                        </ul>
                        <button class="btn btn-success mb-3 ms-2" style="z-index: 5;" onclick="add_sel_theme(5)">Pasūtīt!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col bg-dark ms-2 me-4">
            <video id="video-bg" class="rounded" autoplay muted loop id="myVideo" style="position: absolute; margin-top: -80px; z-index: 2; max-width: 900px; height: 380px;">
                <source src="./css/galerija/kids_party.mp4" type="video/mp4">
            </video>
            <div class="container-fluid text-light pt-3 pb-3">
                <div class="row">
                    <div class="col">
                        <b class="h1 ms-2 text-center text-light bg-dark rounded" style="z-index: 5; width: 600px;">Pasākumi bērniem</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        Mūsu speciālisti bērnu izklaides jomā nodrošinās, ka jūsu pasākums kļūst par burvīgu piedzīvojumu, kas paliks bērnu atmiņās uz ilgu laiku.
                    </div>
                    <div class="col d-flex justify-content-end">
                        <ul>
                            <li>Interaktīvas spēles un aktivitātes</li>
                            <li>Darbnīcas un radošās aktivitātes</li>
                            <li>Burvju šovi un uzstāšanās</li>
                            <li>Pasākumu tematizācija</li>
                        </ul>
                        <button class="btn btn-success mb-3 ms-2" style="z-index: 5;" onclick="add_sel_theme(6)">Pasūtīt!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col bg-dark ms-4 me-2">
            <video id="video-bg" class="rounded" autoplay muted loop id="myVideo" style="position: absolute; margin-top: -80px; z-index: 2; max-width: 900px; height: 380px;">
                <source src="./css/galerija/school_party.mp4" type="video/mp4">
            </video>
            <div class="container-fluid text-light pt-3 pb-3">
                <div class="row">
                    <div class="col">
                        <b class="h1 ms-2 mt-2 text-light bg-dark rounded" style="z-index: 10; width: 600px;">Skolu pasākumi</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        PartyPals animatori piedāvā aizraujošus un izglītojošus pasākumus, kas ir ideāli piemēroti skolām! Mūsu komanda ir pieredzējusi darbā ar bērniem un jauniešiem, un mēs esam gatavi nodrošināt jūsu skolas pasākumu ar neaizmirstamu piedzīvojumu. 
                    </div>
                    <div class="col d-flex justify-content-end">
                        <ul>
                            <li>Izglītojošas aktivitātes un lekcijas</li>
                            <li>Kultūras un sporta pasākumi</li>
                            <li>Darbnīcas un projektu veidošana</li>
                            <li>Kopienu iesaiste un sadarbība</li>
                        </ul>
                        <button class="btn btn-success mb-3 ms-2" style="z-index: 5;" onclick="add_sel_theme(7)">Pasūtīt!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col bg-dark ms-2 me-4">
            <video id="video-bg" class="rounded" autoplay muted loop id="myVideo" style="position: absolute; margin-top: -80px; z-index: 2; max-width: 900px; height: 380px;">
                <source src="./css/galerija/jubilejs.mp4" type="video/mp4">
            </video>
            <div class="container-fluid text-light pt-3 pb-3">
                <div class="row">
                    <div class="col">
                        <b class="h1 ms-2 text-center text-light bg-dark rounded" style="z-index: 5; width: 600px;">Jubilejas</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        PartyPals animatori ir jūsu ideālais partneris, lai padarītu jebkuru jubileju par neaizmirstamu! Mēs saprotam, ka jubilejas ir vērtīgs un svarīgs brīdis dzīvē, tāpēc mēs esam gatavi palīdzēt jums to svinēt ar stilu un organizēt svētku gaisotni.
                    </div>
                    <div class="col d-flex justify-content-end">
                        <ul>
                            <li>Personificēta plānošana</li>
                            <li>Tematiski dekori un dizains</li>
                            <li>Izklaides un priekšnesumi</li>
                            <li>Laba izklaide jebkura vecuma jubilāriem</li>
                        </ul>
                        <button class="btn btn-success mb-3 ms-2" style="z-index: 5;" onclick="add_sel_theme(8)">Pasūtīt!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <br><br><br><br><br><br><br>

    <?php
        include "./php/show_footer.php";
    ?>


</body>
<script src="scripts/jquery-3.7.1.min.js"></script>
<script src='scripts/log_out.js'></script>
<script src="scripts/anim_register.js"></script>
<script src="scripts/selected_theme.js"></script>
</html>
