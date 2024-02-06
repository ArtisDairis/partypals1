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
        
            <?php
                include "php/show_login.php";
            ?>
        </header>
<body onscroll="removeHeader()" id="body_id">


        <br><br><br><br><br>

        <article>
            <div>
                <h1>Piedāvājumu apraksts!</h1>
                <div id="cards_view">
                    <table>
                        <tr>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/1.png" alt="Nav Foto!">
                                    <p class="card_text">Pilsētas svētki</p>
                                    <a href="las_vairak/pils_svetki.php" id="v1"><button class="btn2">Lasīt vairāk</button></a>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/2.jpg" alt="Nav Foto!">
                                    <p class="card_text">Pieaugušo dzimšanas diena</p>
                                    <a href="las_vairak/p_dz_d.php" id="v2"><button class="btn2">Lasīt vairāk</button></a>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/3.jpg" alt="Nav Foto!">
                                    <p class="card_text">Bērna dzimšanas diena</p>
                                    <a href="las_vairak/b_dz_d.php" id="v3"><button class="btn2">Lasīt vairāk</button></a>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/4.png" alt="Nav Foto!">
                                    <p class="card_text">Korporatīvi</p>
                                    <a href="las_vairak/korporativi.php" id="v4"><button class="btn2">Lasīt vairāk</button></a>
                                </div>
                            </td>
                        </tr>                                                                               
                        <tr>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/5.png" alt="Nav Foto!">
                                    <p class="card_text">Kāzas</p>
                                    <a href="las_vairak/kazas.php" id="v5"><button class="btn2">Lasīt vairāk</button></a>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/6.png" alt="Nav Foto!">
                                    <p class="card_text">Pasākumi bērniem</p>
                                    <a href="las_vairak/pas_b.php" id="v6"><button class="btn2">Lasīt vairāk</button></a>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/7.jpg" alt="Nav Foto!">
                                    <p class="card_text">Skolu pasākumi</p>
                                    <a href="las_vairak/skolu_p.php" id="v7"><button class="btn2">Lasīt vairāk</button></a>
                                </div>
                            </td>
                            <td>
                                <div class="card">
                                    <img class="card_img" src="css/img/pied/8.jpg" alt="Nav Foto!">
                                    <p class="card_text">Jubilejas</p>
                                    <a href="las_vairak/jubilejas.php" id="v8"><button class="btn2">Lasīt vairāk</button></a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </article>
        <br>


    <script src="scripts/size.js"></script>
    <script src="scripts/sign_in.js"></script>
    <script src="scripts/show_las_v.js"></script>
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