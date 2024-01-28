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
.darb_card 
{
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
<body onscroll="removeHeader()" onload="onLoadFunc()" id="body_id">
    <header class="header">
        <?php
            include "php/show_header.php";
        ?>
    </header>

        <br><br><br><br><br>

    <article>
        <?php
            include "php/show_login.php";
        ?>

        <div id="navigation_line">
            <button class="navigation_line_btn" id="btn1" onclick="btn1Click()">1 Tēma</button>
            <button class="navigation_line_btn" id="btn2" onclick="btn2Click()">2</button>
            <button class="navigation_line_btn" id="btn3" onclick="btn3Click()">3</button>
        </div>

        <form action="" method="Post">
            <div id="bloks1">
                <br>
                <table>
                    <tr>
                        <td>
                        <form method="POST" action="php/animators/show_piev_anim.php" id="myForm">
                            <label for="tema" class="pas_text">Tēma:</label><br>
                            <select name="tema" id="temaSelect" class="piet_inp" onchange="updateURL()">
                                <option value="1">Pilsētas svētki</option>
                                <option value="2">Pieaugušo dzimšanas diena</option>
                                <option value="3">Bērna dzimšanas diena</option>
                                <option value="4">Korporatīvi</option>
                                <option value="5">Kāzas</option>
                                <option value="6">Pasākumi bērniem</option>
                                <option value="7">Skolu pasākumi</option>
                                <option value="8">Jubilejas</option>
                            </select>
                        </form>

                        </td>
                        <td>
                            <label for="event_name" class="pas_text">Pasākuma nosaukums</label><br>
                            <input type="text" name="event_name" id="event_name" class="piet_inp">
                        </td>
                        <td>
                            <label for="event_date" class="pas_text">Pasākuma datums</label><br>
                            <input type="date" name="event_date" id="inp_date" class="piet_inp">
                        </td>
                    </tr>
                    <table>
                        <tr>
                            <td>
                                <label for="event_time_start" class="pas_text">Pasākuma sākums</label><br>
                                <input type="time" name="event_time_start" id="event_time_start" class="piet_inp">
                            </td>
                            <td>
                                <label for="event_time_end" class="pas_text">Pasākuma beigas</label><br>
                                <input type="time" name="event_time_end" id="event_time_end" class="piet_inp">
                            </td>
                        </tr>
                    </table>
                    
                    <tr>
                        <td></td>
                        <td>
                            <button class="inp_talak" onclick="btn2Click()">Turpināt</button>
                        </td>
                        <td></td>
                    </tr>
                </table>
                <br>
                
                <br><br>
            </div>
            <div id="bloks2" hidden>
                <?php
                    include "php/animators/show_piev_anim.php";
                ?>

                <br>
                <button class="inp_talak" onclick="btn1Click()">Atpakaļ</button>
                <button class="inp_talak" onclick="btn3Click()">Turpināt</button>
                <br><br>
            </div>
            <div id="bloks3" hidden>
                <table>
                    <tr>
                        <td>
                            <label for="name" class="pas_text">Vārds</label><br>
                            <input type="text" name="name" id="name" class="piet_inp">
                        </td>
                        <td>
                            <label for="surname" class="pas_text">Uzvārds</label><br>
                            <input type="text" name="surname" id="surname" class="piet_inp">
                        </td>
                        <td>
                            <label for="adress" class="pas_text">Adrese</label><br>
                            <input type="text" name="adress" id="adress" class="piet_inp">
                        </td>
                    </tr>
                    <table>
                        <tr>
                            <td>
                                <label for="e_mail" class="pas_text">E-pasts</label><br>
                                <input type="text" name="e_mail" id="e_mail" class="piet_inp">
                            </td>
                            <td>
                                <label for="about_event" class="pas_text">Apraksts par pasākumu</label><br>
                                <textarea name="about_event" id="about_event" rows="4" cols="50" style="font-family: 'Livvic', sans-serif; font-size: 20px; font-weight: 700; border-radius: 5px; margin: auto 10px 15px 10px;"></textarea>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td>
                                <label for="phone_number" class="pas_text">Telefona numurs</label><br>
                                <input type="text" name="phone_number" id="phone_number" value="+371" class="piet_inp">
                            </td>
                            <td>
                                <label for="is_global" class="pas_text">Publicēt pie mums?</label>
                                <input type="checkbox" name="is_global" id="is_global">
                            </td>
                        </tr>
                    </table>
                    
                </table>
                <br>
                <button class="inp_talak" onclick="btn2Click()">Atpakaļ</button>
                <input type="submit" class="inp_talak" value="Pabeigt">
                <br><br>
            </div>
        </form> 
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
    
    <script src="scripts/sign_in.js"></script>
    <script src="scripts/chat.js"></script>
    <script src="scripts/pieteikt.js"></script>
</body>
</html>