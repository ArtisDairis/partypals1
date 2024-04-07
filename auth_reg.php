<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartyPals</title>
    <link rel="stylesheet" href="css/font_family.scss">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="icon" href="css/img/header/PartyPalsIco.png">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Livvic&display=swap');
body
{
    overflow: hidden;
}

.container1
{
    margin-top: 6vw;
    background-color: #fff;
    border-radius: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
}

.container1 p
{
    font-size: 14px;
    line-height: 20px;
    letter-spacing: 0.3px;
    margin: 20px 0;
}

.container1 a
{
    color: #333;
    font-size: 13px;
    text-decoration: none;
    margin: 15px 0 10px;
}

.container1 button
{
    background-color: #512da8;
    color: #fff;
    font-size: 12px;
    padding: 10px 45px;
    border: 1px solid transparent;
    border-radius: 8px;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-top: 10px;
    cursor: pointer;
}

.container1 button.hidden
{
    background-color: transparent;
    border-color: #fff;
}

.container1 form
{
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    height: 100%;
}

.container1 input
{
    background-color: #eee;
    border: none;
    margin: 8px 0;
    padding: 10px 15px;
    font-size: 13px;
    border-radius: 8px;
    width: 100%;
    outline: none;
}

.form-container
{
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
}

.sign-in
{
    left: 0;
    width: 50%;
    z-index: 2;
}

.container1.active .sign-in
{
    transform: translateX(100%);
}

.sign-up
{
    left: 0;
    width: 50%;
    opacity: 0;
    z-index: 1;
}

@keyframes moveLoginForm
{
    0%, 49.99%
    {
        opacity: 0;
        z-index: 1;
    }
    50%, 100%
    {
        opacity: 1;
        z-index: 5;
    }
}

.container1.active .sign-up
{
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
    animation: moveLoginForm 0.6s;
}

.social-icons
{
    margin: 20px 0;
}

.social-icons a
{
    border: 1px solid #ccc;
    border-radius: 20%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 3px;
    width: 40px;
    height: 40px;
}

.toggle-container
{
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: all 0.6s ease-in-out;
    border-radius: 150px 0 0 100px;
    z-index: 1000;
}

.container1.active .toggle-container
{
    transform: translateX(-100%);
    border-radius: 0 150px 100px 0;
}

.toggle
{
    background-color: #512da8;
    height: 100%;
    background: linear-gradient(to right, #5c6bc0, #512da8);
    color: #fff;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateX(0);
    transition: all 0.6s ease-in-out;
}

.container1.active .toggle
{
    transform: translateX(50%);
}

.toggle-panel
{
    position: absolute;
    width: 50%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 30px;
    text-align: center;
    top: 0;
    transform: translateX(0);
    transition: all 0.6s ease-in-out;
}

.toggle-left
{
    transform: translateX(-200%);
}

.container1.active .toggle-left
{
    transform: translateX(0);
}

.toggle-right
{
    right: 0;
    transform: translateX(0);
}

.container1.active .toggle-right
{
    transform: translateX(200%);
}

/* Modal Container */
#modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000; /* Ensure modal appears above other content */
}

/* Modal Content Container */
#modal .container-fluid {
    width: 80%; /* Adjust the width as needed */
    max-width: 600px; /* Maximum width for modal */
    background-color: #fff; /* White background */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Drop shadow effect */
}

/* Modal Heading */
#modal h2 {
    margin-top: 0;
    color: #333; /* Heading color */
}

/* Close Button */
.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    font-size: 20px;
    color: #666; /* Close button color */
}


.footer 
{
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #333;
    color: #fff;
    padding: 20px;
}
</style>
<body>

<?php
    include "php/show_header.php";
?>

<div class="background">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <br><br>

    <?php
        include "./php/show_anim_reg.php";
    ?>

    <div class="container container1" id="container">
        <div class="form-container sign-up">
            <form method="post">
                <h1>Izveidot kontu</h1>

                <p>izmanto savu e-pastu un paroli</p>
                <input type="text" id="username_reg" placeholder="Lietotājvārds">
                <input type="email" id="e_mail_reg" placeholder="E-pasts">
                <input type="password" id="pass_reg" placeholder="Parole">
                <button id="register_btn">Reģistrēties</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="post">
                <h1>Autorizēties</h1>

                <p>izmanto savu e-pastu un paroli</p>
                <input type="email" id="e_mail_auth" placeholder="E-pasts" value="artisdairis@gmail.com">
                <input type="password" id="pass_auth" placeholder="Parole" value="partypals2023">
                <p onclick="openModal()" class="" style="cursor: pointer;">Aizmirsi savu paroli?</p>
                <button id="auth_btn">Autorizēties</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Laipni lūdzam atpakaļ!</h1>
                    <p>Ievadiet savu personīgo informāciju, lai izmantotu visas vietnes funkcijas</p>
                    <button class="hidden" id="login">Autorizēties</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Sveiks draugs!</h1>
                    <p>Reģistrējieties ar savu personīgo informāciju, lai izmantotu visas vietnes funkcijās</p>
                    <button class="hidden" id="register">Reģistrēties</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal" hidden>
        <div class="container-fluid bg-light rounded">
            <div class="row">
                <div class="col">
                    <h2>Aizmirsu paroli!</h2>
                </div>
                <div class="col">
                    <i class="fa-solid fa-xmark mt-2 me-3 float-end" onclick="closeModal()" style="font-size: larger; cursor: pointer;"></i>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <input type="text" class="float-end rounded" placeholder="Lietotājvārds">
                </div>
                <div class="col">
                    <input type="text" class="rounded" placeholder="E-pasts">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col d-flex justify-content-center">
                    <button class="btn bg-success text-light">Apstiprināt</button>
                </div>
            </div>
        </div>
    </div>

</div>



    <?php
        include "./php/show_footer.php";
    ?>
</body>
<script src="scripts/jquery-3.7.1.min.js"></script>
<script src="scripts/sign_in.js"></script>
<script src="scripts/anim_register.js"></script>
</html>