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
<header class="header">
        <?php
            include "php/show_header.php";
        ?>

        <?php
            include "php/show_login.php";
        ?>
    </header>
<body onscroll="removeHeader()">


    <article>
        <div class="darb_card">
            <?php
                include "php/animators/show_animators.php";
            ?>
        </div>
    </article>

    <script src="scripts/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    
    <script src="scripts/size.js"></script>
    <script src="scripts/sign_in.js"></script>
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