<?php
// Include the database connection file
include "php/connection.php";

// Fetch data from the database
$sql = "SELECT * FROM animators";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) 
{
    while ($row = $result->fetch_assoc()) 
    {
        if($row['worker'])
        {
            echo "
            <div id='darb".$row['id']."' class='row bg-dark mt-2 mb-2 rounded-2'>
                <div class='col-2 pt-3 pb-3'>
                    <img class='rounded-3' src='css/img/user_img/".$row['photo']."' alt='Oooops...' style='width: 200px; height: 200px;'>
                </div>
                <div class='col mt-3'>
                    <div class='container-fluid'>
                        <div class='row'>
                            <div class='col-3 mb-2'>
                                <span class='h3 me-5'>".$row['name']." ".$row['surname']."</span>
                            </div>
                            <div class='col mt-1'>
                                <div class='tab'>
                                    <button class='tablinks tablinks".$row['id']."' onclick='openCity(event, \"Apraksts\", ".$row['id'].")'>Apraksts</button>
            ";
            $sql_char = "SELECT * FROM characters WHERE `worker_id` = ".$row['id'];
            $result_char = $conn->query($sql_char);

            if ($result_char->num_rows > 0) 
            {
                while ($row_char = $result_char->fetch_assoc())
                {
                    echo "
                    <button class='tablinks tablinks".$row_char['worker_id']."' onclick='openCity(event, \"".$row_char['char_name']."\", ".$row_char['worker_id'].")'>".$row_char['char_name']."</button>
                    ";
                }
            }
            echo"
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='container-fluid'>
                        <div class='row'>
                            <div class='col'>
                                <div id='Apraksts".$row['id']."' class='tabcontent tabcontent".$row['id']."' style='display: block;'>
                                    <span class='h5'>Apraksts:</span><br>
                                    <span>".$row['about_me']."</span>
                                </div>
            ";
            $sql_char = "SELECT * FROM characters WHERE `worker_id` = ".$row['id'];
            $result_char = $conn->query($sql_char);

            if ($result_char->num_rows > 0) 
            {
                while ($row_char = $result_char->fetch_assoc())
                {
                    echo "
                    <div id='".$row_char['char_name'].$row_char['worker_id']."' class='tabcontent tabcontent".$row_char['worker_id']."' style='display: none;'>
                        <span class='h5'>Apraksts:</span><br>
                        <span>".$row_char['about_char']."</span>
                    </div>
                    ";
                }
            }
            echo"
                            </div>
                            <div class='col'>
                                <div id='Apraksts_".$row['id']."' class='tabcontent tabcontent_".$row['id']."' style='display: block;'>
                                <span class='h5'>Darba dienas:</span><br><br>
            ";
                                $days = ['P','O','T','C','Pk','S','Sv'];
                                $days_nums = explode(",", $row['work_days']);
                                sort($days_nums);
                                foreach($days as $index => $day) 
                                {
                                    if(in_array(strval($index + 1), $days_nums)) 
                                    {
                                        echo"<span class=\"me-2 border ps-1 pt-1 pe-1 pb-1\">".$day."</span>";                                
                                    }
                                }
            echo"               
                                </div>
            ";
            $sql_char = "SELECT * FROM characters WHERE `worker_id` = ".$row['id'];
            $result_char = $conn->query($sql_char);

            if ($result_char->num_rows > 0) 
            {
                $theme = ['Pilsētas svētki','Pieaugušo dzimšanas diena','Bērna dzimšanas diena','Korporatīvi','Kāzas','Pasākumi bērniem','Skolu pasākumi','Jubilejas'];
                while ($row_char = $result_char->fetch_assoc())
                {
                    echo"
                        <div id='".$row_char['char_name']."_".$row_char['worker_id']."' class='tabcontent tabcontent_".$row_char['worker_id']."' style='display: none;'>
                        <span class='h5'>Tēmas:</span><br>
                    ";
                    $exp_char_theme = explode(",",$row_char['theme']);
                    for($i=0; $i < count($exp_char_theme); $i++)
                    {
                        for($t=0; $t < count($theme); $t++)
                        {
                            if($exp_char_theme[$i] == $t)
                            {
                                echo"<span class=\"me-2\">".$theme[$t]."</span>";
                            }
                        }
                    }
                    echo "</div>";
                }
            }
            echo"
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
    }
}

// Close the database connection
$conn->close();
?>
