<?php
include "../connection.php";

// Retrieve user inputs
$anims_full_name = $_POST['s_value'] ?? null;
$days = $_POST['days'] ?? null;
$theme = $_POST['theme_id'] ?? null; // 1

// Initialize SQL query and parameters
$sql = "SELECT * FROM animators WHERE 1";
$params = array();
$types = '';

// Add conditions based on user inputs
if (!empty($anims_full_name)) 
{
    $searched_value = $_POST['s_value'];
    $split_value = explode(" ", $searched_value);
    $first_name = $split_value[0];
    $last_name = end($split_value);
    if (count($split_value) > 1) 
    {
        $sql .= " AND (FIND_IN_SET(?, `name`) AND FIND_IN_SET(?, `surname`))";
        $types .= 'ss';
        $params[] = &$first_name;
        $params[] = &$last_name;
    } 
    else 
    {
        $sql .= " AND (FIND_IN_SET(?, `name`) OR FIND_IN_SET(?, `surname`))";
        $types .= 'ss';
        $params[] = &$first_name;
        $params[] = &$last_name;
    }
}

if (!empty($days)) 
{
    $sql .= " AND FIND_IN_SET(?, work_days)";
    $types .= 's';
    $params[] = &$days;
}

$split_theme = "";

if (!empty($theme)) //true
{
    $split_theme = explode(",", $theme);

    if(!empty($split_theme)) //false
    {
        for ($i=0; $i < count($split_theme); $i++) 
        { 
            $sql .= " AND EXISTS (
                SELECT `worker_id` 
                FROM `characters` 
                WHERE `theme` LIKE %?%
            )";

            $types .= 's';
            $params[] = &$split_theme[$i];
        }
    }
    else
    {
        $sql .= " AND EXISTS (
            SELECT `worker_id` 
            FROM `characters` 
            WHERE `theme` LIKE %?%
        )";

        $types .= 's';
        $params[] = &$theme;
    }

}

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}
if (!empty($types)) {
    $bind_params = array_merge(array($types), $params);
    call_user_func_array(array($stmt, 'bind_param'), $bind_params);
}

// Execute statement
if (!$stmt->execute()) {
    die("Error executing statement: " . $stmt->error);
}

$result = $stmt->get_result();

$data = array();

if ($result->num_rows > 0) 
{
    while ($row = $result->fetch_assoc()) 
    {
        if($row['worker'])
        {
            ?>
            <div class="container-fluid bg-dark mt-2 mb-2 pb-3 rounded-2">
                <div id='darb<?php echo $row['id'];?>' class='row'>
                    <div class='col-2 pt-3 pb-3'>
                        <img class='rounded-3' src='css/img/user_img/<?php echo $row['photo'];?>' alt='Oooops...' style='width: 200px; height: 200px;'>
                    </div>
                    <div class='col mt-3'>
                        <div class='container-fluid'>
                            <div class='row'>
                                <div class='col-4 mb-2'>
                                    <span class='h3 me-5'><?php echo $row['name']." ".$row['surname']; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class='container-fluid'>
                            <div class='row'>
                                <div class='col'>
                                    <div id='Apraksts<?php echo $row['id'];?>' style='display: block;'>
                                        <span><?php echo $row['about_me']; ?></span>
                                    </div>
                                </div>
                                <div class='col'>
                                    <div id='Apraksts_<?php echo $row['id'];?>' style='display: block;'>
                                    <?php
                                        $days = ['P','O','T','C','Pk','S','Sv'];
                                        $days_nums = explode(",", $row['work_days']);
                                        sort($days_nums);
                                        foreach($days as $index => $day) 
                                        {
                                            if(in_array(strval($index + 1), $days_nums)) 
                                            {
                                                ?>
                                                    <span class="me-2 border ps-1 pt-1 pe-1 pb-1"><?php echo $day?></span>  
                                                <?php                             
                                            }
                                        }     
                                    ?>      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $sql_char = "SELECT * FROM characters WHERE `worker_id` = ".$row['id'];
                $result_char = $conn->query($sql_char);

                $theme = ['Pilsētas svētki','Pieaugušo dzimšanas diena','Bērna dzimšanas diena','Korporatīvi','Kāzas','Pasākumi bērniem','Skolu pasākumi','Jubilejas'];
                $theme_ico = ['fa-city','fa-martini-glass-citrus','fa-democrat','fa-champagne-glasses','fa-children','fa-masks-theater','fa-school','fa-cake-candles'];

                if ($result_char->num_rows > 0) 
                {
                    while ($row_char = $result_char->fetch_assoc())
                    {
                        ?>
                        <div class="row mt-2">
                            <div class="col">
                                <div class="none pt-2 pb-2 border rounded" onclick="openCharInfo(this,`<?php echo $row_char['id'] ?>`);">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-3">
                                                <span class="h5"><?php echo $row_char['char_name'];?></span>
                                                <i class="fa-solid fa-chevron-down" id="ch_down_<?php echo $row_char['id'] ?>"></i>
                                            </div>
                                            <div class="col">
                                                <?php
                                                    $exp_char_theme = explode(",",$row_char['theme']);
                                                    for($i=0; $i < count($exp_char_theme); $i++)
                                                    {
                                                        for($t=0; $t < 8; $t++)
                                                        {
                                                            if($exp_char_theme[$i] == $t)
                                                            {
                                                                ?>
                                                                    <i class="fa-solid <?php echo $theme_ico[$t];?> border rounded ps-1 pt-1 pe-1 pb-1 me-2" style="color: #CCCCFF;" title="<?php echo $theme[$t];?>"></i>
                                                                <?php
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="c<?php echo $row_char['id'] ?>" class="tabcontent bg-dark" hidden>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-3">
                                                <img class='rounded-3' src='css/img/char_img/<?php echo $row_char['char_photo'];?>' alt='Oooops...' style='width: 200px; height: 200px;'>
                                            </div>
                                            <div class="col">
                                                <span><?php echo $row_char['about_char'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                
            </div>
            <?php
        }
    }
}
else 
{
    echo "No animators found.";
}
$stmt->close();
$conn->close();
?>
