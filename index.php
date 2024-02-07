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
<header class="header">
        <?php
            include "php/show_header.php";
        ?>
    </header>
<body onscroll="removeHeader()" id="body_id">

                    
        <br><br><br><br><br>

    <article>
        <div id="parmums">
            <h2><i>Kas ir PartyPals</i></h2>
            <p><b>PartyPals ir uzņēmums, kas specializējas svētku organizēšanā, piedāvājot unikālus un aizraujošus animatoru pakalpojumus. Mūsu komanda ir pilna ar radošiem talantiem, kuri ir gatavi padarīt jūsu pasākumu neaizmirstamu un dzīvot pilnu prieka un smieklu.</b></p>
        </div>

        <div id="piedavajumi">
            <h2>Galerija</h2>
            <img id="galery_img" src="galerija/party6.jpg" alt="No image!">
        </div>

        <?php
            include "php/show_login.php";
        ?>

        <div id="our_info">
            <h2>Kāpēc tieši mēs!</h2>
            <p><b>Mūsu kompānija, 'PartyPals', izceļas kā ideāla izvēle, sniedzot neaizmirstamus brīžus jūsu pasākumam. Izvēloties mūsu animāciju un aktierus bērnu vai citiem svētkiem, jūs saņemat ne tikai profesionālu izklaides pakalpojumu, bet arī īpašu un radošu pieredzi. Kāpēc tieši mēs?</b></p>

            <ul>
                <li><b>Profesionālisms: Mūsu animātori ir augsti kvalificēti un pieredzējuši, radot aizraujošas un izglītojošas izklaides programmās.</b></li>
                <li><b>Radošums: Mūsu komanda pievērš uzmanību detaļām, radot unikālus un aizraujošus stāstus, kas piesaistīs gan bērnus, gan pieaugušos.</b></li>
                <li><b>Plaša Izvēle: Piedāvājam dažādus animācijas un aktieru pakalpojumus, lai atbilstu jūsu pasākuma tematikai un vajadzībām.</b></li>
                <li><b>Individualitāte: Mēs uzskatām katru pasākumu par īpašu, pielāgojot mūsu sniegumu, lai atspoguļotu jūsu un jūsu viesu personības.</b></li>
                <li><b>Uzticamība: Esam uzticams partneris, nodrošinot laicīgu un augstas kvalitātes pakalpojumu katrā pasākumā.</b></li>
            </ul>
            <p><b>Izvēloties 'PartyPals', jūs iegūsiet ne tikai animātorus, bet arī garantiju uz jautrību, smiekliem un neaizmirstamām atmiņām jūsu pasākumā!</b></p>

            <button id="pieteikt"><a href="pieteikt.php?tema=1">Pieteikt</a></button>
        </div>

        <!-- <div id="chat_div">
            <button id="chat_btn" onclick="openChatModal()"><img src="css/img/header/chat_ico.png" alt="No photo!" id="chat_img"></button>

            <div id="chat_modal">
                <div id="chatmodal-content">
                    <span id="chat_nos">Sarakste</span>
                    <span class="close" onclick="closeChatModal()">&times;</span>
                    
                    <div id="chat-box-content">
                        <div id="chat_left">
                            <table>
                                <tr>
                                    <th class="nosauk">Lietotāji</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="search" name="nicknameSearch" id="nickname">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="chat_right">
                            <table>
                                <tr>
                                    <th class="nosauk">Sarakste</th>
                                </tr>
                                <tr>
                                    <td>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </article>
        
        


    <script src="scripts/size.js"></script>
    <script src="scripts/sign_in.js"></script>
    <script src="scripts/galery.js"></script>
    <script src="scripts/chat.js"></script>
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