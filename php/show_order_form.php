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
                        <span class="btn text-light" style="text-decoration: none; cursor: pointer;" onclick="goToFromLink(`order_event`)">Tēmas izvēle</span>
                    <span id="anim" hidden> 
                        / <span class="btn text-light" style="text-decoration: none; cursor: pointer;" onclick="goToFromLink(`order_anim`)">Animatoru izvēle</span> 
                    </span>
                    <span id="private_info" hidden>
                        / <span class="btn text-light" style="text-decoration: none; cursor: pointer;" onclick="goToFromLink(`order_private_info`)">Personāla informācija</span> 
                    </span>
                    <span id="all_info" hidden>
                        / <span class="btn text-light" style="text-decoration: none; cursor: pointer;" onclick="goToFromLink(`order_info`)">Vai viss pareizi?</span>
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
                        <select class="mb-2 form-control " id="event_theme">
                            <option value="">Tēmas</option>
                            <?php
                                $get_selected_theme = $_GET['theme_id'];

                                $sql_theme = "SELECT * FROM theme";
                                $result_theme = $conn->query($sql_theme);

                                if($result_theme->num_rows >0)
                                {
                                    while($row_theme = $result_theme->fetch_assoc())
                                    {
                                        if($get_selected_theme == $row_theme['id'])
                                            echo "<option value=\"".$row_theme['id']."\" selected>".$row_theme['name']."</option>";
                                        else
                                            echo "<option value=\"".$row_theme['id']."\">".$row_theme['name']."</option>";
                                    }
                                }
                            ?>
                        </select>
                        <br>
                        <input class="mb-2 form-control " placeholder="Pasākuma nosaukums" type="text" id="event_name">
                    </div>
                    <div class="col">
                        <div class="">
                            <div class="datepicker-container input-group" style="width: 100%;">
                            <input type="text" class="date-input form-control is-" placeholder="Norises datums" id="event_date">
                            <i class="input-group-text bg-dark text-light border-0 fa-solid fa-calendar-days" style="font-size: 24px; margin-left: -3px;"></i>
                            <div class="datepicker" hidden>
                                <!-- .datepicker-header -->
                                <div class="datepicker-header">
                                <button type="button" class="prev ms-2 btn"><i class="fa-solid fa-caret-left"></i></button>

                                <div>
                                    <select class="month-input">
                                    <option>Janvāris</option>
                                    <option>Februāris</option>
                                    <option>Marts</option>
                                    <option>Aprīlis</option>
                                    <option>Majs</option>
                                    <option>Jūnijs</option>
                                    <option>Jūlijs</option>
                                    <option>Augusts</option>
                                    <option>Septembris</option>
                                    <option>Oktobris</option>
                                    <option>Novembris</option>
                                    <option>Decembris</option>
                                    </select>
                                    <input type="number" class="year-input" />
                                </div>

                                <button type="button" class="next me-2 btn"><i class="fa-solid fa-caret-right"></i></button>
                                </div>

                                <div class="days">
                                <span class="text-dark">Sv</span>
                                <span class="text-dark">P</span>
                                <span class="text-dark">O</span>
                                <span class="text-dark">T</span>
                                <span class="text-dark">C</span>
                                <span class="text-dark">Pk</span>
                                <span class="text-dark">S</span>
                                </div>
                                
                                <div class="dates"></div>
                                
                                <div class="datepicker-footer">
                                    <button type="button" class="cancel">Atcelt</button>
                                    <button type="button" class="apply">Pieteikt</button>
                                </div>
                            </div>
                        </div>

                        </div>
                        <br>
                        <div class="input-group" style="margin-top: 7px;">
                            <div class="form-control">
                                Sākums: 
                                <select id="time_start_h" class="rounded text-center" style="width: 60px; border: 0;">
                                    <?php
                                        for($i=0; $i<=23;$i++)
                                        {
                                            if($i<10)
                                            {
                                                echo "<option value=".$i.">0".$i."</option>";
                                            }
                                            else
                                            {
                                                echo "<option value=".$i.">".$i."</option>";
                                            }
                                        }
                                    ?>
                                </select>
                                <span>:</span>
                                <select id="time_start_m" class="rounded text-center" style="width: 60px; border: 0;">
                                    <?php
                                        for($i=0; $i<=59;$i++)
                                        {
                                            if($i%5==0)
                                            {
                                                if($i<10)
                                                {
                                                    echo "<option value=".$i.">0".$i."</option>";
                                                }
                                                else
                                                {
                                                    echo "<option value=".$i.">".$i."</option>";
                                                }
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            
                            <div class="input-group-append">
                                <i class="input-group-text bg-dark text-light border-0 fa-solid fa-clock" style="font-size: 24px;"></i>
                            </div>
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="form-control">
                                Beigas: 
                                <select id="time_end_h" class="rounded text-center" style="width: 60px; border: 0;">
                                    <?php
                                        for($i=0; $i<=23;$i++)
                                        {
                                            if($i<10)
                                            {
                                                echo "<option value=".$i.">0".$i."</option>";
                                            }
                                            else
                                            {
                                                if($i == 23)
                                                {
                                                    echo "<option value=".$i." selected>".$i."</option>";
                                                }
                                                else
                                                {
                                                    echo "<option value=".$i.">".$i."</option>";
                                                }
                                            }
                                        }
                                    ?>
                                </select>
                                <span>:</span>
                                <select id="time_end_m" class="rounded text-center" style="width: 60px; border: 0;">
                                    <?php
                                        for($i=0; $i<=59;$i++)
                                        {
                                            if($i%5==0)
                                            {
                                                if($i<10)
                                                {
                                                    echo "<option value=".$i.">0".$i."</option>";
                                                }
                                                else
                                                {
                                                    echo "<option value=".$i.">".$i."</option>";
                                                }
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
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
                                            <input type="text" class="rounded me-2" placeholder="Meklēt pēc vārda" oninput="cancelSearch()" id="search_anim_names">
                                            <div class="input-group-btn">
                                                <button type="button" class="bg-success text-light rounded" onclick="searchAnims()"><i class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-light">
                                        <div class="container rounded pb-1" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 300px; height: 300px;">
                                            <br>
                                            <input type="hidden" id="event_anim">
                                            <div id="anim_list1" class="container-fluid" style="overflow-y: auto; overflow-x: hidden; max-height:250px;">
                                                
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
                <?php
                include "connection.php";

                if(isset($_COOKIE['is_worker']))
                {
                    if($_COOKIE['is_worker'] == 1)
                    {
                        $sql_info = "SELECT * FROM `animators` WHERE `id` = ".$_COOKIE['id'];
                    }
                    else
                    {
                        $sql_info = "SELECT * FROM `users` WHERE `id` = ".$_COOKIE['id'];
                    }
                    $result_info = $conn->query($sql_info);
                    $row_info = $result_info->fetch_assoc();
                }
                ?>
                <div class="row mt-2">
                    <div class="col">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="rounded form-control"
                                        <?php 
                                            if(isset($row_info['name'])) 
                                                echo "value=\"". $row_info['name'] ."\""; 
                                        ?> placeholder="Vārds" id="u_name">
                                </div>
                                <div class="col">
                                    <input type="text" class="rounded form-control"
                                        <?php 
                                            if(isset($row_info['surname']))
                                                echo "value=\"". $row_info['surname'] ."\"";  
                                        ?> placeholder="Uzvārds" id="u_surname">
                                </div>
                            </div>
                        </div>
                        <input type="text" class="form-control"
                            <?php
                                if(isset($row_info['e_mail']))
                                    echo "value=\"". $row_info['e_mail'] ."\""; 
                            ?> placeholder="Ē-pasts" style="margin-top: 10px;" id="u_e_mail">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control"
                            <?php 
                                if(isset($row_info['phone_number']))
                                    echo "value=\"". $row_info['phone_number'] ."\""; 
                            ?> placeholder="Telefona num." id="u_phone_num">
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
                        <span>Tēma: </span><span id="order_theme"></span>
                        <br>
                        <span>Pasākuma nosaukums: </span><span id="order_e_name"></span>
                        <br>
                        <span>Norises datums: </span><span id="order_e_date"></span>
                        <br>
                        <span>Pasākuma sākums: </span><span id="order_e_time_start"></span>
                        <br>
                        <span>Pasākuma beigas: </span><span id="order_e_time_end"></span>
                        <br><br>
                        <span class="h5">Animatori</span>
                        <br>
                        <span id="order_anims"></span>
                    </div>
                    <div class="col pe-4 pt-3 pb-3">
                        <span class="h5">Personālā informācija</span>
                        <br>
                        <span>Vārds/Uzvārds: </span><span id="order_u_full_name"></span>
                        <br>
                        <span>Telefons: </span><span id="order_u_phone_num"></span>
                        <br>
                        <span>Ē-pasts: </span><span id="order_u_e_mail"></span>
                        <br>
                        <span>Adrese: </span><span id="order_adress"></span>
                        <br>
                        <span>Pasākuma apraksts: </span>
                        <br>
                        <span id="order_about_e"></span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col ms-5">
                        <button type="button" onclick="goTo(`order_private_info`,`order_info`)" class="btn text-light float-start" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;"><i class="fa-solid fa-arrow-left" style="font-size: 38px;"></i></button>
                    </div>
                    <div class="col me-5 text-end">
                        <button type="button" class="btn text-light float-end" style="background: linear-gradient(180deg, #9644FF 0%, #7C18FB 100%); width: 100px;" onclick="submitOrder()"><i class="fa-solid fa-check" style="font-size: 38px;"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>