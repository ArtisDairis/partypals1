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
.background 
{
    position: fixed;
}
.footer 
{
    position: fixed;
    bottom: 0;
    left: 0;
}
#myProgress 
{
    width: 100%;
}
#myBar 
{
    height: 15px;
    background-color: #7C18FB;
}
/* owerflows style */
#anim_list1::-webkit-scrollbar 
{
    width: 10px;
}
#anim_list1::-webkit-scrollbar-track 
{
    background: #f1f1f1;
    border-radius: 5px;
}
#anim_list1::-webkit-scrollbar-thumb 
{
    background: #343a40;
    border-radius: 5px; 
}
#anim_list1::-webkit-scrollbar-thumb:hover 
{
    background: #212529;
}

#anim_list2::-webkit-scrollbar 
{
    width: 10px;
}
#anim_list2::-webkit-scrollbar-thumb 
{
    background: #343a40;
    border-radius: 5px; 
}
#anim_list2::-webkit-scrollbar-thumb:hover 
{
    background: #212529;
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

    <div class="container mt-5 bg-dark text-light rounded" 
        style="box-shadow: 
        10px 5px 10px rgba(150, 68, 255, 0.5),
        20px 10px 20px rgba(90, 41, 153, 0.5),
        30px 15px 30px rgba(50, 23, 85, 0.5);
        width: 1000px;
    ">
        <div class="row">
        <form method="post">
            <?php
                include "./php/show_order_form.php";
            ?>
        </form>
        </div>
    </div>
    <div id="char_info" class="container" style="position:absolute; left:1500px; top:95px; width: 400px;" hidden>
        <div class="row">
            <div class="col bg-dark text-light rounded">
                <div class="container-fluid">
                    <div class="row mt-1">
                        <div class="col-1"></div>
                        <div class="col text-center">
                            <span class="h3">Tēla apraksts</span>
                        </div>
                        <div class="col-2">
                            <i class="btn text-light fa-solid fa-xmark"></i>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <img src="./css/img/char_img/clown.png" alt="" style="width: 150px;">
                        </div>
                        <div class="col text-center">
                            <span class="h5">Klauns</span>
                        </div>
                    </div>
                    <div class="row mt-3 pb-3">
                        <div class="col text-center">
                            <span>Apraksts numur 1.</span>
                        </div>
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
<script src='scripts/log_out.js'></script>
<script src="scripts/anim_register.js"></script>
<script src="scripts/order_func.js"></script>
</html>