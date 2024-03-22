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
.accordion 
{
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}

.panel 
{
    padding: 0 18px;
    background-color: white;
    display: none;
    overflow: hidden;
}
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

::-webkit-scrollbar 
{
    width: 12px;
}

::-webkit-scrollbar-thumb 
{
    background-color: #A36E9E;
    border-radius: 3px;
}

::-webkit-scrollbar-track 
{
    background-color: #3E1E68;
    border-radius: 3px;
}
.tablinks
{
    margin-right: 5px;
    border-radius: 5px;
    color: whitesmoke;
    background-color: #FF3CAC;
    background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);
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

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-2 text-light rounded-3 me-3 ms-4" style="width: 370px; overflow-y: auto; max-height: 680px;">
                <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white rounded-4">
                    <div class="position-sticky">
                        <div class="list-group list-group-flush mx-3 mt-4">
                            <div class="container-fluid">
                                <div class="row text-black pt-3">
                                    <div class="col-1">
                                        <button type="button" class="btn btn-success" id="search_btn" onclick="search_anims()"><i class="fas fa-search"></i></button>
                                    </div>
                                    <div class="col">
                                        <input type="text" id="search_val" class="ms-4 mt-1 ms-2" placeholder="Meklēt">
                                    </div>
                                </div>
                            </div>
                            <?php
                                include "php/filter_anim.php";
                            ?>
                        </div>
                    </div>
                </nav>
            </div>


            <div class="col align-end text-light rounded-3 me-5">
                <div class="container" id="anim_list_show" style="overflow-y: auto; height: 680px;">
                    
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
<script src="scripts/animators_section.js"></script>
<script src="scripts/anim_register.js"></script>
<script src="scripts/search_anim.js"></script>
</html>