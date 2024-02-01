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
<body onscroll="removeHeader()" id="body_id">
    <header class="header">
        <?php
            include "php/show_header.php";
        ?>
    </header>

        <br><br><br><br><br>

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
            <div class='modal-content'>
                
            </div>
        </div>
    </article>

        <br>
        
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
    <script src="scripts/chat.js"></script>
    <script src="scripts/pasutijumi_edit.js"></script>
    <script src="scripts/jquery-3.7.1.min.js"></script>
</body>
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
                $('.modal-content').html(response);
            },
            error: function(xhr, status, error) 
            {
                console.error(xhr.responseText);
            }
        });
    });
</script>

</html>