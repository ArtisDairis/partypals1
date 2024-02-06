<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartyPals</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Livvic:wght@100&family=Lobster&display=swap" rel="stylesheet">
</head>
<body onscroll="removeHeader()" id="body_id">
    <header class="header">
        <?php
            include "../php/lasv_show_header.php";
        ?>
    </header>

        <br><br><br><br><br>
        
    <?php
        include "../php/show_login.php";
    ?>

    <article>
        <div>
            <h1 class="card_h1_text">Kāzas</h1>

            <div>
                <table id="las_v_content">
                    <tr>
                        <td id="left_content">
                            <p>PartyPals ir jūsu uzaicinājuma atbildes krājēji, lai padarītu jūsu kāzas par neaizmirstamu un burvīgu notikumu! Mēs esam šeit, lai nodrošinātu, ka jūsu lielā diena ir pilna ar prieku, smiekliem un romantiķi pārbagātu atmosfēru.</p>
                            <ul>
                                <li><b>Personīgais animācijas pakalpojums:</b> Mēs piedāvājam personīgi pielāgotu animācijas pakalpojumu, kas atbilst jūsu vēlmēm un prasībām. Vai jūs vēlaties romantisku deju sniegumu vai interaktīvu spēļu stūri kāzu viesiem? Mēs to nodrošināsim!</li>
                                <li><b>Tematiskās kāzas:</b> Vai jūs plānojat tematiskas kāzas? Neuztraucieties! Mūsu animatori ir gatavi radīt un īstenot jūsu izdomātās kāzu tematikas, neatkarīgi no tā, vai tas ir princeses pasakas stils vai vintāža elegances atmosfēra.</li>
                                <li><b>Profesionāli mūziķi un izpildītāji:</b> Lai jūsu kāzas būtu muzikāli un emocionāli piepildītas, mēs sadarbojamies ar pieredzējušiem mūziķiem un izpildītājiem, kas radīs jums un jūsu viesiem neaizmirstamus brīžus.</li>
                                <li><b>Atmiņu fotogrāfēšana un video filmēšana:</b> Mēs nodrošinām arī profesionālus fotogrāfus un videograferus, kuri palīdzēs jums saglabāt jūsu kāzu brīžus uz mūžību. No sāpīgiem asarām līdz lietišķiem smaidiem, mēs uztveram katru mirkli!</li>
                            </ul>
                            <p>Aiciniet PartyPals uz savām kāzām, lai piešķirtu jūsu svinībām papildu dzirksti un padarītu to par dienu, kas nekad neaizmirstama. Mēs esam šeit, lai jūsu kāzas būtu ne tikai burvīgas, bet arī pilnas ar mīlestību, prieku un īpašiem brīžiem!</p>
                        </td>

                        <td id="right_content">
                            <img src="photo/1.jpg" alt="Nav foto!" class="las_v_img">
                            <img src="photo/1.jpg" alt="Nav foto!" class="las_v_img">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button id="pieteikt"><a href="../pieteikt.php">Pieteikt</a></button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </article>

        


    <script src="../scripts/size.js"></script>
    <script src="../scripts/sign_in.js"></script>

</body>
<footer>
<div class="wrapper"> 
    <div class="contact_block">
            <div class="footer_title">
                <h2>Kontaktinformācija</h2>
            </div>
            <div class="footer_cntnt">
                    <p>Autors: Artis Dairis Kroičs</p> 
                    <p>Tālrunis: +37129120520</p> 
                    <p>E-pasts: partypals@gmail.com</p>
            </div>
    </div>
    <div class="social_media_block">
            <div class="footer_title">
            <h2>Seko mums</h2>
            </div>
            <div class="footer_cntnt">
                <a href="#"> <img  class = "ico_footer" src="css/img/header/instagram.png" alt="Oooops...."></a>
                <a href="#"> <img class = "ico_footer" src="css/img/header/facebook.png" alt="Oooops...."></a>
                </div>
    </div>

    </footer>
</html>