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
            <h1 class="card_h1_text">Jubilejas</h1>

            <div>
                <table id="las_v_content">
                    <tr>
                        <td id="left_content">
                            <p>PartyPals ir jūsu ideālais partneris, lai padarītu jebkuru jubileju par neaizmirstamu un īpašu notikumu! Mēs saprotam, ka jubilejas ir vērtīgs un svarīgs brīdis dzīvē, tāpēc mēs esam gatavi palīdzēt jums to svinēt ar stilu un svētku gaisotni.</p>
                            <ul>
                                <li><b>Personificēta plānošana:</b> Mūsu komanda strādās ar jums, lai izveidotu personalizētu un pielāgotu svinību plānu, atbilstoši jūsu jubilejas vēlmēm un prasībām.</li>
                                <li><b>Tematiski dekori un dizains:</b> Vai jūs vēlaties, lai jūsu jubileja būtu tematiskā? Mēs piedāvājam tematisku dekoru un dizainu, lai jūsu pasākums būtu unikāls un aizraujošs.</li>
                                <li><b>Izklaides un priekšnesumi:</b> Mūsu animatori un izpildītāji piedāvā dažādas izklaides un priekšnesumu iespējas, lai nodrošinātu, ka jūsu jubileja ir pilna ar smiekliem un neaizmirstamām brīžiem.</li>
                                <li><b>Gourmet virtuve un gardi ēdieni:</b> Mūsu šefpavāri un virtuves komanda nodrošinās, ka jūsu jubilejas viesi bauda garšīgus un kvalitatīvus ēdienus, kas atbilst jūsu izsmalcinātajām gaumēm.</li>
                            </ul>
                            <p>Uzņemiet PartyPals uz savu jubileju, lai padarītu to par neaizmirstamu un aizraujošu notikumu! Mēs esam šeit, lai palīdzētu jums svinēt jebkuru jubileju ar stilu un eleganci, atstājot tikai labākos iespaidus jūsu viesiem.</p>
                        </td>

                        <td id="right_content">
                            <img src="photo/1.jpg" alt="Nav foto!" class="las_v_img">
                            <img src="photo/1.jpg" alt="Nav foto!" class="las_v_img">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button id="pieteikt"><a href="../pieteikt.php?tema=8">Pieteikt</a></button>
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