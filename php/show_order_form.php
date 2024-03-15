<?php
    include "connection.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-2"></div>
        <div class="col mt-4 text-center">
            <div id="myProgress" class="bg-secondary rounded">
                <div id="myBar" class="rounded"></div>
            </div>
            <div class="mt-2">
                <span>
                        <a href="" class="text-light" style="text-decoration: none;">Tēmas izvēle</a>
                    <span id="anim" hidden> 
                        / <a href="" class="text-light" style="text-decoration: none;">Animatoru izvēle</a> 
                    </span>
                    <span id="private_info" hidden>
                        / <a href="" class="text-light" style="text-decoration: none;">Personāla informācija</a> 
                    </span>
                    <span id="all_info" hidden>
                        / <a href="" class="text-light" style="text-decoration: none;">Vai viss pareizi?</a>
                    </span>
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
                        <select class="mb-2 form-control is-" id="event_theme">
                            <option value="">Tēmas</option>
                            <?php
                                $sql_theme = "SELECT * FROM theme";
                                $result_theme = $conn->query($sql_theme);

                                if($result_theme->num_rows >0)
                                {
                                    while($row_theme = $result_theme->fetch_assoc())
                                    {
                                        echo "<option value=\"".$row_theme['id']."\">".$row_theme['name']."</option>";
                                    }
                                }
                            ?>
                        </select>
                        <br>
                        <input class="mb-2 form-control is-" placeholder="Pasākuma nosaukums" type="text" id="event_name">
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input class="mb-2 form-control rounded" placeholder="Norises datums" type="text" id="event_date">
                            <div class="input-group-append">
                                <i class="input-group-text bg-dark text-light border-0 fa-solid fa-calendar-days" style="font-size: 24px;"></i>
                            </div>
                        </div>
                        <br>
                        <div class="input-group">
                            <input class="mb-2 form-control rounded is-" placeholder="Pasākuma sākums" type="text" id="event_time_start">
                            <div class="input-group-append">
                                <i class="input-group-text bg-dark text-light border-0 fa-solid fa-clock" style="font-size: 24px;"></i>
                            </div>
                        </div>
                        <br>
                        <div class="input-group">
                            <input class="mb-2 form-control rounded is-" placeholder="Pasākuma beigas" type="text" id="event_time_end">
                            <div class="input-group-append">
                                <i class="input-group-text bg-dark text-light border-0 fa-solid fa-clock" style="font-size: 24px;"></i>
                            </div>
                        </div>
                        <br>
                        <button type="button" onclick="goTo(`order_anim`,`order_event`)" class="btn text-light float-end" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;"><i class="fa-solid fa-arrow-right-long" style="font-size: 38px;"></i></button>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mt-1">
                                        <div id="anim_list2" class="container pt-2 border rounded" style="width: 320px; height:290px; overflow-y: auto;">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col ms-5">
                                        <button type="button" onclick="goTo(`order_event`,`order_anim`)" class="btn text-light float-start" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;"><i class="fa-solid fa-arrow-left" style="font-size: 38px;"></i></button>
                                    </div>
                                    <div class="col me-5 text-end">
                                        <button type="button" onclick="goTo(`order_private_info`,`order_anim`)" class="btn text-light float-end" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;"><i class="fa-solid fa-arrow-right" style="font-size: 38px;"></i></button>
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
                                        <input type="text" class="rounded float-start" style="height: 40px;" placeholder="Vārds" id="u_name">
                                        <input type="text" class="rounded float-end" style="height: 40px;" placeholder="Uzvārds" id="u_surname">
                                        <input type="text" class="form-control mt-5" placeholder="Ē-pasts" id="u_e_mail">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Telefona num." id="u_phone_num">
                                        <input type="text" class="form-control" style="margin-top: 10px;" placeholder="Adrese" id="u_adress">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <textarea class="form-control" placeholder="Pāsākuma apraksts/Vēlmes" id="u_about_e" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col ms-5">
                                        <button type="button" onclick="goTo(`order_anim`,`order_private_info`)" class="btn text-light float-start" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;"><i class="fa-solid fa-arrow-left" style="font-size: 38px;"></i></button>
                                    </div>
                                    <div class="col me-5 text-end">
                                        <button type="button" onclick="goTo(`order_info`,`order_private_info`)" class="btn text-light float-end" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;"><i class="fa-solid fa-arrow-right" style="font-size: 38px;"></i></button>
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
                                    <button type="button" onclick="goTo(`order_private_info`,`order_info`)" class="btn text-light float-start" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;"><i class="fa-solid fa-arrow-left" style="font-size: 38px;"></i></button>
                                </div>
                                <div class="col me-5 text-end">
                                    <button type="submit" class="btn text-light float-end" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;"><i class="fa-solid fa-check" style="font-size: 38px;"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
    </div>
</div>