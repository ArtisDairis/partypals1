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
        $sql .= " AND (INSTR(`name`, ?) AND INSTR(`surname`, ?))";
        $types .= 'ss';
        $params[] = &$first_name;
        $params[] = &$last_name;
    } 
    else 
    {
        $sql .= " AND (INSTR(`name`, ?) OR INSTR(`surname`, ?))";
        $types .= 'ss';
        $params[] = &$first_name;
        $params[] = &$last_name;
    }
}

if (!empty($days)) 
{
    if (strpos($days, ',') !== false) 
    {
        $selected_days = explode(",", $days);
        $placeholders = array_fill(0, count($selected_days), '?');
        $sql .= " AND (";
        $sql .= implode(" AND ", array_map(function ($placeholder) 
        {
            return "FIND_IN_SET($placeholder, work_days)";
        }, $placeholders));

        $sql .= ")";
        $types .= str_repeat('s', count($selected_days));

        foreach ($selected_days as &$day) 
        {
            $params[] = &$day;
        }
    } 
    else 
    {
        $sql .= " AND FIND_IN_SET(?, work_days)";
        $types .= 's';
        $params[] = &$days;
    }
}

if (!empty($theme)) {
    if(strlen($theme) > 2) {
        $split_theme = explode(",", $theme);
        $worker_ids = array(); // Store worker_ids in an array

        for ($i = 0; $i < count($split_theme); $i++) 
        {
            $sql_theme = "SELECT `worker_id` FROM `characters` WHERE FIND_IN_SET(".$conn->real_escape_string($split_theme[$i]).", theme)";
            $result_theme = $conn->query($sql_theme);

            // Fetch worker_ids and add them to the array
            while ($row_theme = $result_theme->fetch_assoc()) 
            {
                $worker_ids[] = $row_theme['worker_id'];
            }
        }
        if (!empty($worker_ids)) 
        {
            $sql .= " AND `id` IN (" . implode(",", $worker_ids) . ")";
        }
    } 
    else 
    {
        $sql_theme = "SELECT `worker_id` FROM `characters` WHERE FIND_IN_SET(".$conn->real_escape_string($theme).", theme)";
        $result_theme = $conn->query($sql_theme);

        $worker_ids = array();
        while ($row_theme = $result_theme->fetch_assoc()) 
        {
            $worker_ids[] = $row_theme['worker_id'];
        }

        if (!empty($worker_ids)) 
        {
            $sql .= " AND `id` IN (" . implode(",", $worker_ids) . ")";
        }
    }
}

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
if (!$stmt) 
{
    die("Error preparing statement: " . $conn->error);
}
if (!empty($types)) 
{
    $bind_params = array_merge(array($types), $params);
    call_user_func_array(array($stmt, 'bind_param'), $bind_params);
}

// Execute statement
if (!$stmt->execute()) 
{
    die("Error executing statement: " . $stmt->error);
}

$result = $stmt->get_result();

$data = array();

if ($result->num_rows > 0) 
{
    echo '<div class="container-fluid">';
    echo '<div class="row">';

    $count = 0;
    while ($row = $result->fetch_assoc()) 
    {
        if($row['worker'])
        {
            if($count % 2 == 0)
                echo '<div class="col-md-6">';

            ?>
            <div class="container-fluid bg-dark mt-2 mb-2 pb-3 rounded-2">
                <div id='darb<?php echo $row['id'];?>' class='row'>
                    <div class='col-2 pt-3 pb-3'>
                        <img class='rounded-3' src='css/img/user_img/<?php echo $row['photo'];?>' alt='Oooops...' style='width: 200px; height: 200px;'>
                    </div>
                    <div class='col mt-3'>
                        <div class='container-fluid'>
                            <div class='row'>
                                <div class='col-4 mb-2' style="margin-left: 100px;">
                                    <span class='h3'><?php echo $row['name']." ".$row['surname']; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class='container-fluid'>
                            <div class='row'>
                                <div class='col'>
                                    <div id='Apraksts<?php echo $row['id'];?>' style='display: block;margin-left: 100px;'>
                                        <span><?php echo $row['about_me']; ?></span>
                                    </div>
                                </div>
                                <div class='col-3' style='width: 100px;'>
                                    <div id='Apraksts_<?php echo $row['id'];?>' class="me-2" style='display: flex; justify-content: space-between; flex-wrap: wrap;'>
                                        <?php
                                        $days = ['P','O','T','C','Pk','S','Sv'];
                                        $days_nums = explode(",", $row['work_days']);
                                        sort($days_nums);
                                        foreach($days as $index => $day) 
                                        {
                                            if(in_array(strval($index + 1), $days_nums)) 
                                            {
                                                ?>
                                                <span class="border ps-1 pe-1 pb-1 mb-1" style="word-wrap: break-word;"><?php echo $day?></span>
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

                $theme = ['','Pilsētas svētki','Pieaugušo dzimšanas diena','Bērna dzimšanas diena','Korporatīvi','Kāzas','Pasākumi bērniem','Skolu pasākumi','Jubilejas'];
                $theme_ico = ['','fa-city','fa-martini-glass-citrus','fa-democrat','fa-champagne-glasses','fa-children','fa-masks-theater','fa-school','fa-cake-candles'];

                if ($result_char->num_rows > 0) 
                {
                    while ($row_char = $result_char->fetch_assoc())
                    {
                        ?>
                        <div class="row mt-2">
                            <div class="col">
                                <div class="mydivs none pt-2 pb-2 border rounded" onclick="openCharInfo(this,`<?php echo $row_char['id'] ?>`);">
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
                                            <div class="col d-flex flex-column justify-content-between" style="margin-left: 55px;">
                                                <span><?php echo $row_char['about_char'] ?></span>
                                                <button id="btn_<?php echo $row_char['id']; ?>" class="btn btn_take btn-success align-self-end" onclick="add_sel_info(<?php echo $row_char['id']; ?>)" style="z-index: 15;" <?php echo ($themeValue == "all" || $themeValue == "") ? 'disabled' : ''; ?>>Pasūtīt</button>
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

    if($count % 2 != 0)
        echo '</div>';

    $count++;
}
}

    if($count % 2 != 0)
        echo '</div>';

    echo '</div>';
    echo '</div>';
    }
else 
{
echo "No animators found.";
}
$stmt->close();
$conn->close();
?>