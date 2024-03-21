<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartyPals</title>
    <link rel="stylesheet" href="css/font_family.scss">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index_style.css">

    <link rel="icon" href="css/img/header/PartyPalsIco.png">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Livvic&display=swap');
.header
{
    color: #7429D4;
}
.small_hr_left
{
    height: 12px;
    width: 110px;
    background-color: #BABABA;
    border: 0;
    float: left;
}
.small_hr_right
{
    height: 12px;
    width: 110px;
    background-color: #BABABA;
    border: 0;
    float: right;
}
.left_text
{
    border-radius: 25px 0px 0px 25px;
    float: right;
}
.right_photo img
{
    margin-top: 48px;
    border-radius: 0px 25px 25px 0px;
    float: left;
    width: 300px; 
    height: 274px;
}
.right_text
{
    border-radius: 0px 25px 25px 0px;
    float: left;
}
.left_photo img
{
    margin-top: 48px;
    border-radius: 25px 0px 0px 25px;
    float: right;
    width: 300px; 
    height: 274px;
}
</style>

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

    <?php
        include "./php/show_anim_reg.php";
    ?>

    <div class="container mt-5">
    <p class="h1 text-center text-light"><b>PartyPals kompānija</b></p>
        <div class="row mt-5 pe-5">
            <div class="left_text col mt-5 text-start text-dark bg-light">
                <p class="header h1">PartyPals uzņēmums</p>
                <hr class="small_hr_left"><br><br>
                <p class="small_text h5"><b>PartyPals</b> ir uzņēmums, kas specializējas svētku organizēšanā, piedāvājot unikālus un aizraujošus animatoru pakalpojumus. Mūsu komanda ir pilna ar radošiem talantiem, kuri ir gatavi padarīt jūsu pasākumu neaizmirstamu un dzīvot pilnu prieka un smieklu.</p>
            </div>
            <div class="right_photo col">
                <img src="./css/galerija/partPals.jpg" alt="Placeholder">
            </div>
        </div>
        <div class="row mt-5 pe-5">
            <div class="left_photo col">
                <img src="./css/galerija/ideas.jpg" alt="Placeholder">
            </div>
            <div class="right_text col mt-5 text-end text-dark bg-light">
                <p class="header h1">Radošums katrā pasākumā</p>
                <hr class="small_hr_right"><br><br>
                <p class="small_text h5"><b>Katrs pasākums</b>, ko mēs organizējam, ir pilns ar radošumu un jaunrades. Mūsu animatori ir ne tikai prasmīgi profesionāļi, bet arī radoši talanti, kas spēj radīt brīnumainas unikālas pieredzes jūsu viesiem. Ar PartyPals, jūs varat būt droši, ka jūsu pasākums būs piepildīts ar prieku un dzīvību.</p>
            </div>
        </div>
        <div class="row mt-5 pe-5">
            <div class="left_text col mt-5 text-start text-dark bg-light">
                <p class="header h1">Katra pasākuma individualitāte</p>
                <hr class="small_hr_left"><br><br>
                <p class="small_text h5"><b>Katrs pasākums ir unikāls</b>, tāpēc mēs pielāgojam savus pakalpojumus, lai atbilstu tieši jūsu vajadzībām un vēlmēm. Neatkarīgi no tā, vai tas ir bērnu dzimšanas dienas svinības vai uzņēmuma ballīte, mēs strādājam, lai nodrošinātu, ka katrs detalizējums ir perfekti izstrādāts un atbilst jūsu gaidījumiem.</p>
            </div>
            <div class="right_photo col">
                <img src="./css/galerija/individual.jpeg" alt="Placeholder">
            </div>
        </div>
        <div class="row mt-5 pe-5">
            <div class="left_photo col">
                <img src="./css/galerija/profi.jpg" alt="Placeholder">
            </div>
            <div class="right_text col mt-5 text-end text-dark bg-light">
                <p class="header h1">Profesionālisms un Uzticamība</p>
                <hr class="small_hr_right"><br><br>
                <p class="small_text h5"><b>Ar ilggadēju pieredzi svētku nozarē</b>, PartyPals ir uzņēmums, kuram varat uzticēties. Mūsu profesionālie pakalpojumi un uzmanība pret detalēm nodrošina, ka jūsu pasākums tiek organizēts ar augstāko standartu atbilstoši jūsu prasībām. Mēs esam šeit, lai jums palīdzētu katru soli ceļā uz jūsu sapņu pasākumu.</p>
            </div>
        </div>
    </div>
    <?php
        include "./php/show_footer.php";
    ?>
</div>

</body>
<script src="scripts/jquery-3.7.1.min.js"></script>
<script src='scripts/log_out.js'></script>
<script src="scripts/anim_register.js"></script>
</html>