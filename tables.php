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
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Livvic&display=swap');
.background 
{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
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
</div>
<br><br>

    <?php
        include "./php/show_anim_reg.php";
    ?>

    <div class="container-fluid mt-5">
        <div class="row bg-dark text-light">
            <div class="col-2 ms-3 pt-3 pb-3">
                <select class="form-control rounded" style="font-size: 18px;" id="tables" onchange="load_table(this.value)">
                    <option value="animators">Animatori</option>
                    <option value="animators_reg">Animatori (Pieteikumi)</option>
                    <option value="auth">Autorizācija</option>
                    <option value="characters">Lomas</option>
                    <option value="events">Pasākumi</option>
                    <option value="theme">Tēmas</option>
                    <option value="users">Lietotāji</option>
                </select>
            </div>
            <div class="col-2 ms-3 pt-3 pb-3">
                <button type="button" class="btn text-light bg-secondary" onclick="create_backup()">Izveidot rezerves kopiju</button>
            </div>
            <div class="col ms-3 pt-3 pb-3">
                <label class="btn text-light bg-secondary" for="upload_bck">Atjaunot datubāzi</label>
                <input type="file" id="upload_bck" onchange="upload_database()" hidden>
            </div>
        </div>
        <div class="row text-light mt-5" >
            <div class="container fluid">
                <div id="posted_table" class="row" >
                    
                </div>
            </div>
        </div>
    </div>

    <?php
        include "./php/show_footer.php";
    ?>
</div>

</body>
<script src="scripts/jquery-3.7.1.min.js"></script>
<script src='scripts/log_out.js'></script>
<script src="scripts/changecon.js"></script>
<script src="scripts/anim_register.js"></script>
<script src="scripts/admin.js"></script>
</html>