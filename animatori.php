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
<style>
.darb_card {
    margin-top: 15%;
    width: 80%;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}

.box 
{
    width: 250px;
    height: 370px;
    border-radius: 15px;
    background-color: rgba(0, 0, 0, 0.4);
    margin: 0 15px 40px; /* Adjust the margins as needed */
}
.card_img
{
    margin-top: -20px;
    width: 190px;
    height: 250px;
    margin-left:auto;
    margin-right:auto;
}
.btn_darb
{
    font-weight: 700;
    color: black;
    text-decoration: none;
}
.btn_darb:hover
{
    color: rgba(00,00,00, 0.5);
}
.visible
{
    visibility: hidden;
}
</style>
<body onscroll="removeHeader()">
    <header class="header">
        <?php
            include "php/show_header.php";
        ?>

        <?php
            include "php/show_login.php";
        ?>
    </header>

    <article>
        <div class="darb_card">
            <?php
                include "php/animators/show_animators.php";
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

    <script src="scripts/size.js"></script>
    <script src="scripts/sign_in.js"></script>
</body>
</html>