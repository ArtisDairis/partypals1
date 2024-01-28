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
.apraksts
{
    margin-top: 10%;
    width: 90%;
    background-color: blue;
    margin-left: auto;
    margin-right: auto;
}
.left_apr
{
    float: left;
    width: 45%;
    text-align: center;
}
.left_apr p
{
    font-weight: 600;
}
.right_apr
{
    float: right;
    width: 45%;
}
.animator_img
{
    border: 6px double black;
    width: 400px;
    height: 600px;
    box-shadow: 3px 4px rgba(00, 00, 00, 0.3);
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
        <?php
            include "php/animators/info_animators.php";
        ?>
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