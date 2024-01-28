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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
</head>
<body>
    <div>
        <header class="header">
            <?php
                include "php/show_header.php";
            ?>
        
            <?php
                include "php/show_login.php";
            ?>
        </header>
        <br><br><br><br>
        <article>
            <div id="g_bloks">
                <div id="wrapper_left">
                    <h2>Ieplānoto pasākumu kalendārs!</h2>
                    <p><b>Esošajā lapā ir iespēja apskatīt jau pagājušos pasākumus, vai tos kuri būs.</b></p>
                    <p><b>Uzklikšķinot uz datuma var apskatīt informāciju par pasākumu!</b></p>
                </div>

                <div id="wrapper_right">
                    <header>
                        <h2 id="current_date"></h2>
                        <div class="icons">
                            <span class="material-symbols-rounded" onclick="Previous()">chevron_left</span>
                            <span class="material-symbols-rounded" onclick="Next()">chevron_right</span>
                        </div>
                    </header>
        
                    <table class="calendar">
                        <thead>
                            <tr class="weeks">
                                <th class="days">Sv</th>
                                <th class="days">P</th>
                                <th class="days">O</th>
                                <th class="days">T</th>
                                <th class="days">C</th>
                                <th class="days">Pk</th>
                                <th class="days">S</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
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
    <script src="scripts/calendar.js"></script>
    <script src="scripts/sign_in.js"></script>
</body>
</html>