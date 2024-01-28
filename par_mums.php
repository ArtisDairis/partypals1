<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartyPals</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Livvic:wght@100&family=Lobster&display=swap" rel="stylesheet">
</head>
<body onscroll="removeHeader()">
    <div>
        <header class="header">
            <?php
                include "php/show_header.php";
            ?>
        </header>
        <?php
            include "php/show_login.php";
        ?>
        
            <br><br><br><br><br>
        <div id="parmums">
            <h1>Kas ir PartyPals</h1>
            <p><b>PartyPals ir uzņēmums, kas specializējas svētku organizēšanā, piedāvājot unikālus un aizraujošus animatoru pakalpojumus. Mūsu komanda ir pilna ar radošiem talantiem, kuri ir gatavi padarīt jūsu pasākumu neaizmirstamu un dzīvot pilnu prieka un smieklu.</b></p>
            <h2>Mūsu moto</h2>
            <p><b>Mēs ticam, ka katram brīdim dzīvē ir potenciāls būt īpašam un atmiņas pilnam. PartyPals dibināšanas pamatā ir vīzija radīt neaizmirstamus un aizraujošus mirkļus, piedāvājot kvalitatīvas izklaides un notikumu pakalpojumus.</b></p>
            <h2>Kāpēc PartyPals?</h2>
            <p><b><i>Radošums un Inovācijas:</i> Mēs mīlam izpausties caur radošiem risinājumiem. Katrs pasākums ir unikāls, un mēs strādājam, lai nodrošinātu neaizmirstamu pieredzi.</b></p>
            <p><b><i>Profesionālisms un Atbildība:</i> Mūsu komanda sastāv no pieredzējušiem profesionāļiem, kuriem rūp klienta apmierinātība. Esam apņēmušies nodrošināt jūsu pasākumu veiksmīgu norisi.</b></p>
            <p><b><i>Plaša Pakalpojumu Klāsts:</i> Sniegsim visaptverošu atbalstu no idejas līdz pasākuma pabeigšanai. Piedāvājam tematiskus pasākumus, korporatīvās ballītes, dzimšanas dienas svinības un daudz ko citu.</b></p>
            <h2>Mūsu Stāsts</h2>
            <p><b>PartyPals tika dibināti ar mērķi izveidot jaunu standartu notikumu organizācijā un izklaides jomā. Kopš mūsu dibināšanas mēs esam veikuši simtiem pasākumu, radot prieku un smieklu daudzu cilvēku dzīvē.</b></p>
            <p><b>Lai arī mēs esam auguši un attīstījušies, mūsu pamatvērtības paliek nemainīgas - klientu apmierinātība ir mūsu galvenais mērķis.</b></p>
            <h2>Sazinieties ar Mums</h2>
            <p><b>Mēs esam gatavi palīdzēt jums rīkot neaizmirstamus pasākumus! Sazinieties ar mums, lai uzzinātu vairāk par mūsu pakalpojumiem un to, kā mēs varam padarīt jūsu notikumu īpašu.</b></p>
            <p><b>Paldies, ka izvēlējāties PartyPals - kopā radīsim brīnišķīgus mirkļus!</b></p>
        </div>

        <div id="end_box">
            <div id="end_text">
                <p class="end_t"><b>Autors: Artis Dairis Kroičs</b></p>
                <p class="end_t"><b>Tālrunis: +37129120520</b></p>
                <p class="end_t"><b>E-pasts: partypals@gmail.com</b></p>
            </div>
            <div id="icon_div">
                <img src="css/img/header/instagram.png" class="ico2" alt="Instagram">
                <img src="css/img/header/facebook.png" class="ico2" alt="Facebook">
            </div>
        </div>
        
    </div>

    <script src="scripts/size.js"></script>
    <script src="scripts/sign_in.js"></script>
</body>
</html>