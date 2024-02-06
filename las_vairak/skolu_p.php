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
            <h1 class="card_h1_text">Skolu pasākumi</h1>

            <div>
                <table id="las_v_content">
                    <tr>
                        <td id="left_content">
                            <p>PartyPals piedāvā aizraujošus un izglītojošus pasākumus, kas ir ideāli piemēroti skolām! Mūsu komanda ir pieredzējusi darbā ar bērniem un jauniešiem, un mēs esam gatavi nodrošināt jūsu skolas pasākumu ar neaizmirstamu piedzīvojumu.</p>
                            <ul>
                                <li><b>Izglītojošas aktivitātes un lekcijas:</b> Mēs piedāvājam dažādas izglītojošas aktivitātes un lekcijas par dažādiem tematiem, kas var papildināt jūsu skolas mācību plānu un nodrošināt bērniem jaunas zināšanas un prasmes.</li>
                                <li><b>Kultūras un sporta pasākumi:</b> Vai jūs vēlaties organizēt kultūras pasākumu vai sporta dienu skolā? Mēs palīdzēsim jums radīt un vadīt šos pasākumus, lai nodrošinātu bērnu aktivitātes un pozitīvu skolas atmosfēru.</li>
                                <li><b>Darbnīcas un projektu veidošana:</b> Mēs piedāvājam dažādas radošas darbnīcas un projektu veidošanas aktivitātes, kurās bērni var izpaust savu talantu un fantāziju, veidojot un radot kaut ko jaunu un interesantu.</li>
                                <li><b>Kopienu iesaiste un sadarbība:</b> Mūsu pasākumi veicina kopienas iesaisti un sadarbību, piedāvājot bērniem iespēju strādāt kopā, mācīties no citiem un attīstīt sociālās prasmes.</li>
                            </ul>
                            <p>Uzņemiet PartyPals savā skolā, lai padarītu jebkuru pasākumu vai aktivitāti par neaizmirstamu un izglītojošu pieredzi! Mēs esam šeit, lai palīdzētu veidot labāku un aizraujošāku skolas dzīvi, kurā bērni var attīstīties, mācīties un baudīt savas mācības.</p>
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