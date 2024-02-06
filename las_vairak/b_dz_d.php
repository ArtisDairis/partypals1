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
            <h1 class="card_h1_text">Bērna dzimšanas diena</h1>

            <div>
                <table id="las_v_content">
                    <tr>
                        <td id="left_content">
                            <p>PartyPals animācijas komanda ir šeit, lai padarītu jūsu bērna dzimšanas dienu par pasaku piedzīvojumu! Mēs esam speciālisti bērnu izklaides nodrošināšanā un garantējam, ka jūsu mazais dzimšanas dienas svinētājs atstās ar smaidu sejā un daudzām lieliskām atmiņām.</p>
                            <ul>
                                <li><b>Tēmu ballītes:</b> Vai jūsu bērns vēlas dzimšanas dienas ballīti ar savu mīļāko tēmu vai varbūt ar savu mīļāko multeni? Mēs esam šeit, lai nodrošinātu tematiskas ballītes, kas atbilst jūsu bērna interesēm un fantāzijai.</li>
                                <li><b>Izklaides un spēles:</b> Mūsu animatori piedāvā dažādas bērnu izklaidi un spēles, kas piemērotas gan lieliem, gan maziem dzimšanas dienas viesiem. No konkursiem un dejām līdz pasaku stundām un rotaļām, mēs esam gatavi radīt aizraujošas aktivitātes jūsu pasākumam.</li>
                                <li><b>Burvju un izrāžu priekšnesumi:</b> Lai piešķirtu dzimšanas dienas ballītei vēl vairāk burvības, mūsu animatori piedāvā dzīvās izpildes, burvju priekšnesumus un pasaku izrādes, kas atstās bērnus sajūsmā.</li>
                            </ul>
                            <p>Ielūdziet PartyPals uz savu bērna dzimšanas dienu un pārliecinieties, ka jūsu pasākums kļūst par neaizmirstamu piedzīvojumu, kas atstās pozitīvas atmiņas gan bērnam, gan viņa draugiem un ģimenei. Sazinieties ar mums, lai plānotu un radoši izklaidētu jūsu bērna dzimšanas dienas ballīti!</p>
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