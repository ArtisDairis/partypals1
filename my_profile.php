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
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
.form-control::placeholder 
{
    color: whitesmoke;
    opacity: 1;
}

::-webkit-scrollbar 
{
    width: 3px;
}

::-webkit-scrollbar-thumb 
{
    background-color: whitesmoke;
    border-radius: 3px;
}

::-webkit-scrollbar-track 
{
    background-color: #212121;
    border-radius: 3px;
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
.navigation span
{
    cursor: pointer;
}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover 
{
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active 
{
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

.tabcontent 
{
  animation: fadeEffect 1s; /* Fading effect takes 1 second */
}

/* Go from zero to full opacity */
@keyframes fadeEffect 
{
  from {opacity: 0;}
  to {opacity: 1;}
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
    include "php/connection.php";

    $sql = "SELECT * FROM animators WHERE `e_mail`= ?";
    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("s", $_COOKIE['e_mail']);
    
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) 
    {
        // Fetch the row
        $row = $result->fetch_assoc();

        echo'
<div class="container mt-5 text-light">
    <div class="row">
        <div class="col-3 bg-dark rounded-3 pt-3 pb-2">
            <img class="rounded-circle" src="css/img/user_img/'.$row['photo'].'" alt="OOOOO" style="width: 40px;">
            <span class="h5 ms-3">'.$row['username'].'</span>
        </div>
        <div class="col"></div>
        <div class="navigation col-4 bg-dark rounded-3 pt-3 pb-3 text-center">
            <span class="btn text-light ps-3" onclick="changeContainer(`profile`)">Profils</span>
            <span class="btn text-light ps-3" onclick="changeContainer(`character`)">Lomas</span>
            <span class="btn text-light ps-3" onclick="changeContainer(`work_days`)">Darba dienas</span>
            <span class="btn text-light ps-3" onclick="changeContainer(`about`)">Apraksts</span>
        </div>
    </div>
</div>

<div class="container mt-3 text-light bg-dark rounded-3" id="profile">
    <div class="row">
        <div class="col-3 ms-4 mt-4 me-4 mb-4">
            <img class="rounded-2 mx-auto d-block" src="css/img/user_img/'.$row['photo'].'" alt="OOOOO" style="max-width: 300px;">
            <div class="row text-center mt-2 mb-2">
                <div class="col">
                    <button type="button" class="btn btn-light text-dark">Pievienot bildi</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-danger">Dzēst bildi</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="container mt-3">
                <div class="row">
                    <p class="h2">Profila dati</p>
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-dark text-light" id="basic-addon1"><b>@</b></span>
                            <input type="text" class="form-control bg-dark text-light" placeholder="Lietotājvārds" aria-label="Username" aria-describedby="basic-addon1"
                            value="'.$row['username'].'">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text bg-dark text-light" id="basic-addon1"><b><i class="fa-solid fa-lock"></i></b></span>
                            <input type="password" class="form-control bg-dark text-light" placeholder="Parole" aria-label="Password" aria-describedby="basic-addon1"
                            value="'.$row['password'].'">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text bg-dark text-light" id="basic-addon1"><b><i class="fa-solid fa-square-envelope"></i></b></span>
                            <input type="text" class="form-control bg-dark text-light" placeholder="E-pasts" aria-label="e_mail" aria-describedby="basic-addon1"
                            value="'.$row['e_mail'].'">
                        </div>

                        <div class="input-group mb-3 mt-3">
                            <span class="input-group-text bg-dark text-light" id="basic-addon1"><b><i class="fa-solid fa-phone"></i></b></span>
                            <input type="text" class="form-control bg-dark text-light" placeholder="Tālrunis: +371" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div> 
                    <div class="col">
                        
                        <input class="form-control bg-dark text-light mb-3" type="text" name="" placeholder="Vārds" value="'.$row['name'].'">

                        <input class="form-control bg-dark text-light mb-3" type="text" name="" placeholder="Uzvārds" value="'.$row['surname'].'">
                    ';
                    $day = substr($row['age'], 8, 2);
                    $month = substr($row['age'], 5, 2);
                    $year = substr($row['age'], 0, 4);                   
                    
                    echo '
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-dark text-light" id="basic-addon1"><b>Dz. datums</b></span>
                        <select class="form-control bg-dark text-light" name="day" id="day" style="max-width: 60px;">';
                    
                    for($i = 1; $i <= 31; $i++) {
                        $selected = ($i == $day) ? 'selected' : '';
                        if($i < 10) {
                            echo "<option value='d$i' $selected>0$i</option>";
                        } else {
                            echo "<option value='d$i' $selected>$i</option>";
                        }
                    }
                    
                    echo '
                        </select>
                        <span class="input-group-text bg-dark text-light" id="basic-addon1">.</span>
                        <select class="form-control bg-dark text-light" name="month" id="month" style="max-width: 60px;">';
                    
                    for($i = 1; $i <= 12; $i++) {
                        $selected = ($i == $month) ? 'selected' : '';
                        if($i < 10) {
                            echo "<option value='m$i' $selected>0$i</option>";
                        } else {
                            echo "<option value='m$i' $selected>$i</option>";
                        }
                    }
                    
                    echo '
                        </select>
                        <span class="input-group-text bg-dark text-light" id="basic-addon1">.</span>
                        <select class="form-control bg-dark text-light" name="year" id="year" style="max-width: 80px; border-radius: 0 5px 5px 0;">';
                    
                    for($i = date("Y") - 80; $i <= date("Y"); $i++) {
                        $selected = ($i == $year) ? 'selected' : '';
                        echo "<option value='y$i' $selected>$i</option>";
                    }
                    
                    echo '
                        </select>
                        </div>

                        <button type="button" class="btn btn-success text-end float-end">Apstiprināt</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3 text-light bg-dark rounded-3" id="character" hidden>
    <div class="row pt-2 ps-3 pe-3 pb-5">
        <div class="col mt-4">
            <div class="tab rounded">
                <button class="tablinks active" onclick="openCity(event, `piev`)">Pievienot lomu</button>
                <button class="tablinks" onclick="openCity(event, `char`)">Lomas</button>
                <button class="tablinks" onclick="openCity(event, `char_about`)">Lomu apskats</button>
            </div>

            <div id="piev" class="tabcontent" style="display: block;">
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-3 ms-4 mt-4 me-4 mb-4">
                            <img class="rounded-2 mx-auto d-block" src="css/img/empty.gif" alt="OOOOO" style="max-width: 250px;">
                            <div class="row text-center mt-2 mb-2">
                                <div class="col">
                                    <button type="button" class="btn btn-light text-dark">Pievienot bildi</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-danger">Dzēst bildi</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 mt-4">
                            <div class="input-group mb-3 mt-2 position-relative">
                                <input type="text" class="cursor_open form-control bg-dark text-light pe-2" placeholder="Lomas nosaukums" aria-label="Character name" aria-describedby="basic-addon1" style="border: 0;">
                                <span class="cursor input-group-text bg-dark text-light position-absolute top-50 start-100 translate-middle-y" id="basic-addon1" style="border: 0; opacity: 0;"><b><i class="fa-solid fa-pen"></i></b></span>
                            </div>
                        </div>
                        <div class="col mt-4 ms-3 me-3">
                            <span class="h3">Apraksts</span><span> par lomu</span>
                            <div class="input-group mb-3 mt-2 position-relative">
                                <textarea class="cursor_open form-control bg-dark text-light me-3" name="" id="" cols="" rows=""></textarea>
                                <span class="cursor input-group-text bg-dark text-light position-absolute top-50 start-100 translate-middle-y" id="basic-addon1" style="border: 0; opacity: 0;"><b><i class="fa-solid fa-pen"></i></b></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="char" class="tabcontent">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                        <p class="h4 ms-2">Lomu saraksts</p>
                        <div class="container">
                            <div class="row rounded me-5" style="background-color: #333333;">
                                <div class="col">
                                    <div class="container" style="height: 250px; overflow-y:auto;"> 
                                        ';    
                                        $sql_char = "SELECT * FROM characters WHERE `worker_id` = " . $row['id'];
                                        $result_char = $conn->query($sql_char);
                                        
                                        if ($result_char) {
                                            if ($result_char->num_rows > 0) {
                                                while ($row_char = $result_char->fetch_assoc()) 
                                                {
                                                    $char_id = $row_char['id'];
                                                    $char_name = $row_char['char_name'];
                                                    echo '
                                                    <div class="row bg-dark border border-light rounded mt-2 ms-2 me-2 mb-2">
                                                        <div class="col mt-1 pt-2 pb-2">
                                                            <p class="h5">' . $char_name . '</p>
                                                        </div>
                                                        <div class="col-2 mt-2 pt-1 me-4">
                                                            <i class="divs btn text-light fa-solid fa-gear" onclick="btnSettings(this, \'' . $char_id . '\')"></i>
                                                        </div>
                                                    </div>
                                                    ';
                                                }
                                            } else {
                                                echo "No characters found for this worker.";
                                            }
                                        } else {
                                            echo "Error executing query: " . $conn->error;
                                        }
                                        echo'
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                            <p class="h4 ms-5">Izvēlaties lomas tēmas</p>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="container">
                                            <div class="row border border-light rounded mt-2 ms-2 me-2 mb-2">
                                                <div class="col mt-1 pt-2 pb-2">
                                                    <p class="h5">Pilsētas svētki</p>
                                                </div>
                                                <div class="col-2 mt-2 pt-1">
                                                    <i id="1" class="btn text-light fa-solid fa-none" onclick="btnRemAdd(this)"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row border border-light rounded mt-2 ms-2 me-2 mb-2">
                                                <div class="col mt-1 pt-2 pb-2">
                                                    <p class="h5">Pieaugušo dzimšanas diena</p>
                                                </div>
                                                <div class="col-2 mt-2 pt-1">
                                                    <i id="2" class="btn text-light fa-solid fa-none" onclick="btnRemAdd(this)"></i>
                                                </div>
                                            </div>
                                        </div>                       
                                        <div class="container">
                                            <div class="row border border-light rounded mt-2 ms-2 me-2 mb-2">
                                                <div class="col mt-1 pt-2 pb-2">
                                                    <p class="h5">Bērna dzimšanas diena</p>
                                                </div>
                                                <div class="col-2 mt-2 pt-1">
                                                    <i id="3" class="btn text-light fa-solid fa-none" onclick="btnRemAdd(this)"></i>
                                                </div>
                                            </div>
                                        </div>                       
                                        <div class="container">
                                            <div class="row border border-light rounded mt-2 ms-2 me-2 mb-2">
                                                <div class="col mt-1 pt-2 pb-2">
                                                    <p class="h5">Korporatīvi</p>
                                                </div>
                                                <div class="col-2 mt-2 pt-1">
                                                    <i id="4" class="btn text-light fa-solid fa-none" onclick="btnRemAdd(this)"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="container">
                                            <div class="row border border-light rounded mt-2 ms-2 me-2 mb-2">
                                                <div class="col mt-1 pt-2 pb-2">
                                                    <p class="h5">Kāzas</p>
                                                </div>
                                                <div class="col-2 mt-2 pt-1">
                                                    <i id="5" class="btn text-light fa-solid fa-none" onclick="btnRemAdd(this)"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row border border-light rounded mt-2 ms-2 me-2 mb-2">
                                                <div class="col mt-1 pt-2 pb-2">
                                                    <p class="h5">Pasākumi bērniem</p>
                                                </div>
                                                <div class="col-2 mt-2 pt-1">
                                                    <i id="6" class="btn text-light fa-solid fa-none" onclick="btnRemAdd(this)"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row border border-light rounded mt-2 ms-2 me-2 mb-2">
                                                <div class="col mt-1 pt-2 pb-2">
                                                    <p class="h5">Skolu pasākumi</p>
                                                </div>
                                                <div class="col-2 mt-2 pt-1">
                                                    <i id="7" class="btn text-light fa-solid fa-none" onclick="btnRemAdd(this)"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row border border-light rounded mt-2 ms-2 me-2 mb-2">
                                                <div class="col mt-1 pt-2 pb-2">
                                                    <p class="h5">Jubilejas</p>
                                                </div>
                                                <div class="col-2 mt-2 pt-1">
                                                    <i id="8" class="btn text-light fa-solid fa-none" onclick="btnRemAdd(this)"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="char_about" class="tabcontent">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <p class="h4 ms-2">Lomu saraksts</p>
                            <div class="container">
                                <div class="row me-5">
                                    <div class="col rounded" style="background-color: #333333;">
                                        <div class="container" style="height: 290px; overflow-y:auto;">     
                                        ';    
                                        $sql_char = "SELECT * FROM characters WHERE `worker_id` = " . $row['id'];
                                        $result_char = $conn->query($sql_char);
                                        
                                        if ($result_char) {
                                            if ($result_char->num_rows > 0) {
                                                while ($row_char = $result_char->fetch_assoc()) 
                                                {
                                                    $char_id = $row_char['id'];
                                                    $char_name = $row_char['char_name'];
                                                    echo '
                                                    <div class="row bg-dark border border-light rounded mt-2 ms-2 me-2 mb-2">
                                                        <div class="col mt-1 pt-2 pb-2">
                                                            <p class="h5">' . $char_name . '</p>
                                                        </div>
                                                        <div class="col-2 mt-2 pt-1 me-4">
                                                            <i class="divs btn text-light fa-solid fa-eye" onclick="btnInfo(this, \''.$char_id.'\')"></i>
                                                        </div>
                                                    </div>
                                                    ';
                                                }
                                            } else {
                                                echo "No characters found for this worker.";
                                            }
                                        } else {
                                            echo "Error executing query: " . $conn->error;
                                        }
                                        echo'
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col" id="char_info">
                        ';
                        }
                        echo'
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3 text-light bg-dark rounded-3" id="work_days" hidden>
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="row">
                <div class="col-4">
                    <p class="h4 ms-2">Darba dienu saraksts</p>
                    <div class="container">
                        <div class="row rounded me-5" style="background-color: #333333;">
                            <div class="col">
                                <div class="container" id="show_days" style="height: 250px; overflow-y:auto;">     

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <p class="h4 ms-5">Izvēlaties darba dienas</p>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                            ';
                            $days = ['Pirmdiena','Otrdiena','Trešdiena','Ceturtdiena','Piektdiena','Sestdiena','Svētdiena'];

                            $sql_days = "SELECT * FROM `animators` WHERE `e_mail` = ?";
                            $stmt_days = $conn->prepare($sql_days);
                            $stmt_days->bind_param("s", $_COOKIE['e_mail']);
                            $stmt_days->execute();
                            $result_days = $stmt_days->get_result();

                            while($row = $result_days->fetch_assoc())
                            {
                                $days_nums = explode(",", $row['work_days']);
                                for ($i=0; $i < count($days); $i++)
                                { 
                                    echo'
                                    <div class="container">
                                        <div class="row border border-light rounded mt-2 ms-2 me-2 mb-2">
                                            <div class="col mt-1 pt-2 pb-2">
                                                <p class="h5">'.$days[$i].'</p>
                                                <input type="hidden" id="days_value" value="'.$row['work_days'].'">
                                            </div>
                                            <div class="col-2 mt-2 pt-1">
                                            ';
                                            if(in_array($i + 1, $days_nums))
                                            {
                                                echo '<i class="divs btn text-light fa-solid fa-minus" onclick="btndAddRem(this, \''.($i+1).'\')"></i>';
                                            }
                                            else
                                            {
                                                echo'<i class="divs btn text-light fa-solid fa-plus" onclick="btndAddRem(this, \''.($i+1).'\')"></i>';
                                            }
                                                
                                            echo'
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                    if($i == 3)
                                    {
                                        echo'
                                        </div>
                                        <div class="col">
                                        ';
                                    }
                                }
                            }
                            echo'
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3 text-light bg-dark rounded-3" id="about" hidden>
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="row">
                    <div class="col-4 mt-3 mb-3">
                        <p class="h3">Apraksts</p>
                        <span>šis teksts būs rādīts, kad lietotāji ieies lapā "Animatori".</span>
                        <button class="btn btn-success text-light mt-4">Apstiprināt</button>
                    </div>
                    <div class="col mt-3 mb-3">
                        <textarea class="cursor_open form-control bg-dark text-light me-3" name="" id="" cols="" rows="5" placeholder="Mans vārds..."></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        ';
?>




<footer>
        <div class="footer container-fluid bg-dark text-light mt-5">
            <div class="row">
            <div class="col-2"></div>
                <div class="col pt-2 pb-2">
                    <p class="h2">Kontaktinformācija</p>
                    <p class="h6">Autors: Artis Dairis Kroičs</p>
                    <p class="h6">Tālrunis: +37129120520</p>
                    <p class="h6">E-pasts: partypals@gmail.com</p>
                </div>
                <div class="col pt-2 pb-2">
                    <p class="h2">Seko mums</p>
                    <div class="footer_cntnt">
                        <a href="#" class="ms-4"><i style="font-size: 24px;" class="fa-brands fa-square-instagram text-light"></i></a>
                        <a href="#" class="ms-4"><i style="font-size: 24px;" class="fa-brands fa-facebook text-light"></i></a>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </footer>
</div>

</body>
<script src="scripts/jquery-3.7.1.min.js"></script>
<script src='scripts/log_out.js'></script>
<script src="scripts/changecon.js"></script>
</html>