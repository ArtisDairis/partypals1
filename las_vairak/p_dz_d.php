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
            <h1 class="card_h1_text">Pieaugušo dzimšanas diena</h1>

            <div>
                <table id="las_v_content">
                    <tr>
                        <td id="left_content">
                            <p>PartyPals animācijas komanda ir šeit, lai jūsu pieaugušo dzimšanas dienu padarītu par neaizmirstamu notikumu! Mēs nodrošinām radošu un aizraujošu izklaides pieredzi visiem jūsu viesiem. Aiciniet mūs uz savu dzimšanas dienas svinību, un mēs nodrošināsim, ka katrs dalībnieks atstās ar smaidu sejā un labām atmiņām sirdī.</p>
                            <ul>
                                <li><b>Tematiskas ballītes:</b> Mēs spējam radīt un ieviest jebkuru tematu jūsu dzimšanas dienas svinībām. Vai jūs vēlaties retro ballīti vai eleganto ballīti šī gada tendencēs? Mūsu animatori ir gatavi pārvērst jūsu idejas par realitāti.</li>
                                <li><b>Interaktīvas aktivitātes:</b> Mūsu komanda piedāvā dažādas interaktīvas aktivitātes un spēles, kas jūsu viesiem garantēs neaizmirstamu izklaidi. Spēļu konkursi, burvju uzvedumi un daudz kas cits – mēs esam šeit, lai padarītu jūsu dzimšanas dienas svinības patiesi īpašas.</li>
                                <li><b>Profesionālisms un kvalitāte:</b> Mūsu animatori ir pieredzējuši profesionāļi, kuri rūpēsies par katru detalizēto svinību elementu. Mēs garantējam ne tikai izklaidi, bet arī izcilu pakalpojumu kvalitāti un uzmanību pret jūsu vēlmēm.</li>
                            </ul>
                            <p>Uzņemiet PartyPals uz savu pieaugušo dzimšanas dienu un pārliecinieties, ka jūsu svētki kļūst par neaizmirstamu notikumu, ko visi jūsu viesi novērtēs. Sazinieties ar mums, lai sāktu plānot jūsu dzimšanas dienas svinības un atklātu jaunas iespējas un idejas!</p>
                        </td>

                        <td id="right_content">
                            <img src="photo/1.jpg" alt="Nav foto!" class="las_v_img">
                            <img src="photo/1.jpg" alt="Nav foto!" class="las_v_img">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button id="pieteikt"><a href="../pieteikt.php?tema=2">Pieteikt</a></button>
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