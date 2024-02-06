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
            <h1 class="card_h1_text">Korporatīvie pasākumi</h1>

            <div>
                <table id="las_v_content">
                    <tr>
                        <td id="left_content">
                            <p>PartyPals ir šeit, lai padarītu jūsu korporatīvos pasākumus par neaizmirstamu pieredzi! Mēs piedāvājam dažādas izklaides iespējas, kas padarīs jūsu pasākumu unikālu un iegūs visu dalībnieku atzinību.</p>
                            <ul>
                                <li><b>Team Building aktivitātes:</b> Mēs esam speciālisti darba grupu apvienošanā un komandas darba veicināšanā. Mūsu aktivitātes un spēles palīdzēs stiprināt savstarpējo sadarbību un uzlabot komandas darbu.</li>
                                <li><b>Korporatīvie pasākumi ar tematiku:</b> Vai jūs vēlaties, lai jūsu pasākums būtu ar noteiktu tematiku vai konceptu? Mēs esam gatavi izstrādāt un realizēt jūsu idejas, lai nodrošinātu neaizmirstamu un tematisku pieredzi jūsu komandai.</li>
                                <li><b>Profesionālie priekšnesumi un lekcijas:</b> Lai pasākumu padarītu vēl interesantāku un izglītojošāku, mēs piedāvājam profesionālus priekšnesumus un lekcijas par dažādām tēmām, kas saistītas ar uzņēmējdarbību, motivāciju un produktivitāti.</li>
                                <li><b>Izklaides un atpūtas iespējas:</b> Lai atpūtinātu un iedvesmotu jūsu komandu, mēs nodrošinām arī dažādas izklaides un atpūtas iespējas, ieskaitot dzīvās mūzikas izpildes, spa dienas un sporta aktivitātes.</li>
                            </ul>
                            <p>Uzaiciniet PartyPals uz savu korporatīvo pasākumu, lai nodrošinātu produktīvu, interesantu un aizraujošu pieredzi jūsu komandai. Mēs esam šeit, lai palīdzētu jums veidot neaizmirstamus korporatīvos pasākumus, kas stiprinās komandas garu un veicinās uzņēmuma veiksmi.</p>
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