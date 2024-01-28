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
<body onscroll="removeHeader()" onload="btnChecked1();btnChecked2();">
    <div>
        <header class="header">
            <?php
                include "php/show_header.php";
            ?>
        </header>
        <?php
            include "php/show_login.php";
        ?>
        
            <br><br><br><br><br>
        
        <article>
            <div>
                <?php
                    include "php/info_mans_konts.php";
                ?>
            </div>
        </article>

        <footer id="end_box">
            <div id="end_text">
                <p class="end_t"><b>Autors: Artis Dairis Kroičs</b></p>
                <p class="end_t"><b>Tālrunis: +37129120520</b></p>
                <p class="end_t"><b>E-pasts: partypals@gmail.com</b></p>
            </div>
            <div id="icon_div">
                <img src="css/img/header/instagram.png" class="ico2" alt="Instagram">
                <img src="css/img/header/facebook.png" class="ico2" alt="Facebook">
            </div>
        </footer>

    </div>

    <script src="scripts/profile.js"></script>
    <script src="scripts/size.js"></script>
    <script src="scripts/sign_in.js"></script>
</body>
</html>