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
            <h1 class="card_h1_text">Pasākumi bērniem</h1>

            <div>
                <table id="las_v_content">
                    <tr>
                        <td id="left_content">
                            <p>PartyPals ir šeit, lai nodrošinātu, ka jūsu bērnu pasākums ir pilns ar prieku, izklaidi un neaizmirstamām atmiņām! Mūsu speciālisti bērnu izklaides jomā nodrošinās, ka jūsu pasākums kļūst par burvīgu piedzīvojumu, kas paliks bērnu atmiņās uz ilgu laiku.</p>
                            <ul>
                                <li><b>Interaktīvas spēles un aktivitātes:</b> Mūsu pieredzējušie animatori radīs un vadīs interaktīvas spēles un aktivitātes, lai bērni būtu iesaistīti un sajūtu prieku no sākuma līdz beigām.</li>
                                <li><b>Darbnīcas un radošās aktivitātes:</b> Mēs piedāvājam dažādas radošas darbnīcas, kur bērni var izpaust savu talantu un radīt savus mākslas darbus, rotaļlietas vai pat cepurītes un medaljonus!</li>
                                <li><b>Burvju šovi un uzstāšanās:</b> Mūsu burvji un izpildītāji priecēs bērnus ar aizraujošiem burvju trikiem, smieklīgiem klauniem un interaktīvām uzstāšanās, kas pārvērtīs jūsu pasākumu par neaizmirstamu piedzīvojumu.</li>
                                <li><b>Pasākumu tematizācija:</b> Vai jūs plānojat tematisku bērnu pasākumu? Neuztraucieties! Mūsu animatori varēs pielāgot pasākumu tematiku un izklaides, lai atbilstu jūsu izvēlētajam motīvam vai tēmai.</li>
                            </ul>
                            <p>Ielūdziet PartyPals uz savu bērnu pasākumu, lai garantētu, ka tas būs piepildīts ar smiekliem, prieku un neaizmirstamām atmiņām! Mēs esam šeit, lai jūsu bērni būtu laimīgi un jūs varētu baudīt katru brīdi, zinot, ka viņu izklaide ir droša un aizraujoša.</p>
                        </td>

                        <td id="right_content">
                            <img src="photo/1.jpg" alt="Nav foto!" class="las_v_img">
                            <img src="photo/1.jpg" alt="Nav foto!" class="las_v_img">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button id="pieteikt"><a href="../pieteikt.php?tema=6">Pieteikt</a></button>
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