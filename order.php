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
    width: 10%;
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col mt-4 text-center">
                        <div id="myProgress" class="bg-secondary rounded">
                            <div id="myBar" class="rounded"></div>
                        </div>
                        <div class="mt-2">
                            <span>
                                <a href="#" class="text-light" style="text-decoration: none;">Tēmas izvēle</a> / 
                                <a href="#" class="text-light" style="text-decoration: none;">Animatoru izvēle</a> / 
                                <a href="#" class="text-light" style="text-decoration: none;">Personāla informācija</a> /
                                <a href="#" class="text-light" style="text-decoration: none;">Vai viss pareizi?</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
            <div class="container-fluid pb-4">
                <div id="order_event" class="row">
                    <div class="col-1"></div>
                    <div class="col mt-5">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col" style="display: flex; align-items:center;">
                                    <div class="rounded-circle me-2" style="background-color:#7C18FB; width: 30px; height: 30px; position:relative;"></div><b class="h1 mt-1">Tēmas izvēle</b>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-1"></div>
                                <div class="col">
                                    <select class="mb-2 form-control is-"  name="" id="">
                                        <option value="">Tēmas</option>
                                        <option value="1">Pilsētas svētki</option>
                                    </select>
                                    <br>
                                    <input class="mb-2 form-control is-" placeholder="Pasākuma nosaukums" type="text" name="" id="">
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input class="mb-2 form-control rounded" placeholder="Norises datums" type="text" name="" id="">
                                        <div class="input-group-append">
                                            <i class="input-group-text bg-dark text-light border-0 fa-solid fa-calendar-days" style="font-size: 24px;"></i>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <input class="mb-2 form-control rounded is-" placeholder="Pasākuma sākums" type="text" name="" id="">
                                        <div class="input-group-append">
                                            <i class="input-group-text bg-dark text-light border-0 fa-solid fa-clock" style="font-size: 24px;"></i>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <input class="mb-2 form-control rounded is-" placeholder="Pasākuma beigas" type="text" name="" id="">
                                        <div class="input-group-append">
                                            <i class="input-group-text bg-dark text-light border-0 fa-solid fa-clock" style="font-size: 24px;"></i>
                                        </div>
                                    </div>
                                    <br>
                                    <button onclick="goTo(`order_anim`,`order_event`)" class="btn text-light float-end" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;"><i class="fa-solid fa-arrow-right-long" style="font-size: 38px;"></i></button>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div id="order_anim" class="row" hidden>
                    <div class="col-1"></div>
                    <div class="col">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col" style="display: flex; align-items:center;">
                                    <div class="rounded-circle me-2" style="background-color:#7C18FB; width: 30px; height: 30px; position:relative;"></div><b class="h1 mt-1">Animatoru izvēle</b>
                                </div>
                                <div class="col mt-1" style="display: flex; align-items:center;">
                                    <div class="ps-5 ms-4 input-group rounded" style="position: relative;">
                                        <input type="text" class="rounded me-2" placeholder="Meklēt pēc vārda" name="" id="">
                                        <div class="input-group-btn">
                                            <button class="bg-success text-light rounded"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-light">
                                    <div class="container rounded pb-1" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 300px; height: 300px;">
                                        <div class="row pt-2 pb-1">
                                            <div class="col">
                                                <span class="h5">Esošais saraksts</span>
                                            </div>
                                            <div class="col-2">
                                                <span class="h5"><i class="btn text-light fa-solid fa-caret-down"></i></span>
                                            </div>
                                        </div>
                                        <div id="anim_list1" class="container-fluid" style="overflow-y: auto; overflow-x: hidden; max-height:250px;">
                                            <div class="row pt-1 pb-1 mt-1 mb-1 ms-3 me-3 bg-dark rounded">
                                                <div class="col">
                                                    <span>Super-man</span>
                                                    <i class="ms-2 fa-solid fa-circle-info"></i>
                                                </div>
                                                <div class="col-3">
                                                    <i class="btn text-light fa-solid fa-minus"></i>
                                                </div>
                                            </div>
                                            <div class="row pt-1 pb-1 mt-1 mb-2 ms-3 me-3 bg-dark rounded">
                                                <div class="col">
                                                    <span>Super-man</span>
                                                    <i class="ms-2 fa-solid fa-circle-info"></i>
                                                </div>
                                                <div class="col-3">
                                                    <i class="btn text-light fa-solid fa-minus"></i>
                                                </div>
                                            </div>
                                            <div class="row pt-1 pb-1 mt-1 mb-2 ms-3 me-3 bg-dark rounded">
                                                <div class="col">
                                                    <span>Super-man</span>
                                                    <i class="ms-2 fa-solid fa-circle-info"></i>
                                                </div>
                                                <div class="col-3">
                                                    <i class="btn text-light fa-solid fa-minus"></i>
                                                </div>
                                            </div>
                                            <div class="row pt-1 pb-1 mt-1 mb-2 ms-3 me-3 bg-dark rounded">
                                                <div class="col">
                                                    <span>Super-man</span>
                                                    <i class="ms-2 fa-solid fa-circle-info"></i>
                                                </div>
                                                <div class="col-3">
                                                    <i class="btn text-light fa-solid fa-minus"></i>
                                                </div>
                                            </div>
                                            <div class="row pt-1 pb-1 mt-1 mb-2 ms-3 me-3 bg-dark rounded">
                                                <div class="col">
                                                    <span>Super-man</span>
                                                    <i class="ms-2 fa-solid fa-circle-info"></i>
                                                </div>
                                                <div class="col-3">
                                                    <i class="btn text-light fa-solid fa-minus"></i>
                                                </div>
                                            </div>
                                            <div class="row pt-1 pb-1 mt-1 mb-2 ms-3 me-3 bg-dark rounded">
                                                <div class="col">
                                                    <span>Super-man</span>
                                                    <i class="ms-2 fa-solid fa-circle-info"></i>
                                                </div>
                                                <div class="col-3">
                                                    <i class="btn text-light fa-solid fa-minus"></i>
                                                </div>
                                            </div>
                                            <div class="row pt-1 pb-1 mt-1 mb-2 ms-3 me-3 bg-dark rounded">
                                                <div class="col">
                                                    <span>Super-man</span>
                                                    <i class="ms-2 fa-solid fa-circle-info"></i>
                                                </div>
                                                <div class="col-3">
                                                    <i class="btn text-light fa-solid fa-minus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-1">
                                    <div id="anim_list2" class="container pt-2 border rounded" style="width: 320px; height:290px; overflow-y: auto;">
                                        <div class="row mb-2 border rounded ms-1 me-1" style="height: 40px;">
                                            <div class="col pt-1 ps-4">
                                                <span>Super-man</span>
                                                <i class="ms-2 fa-solid fa-circle-info"></i>
                                            </div>
                                            <div class="col-3">
                                                <i class="btn text-light fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                        <div class="row mb-2 border rounded ms-1 me-1" style="height: 40px;">
                                            <div class="col pt-1 ps-4">
                                                <span>Super-man</span>
                                                <i class="ms-2 fa-solid fa-circle-info"></i>
                                            </div>
                                            <div class="col-3">
                                                <i class="btn text-light fa-solid fa-minus"></i>
                                            </div>
                                        </div>
                                        <div class="row mb-2 border rounded ms-1 me-1" style="height: 40px;">
                                            <div class="col pt-1 ps-4">
                                                <span>Super-man</span>
                                                <i class="ms-2 fa-solid fa-circle-info"></i>
                                            </div>
                                            <div class="col-3">
                                                <i class="btn text-light fa-solid fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col ms-5">
                                    <button onclick="goTo(`order_event`,`order_anim`)" class="btn text-light float-start" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;"><i class="fa-solid fa-arrow-left" style="font-size: 38px;"></i></button>
                                </div>
                                <div class="col me-5 text-end">
                                    <button onclick="goTo(`order_private_info`,`order_anim`)" class="btn text-light float-end" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;"><i class="fa-solid fa-arrow-right" style="font-size: 38px;"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div id="order_private_info" class="row" hidden>
                    <div class="col-1"></div>
                    <div class="col mt-3">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col" style="display: flex; align-items:center;">
                                    <div class="rounded-circle me-2" style="background-color:#7C18FB; width: 30px; height: 30px; position:relative;"></div><b class="h1 mt-1">Personālā informācija</b>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="text" class="rounded float-start" style="height: 40px;" placeholder="Vārds" name="" id="">
                                    <input type="text" class="rounded float-end" style="height: 40px;" placeholder="Uzvārds" name="" id="">
                                    <input type="text" class="form-control mt-5" placeholder="Ē-pasts" name="" id="">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Telefona num." name="" id="">
                                    <input type="text" class="form-control" style="margin-top: 10px;" placeholder="Adrese" name="" id="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <textarea class="form-control" placeholder="Pāsākuma apraksts/Vēlmes" name="" id="" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col ms-5">
                                    <button onclick="goTo(`order_anim`,`order_private_info`)" class="btn text-light float-start" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;"><i class="fa-solid fa-arrow-left" style="font-size: 38px;"></i></button>
                                </div>
                                <div class="col me-5 text-end">
                                    <button onclick="goTo(`order_info`,`order_private_info`)" class="btn text-light float-end" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;"><i class="fa-solid fa-arrow-right" style="font-size: 38px;"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div id="order_info" class="row" hidden>
                    <div class="col-1"></div>
                    <div class="col mt-3">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col" style="display: flex; align-items:center;">
                                    <div class="rounded-circle me-2" style="background-color:#7C18FB; width: 30px; height: 30px; position:relative;"></div><b class="h1 mt-1">Viss ir pareizi?</b>
                                </div>
                            </div>
                            <div class="row mt-2 rounded" style="background-color:#343a40;">
                                <div class="col ps-4 pt-3 pb-3">
                                    <span class="h5">Pasākums</span>
                                    <br>
                                    <span>Tēma: </span>
                                    <br>
                                    <span>Pasākuma nosaukums: </span>
                                    <br>
                                    <span>Norises datums: </span>
                                    <br>
                                    <span>Pasākuma sākums: </span>
                                    <br>
                                    <span>Pasākuma beigas: </span>
                                    <br><br>
                                    <span class="h5">Animatori</span>
                                    <br>
                                    <span>Super-Man, Spider-Man, Klauns</span>
                                </div>
                                <div class="col pe-4 pt-3 pb-3">
                                    <span class="h5">Personālā informācija</span>
                                    <br>
                                    <span>Vārds/Uzvārds: </span>
                                    <br>
                                    <span>Telefons: </span>
                                    <br>
                                    <span>Ē-pasts: </span>
                                    <br>
                                    <span>Adrese: </span>
                                    <br>
                                    <span>Pasākuma apraksts: </span>
                                    <br>
                                    <span>Apraksts...</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col ms-5">
                                    <button onclick="goTo(`order_private_info`,`order_info`)" class="btn text-light float-start" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;"><i class="fa-solid fa-arrow-left" style="font-size: 38px;"></i></button>
                                </div>
                                <div class="col me-5 text-end">
                                    <button class="btn text-light float-end" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;"><i class="fa-solid fa-check" style="font-size: 38px;"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
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
<script src="scripts/index.js"></script>
<script src='scripts/log_out.js'></script>
<script src="scripts/anim_register.js"></script>
<script src="scripts/order_func.js"></script>
</html>