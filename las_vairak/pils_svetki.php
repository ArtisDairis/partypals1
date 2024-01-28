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
            <h1 class="card_h1_text">Pilsētas svētki</h1>

            <div>
                <table id="las_v_content">
                    <tr>
                        <td id="left_content">
                        PartyPals animācijas komanda ir te, lai piešķirtu jūsu pilsētas svētkiem to nepieciešamo dzirksti un neaizmirstamo izklaides elementu! Mūsu pieredzējušie un radošie animatori nodrošinās, ka jūsu pasākums kļūst par neaizmirstamu piedzīvojumu visiem klātesošajiem. Ielūdzam mūs uz jūsu pilsētas svētkiem, un šeit ir iemesli, kāpēc mēs esam tie prāti, kuriem vajadzētu piešķirt dzīvību jūsu pasākumam:
                        <ul>
                            <li><b>Interaktīvas izklaides:</b> Mūsu animatori ir eksperti interaktīvās izklaides nodrošināšanā. Viņi ievilks publiku aktivitātēs, spēlēs un konkursos, kur katra dalībnieka smaids ir garantēts.</li>
                            <li><b>Tematiskās ballītes:</b> Mēs spējam radīt un ieviest jebkuru tematu jūsu pasākumam. Vai jūs vēlaties vikingu ielas ballīti vai futūristisku telpu piedzīvojumu? Mūsu animatori ir gatavi pārvērst jūsu vēlmes par realitāti.</li>
                            <li><b>Bērnu stūrīši un darbnīcas:</b> Mēs nodrošinām aizraujošus bērnu stūrīšus un darbnīcas, kur maziem viesiem ir iespēja piedalīties radošos projektos un izklaidēties drošā vidē.</li>
                            <li><b>Dzīvās izpildes un pārsteigumi:</b> Mūsu animatori piedāvā dzīvās izpildes, tautas mūziku un pārsteigumus, kas padarīs jūsu pasākumu unikālu un neaizmirstamu.</li>
                            <li><b>Profesionālisms un dedzība:</b> Mūsu komanda ir pilna ar aizrautīgiem profesionāļiem, kuriem rūp, lai katrs moments jūsu pasākumā būtu perfekts. Mēs nodrošinām ne tikai izklaides pakalpojumus, bet arī neviltotu entuziasmu un smaidu.</li>
                        </ul>
                        <p>Ielūdzam PartyPals uz savu pilsētas svētku pulcēšanos, lai padarītu to vēl krāsaināku un dzīvīgāku! Mēs esam šeit, lai radītu neaizmirstamu izklaides pieredzi, kas pārspēs jūsu gaidas un atstās iespaidu uz ikvienu dalībnieku. Sazinieties ar mums un atvērsim kopā jaunas iespējas jūsu pasākuma veidošanā!</p>
                        </td>

                        <td id="right_content">
                            <img src="photo/1.jpg" alt="No photo!" class="las_v_img">
                            <img src="photo/1.jpg" alt="No photo!" class="las_v_img">
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
        
    <footer id="end_box">
        <div id="end_text">
            <p class="end_t"><b>Autors: Artis Dairis Kroičs</b></p>
            <p class="end_t"><b>Tālrunis: +37129120520</b></p>
            <p class="end_t"><b>E-pasts: partypals@gmail.com</b></p>
        </div>
        <div id="icon_div">
            <img src="../css/img/header/instagram.png" class="ico2" alt="Instagram">
            <img src="../css/img/header/facebook.png" class="ico2" alt="Facebook">
        </div>
    </footer>

    <script src="../scripts/size.js"></script>
    <script src="../scripts/sign_in.js"></script>

</body>
</html>