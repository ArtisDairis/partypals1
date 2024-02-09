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



    <article>
        <div id="pas_content">
            <div>
                <?php
                    include "./php/pasutijumi_info.php";
                ?>
            </div>
        </div>
        <?php
            include "php/show_login.php";
        ?>
        <div id='pasutijumi_modal' class='modal'>
            <div class='modal-content3'>
                
            </div>
        </div>
    </article>

        <br>
        

    
    <script src="scripts/size.js"></script>
    <script src="scripts/sign_in.js"></script>
    <script src="scripts/chat.js"></script>
    <script src="scripts/pasutijumi_edit.js"></script>
    <script src="scripts/jquery-3.7.1.min.js"></script>
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
<script>
    $('.pasutModal').click(function(e) 
    {
        e.preventDefault();
        let m = $(this).attr('id');
        console.log(m);

        $.ajax({
            type: "post",
            url: "php/pasutijumi_modal_info.php",
            data: {
                selID: m,
            },
            dataType: "text",
            success: function(response) 
            {
                $('.modal-content3').html(response);
            },
            error: function(xhr, status, error) 
            {
                console.error(xhr.responseText);
            }
        });
    });
</script>

</html>