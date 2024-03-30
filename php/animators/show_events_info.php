<?php
include "../connection.php";

$sql_sel_username = "SELECT `username` FROM animators WHERE `e_mail` = ?";

$stmt = $conn->prepare($sql_sel_username);
$stmt->bind_param("s", $_COOKIE['e_mail']);
$stmt->execute();
$result_username = $stmt->get_result();

$column = isset($_POST['column']) ? $_POST['column'] : '';
$asc_desc = isset($_POST['asc_desc']) ? $_POST['asc_desc'] : '';
$event_name = isset($_POST['event_name']) ? $_POST['event_name'] : '';
$event_date = isset($_POST['event_date']) ? $_POST['event_date'] : '';
$event_status = isset($_POST['event_status']) ? $_POST['event_status'] : '';

if($result_username->num_rows > 0)
{
    $row = $result_username->fetch_assoc();
 
    $sql_sel_events = "SELECT * FROM `events` WHERE `animators_id` = ?";
 
    // Add ORDER BY clause if column and asc_desc are provided
    if (!empty($column) && !empty($asc_desc)) 
    {
        $sql_sel_events .= " ORDER BY `$column` $asc_desc";
    }
 
    if (!empty($event_name)) 
    {
        $sql_sel_events .= " AND `event_name` LIKE '%" . $conn->real_escape_string($event_name) . "%'";
    }

    if (!empty($event_date)) 
    {
        $sql_sel_events .= " AND `event_date` = '" . $conn->real_escape_string($event_date) . "'";
    }

    if (!empty($event_status)) 
    {
        $sql_sel_events .= " AND `status` = '" . $conn->real_escape_string($event_status) . "'";
    }

    $stmt_events = $conn->prepare($sql_sel_events);
    $stmt_events->bind_param("s", $row['username']);

    if ($stmt_events->execute()) 
    {
        $result_events = $stmt_events->get_result();

        while ($row_events = $result_events->fetch_assoc()) 
        {
            echo '
                <div class="container-fluid align-center mt-3 pt-2 pb-2" style="border-radius: 25px; background-color: #484848;">
                    <div class="row">
                        <div class="col mt-2">
                            <span class="">'.$row_events['event_name'].'</span>
                        </div>
                        <div class="col mt-2">
                            <span class="">'.date('H:i', strtotime($row_events['event_time_start'])).'</span>
                        </div>
                        <div class="col mt-2">
                            <span class="">'.date('H:i', strtotime($row_events['event_time_end'])).'</span>
                        </div>
                        <div class="col mt-2">
                            <span class="">'.date('d.m.Y.',strtotime($row_events['event_date'])).'</span>
                        </div>
                        <div class="col mt-2">
                            <span class="">'.$row_events['adress'].'</span>
                        </div>
                        <div class="col mt-2">
                            <select id="status_change_'.$row_events['id'].'" class="rounded bg-dark text-light ps-1 pe-1" onchange="statChange(\''.$row_events['id'].'\', this)">
                            ';
                            $enum_values = ['Saņemts','Apstiprināts','Noraidīts','Atcelts','Pabeigts'];
                            foreach ($enum_values as $value) {
                                $selected = ($value == $row_events['status']) ? 'selected' : '';
                                echo '<option value="'.$value.'" '.$selected.'>'.$value.'</option>';
                            }
                            echo '
                            </select>
                        </div>
                        <div class="col">
                            <button id="btn1" class="btn text-light" onclick="openAcc(this, \''.$row_events['id'].'p\')">Lasītvairāk <i class="ms-2 fa-solid fa-caret-down"></i></button>
                        </div>
                    </div>
                    <div id="'.$row_events['id'].'p" class="row bg-dark text-light pb-3" style="border-radius: 0 0 10px 10px;" hidden>
                        <div class="container-fluid align-center">
                            <div class="row">
                                <div class="col mt-2">
                                    <span>Vārds</span>
                                    <br>
                                    <span class="">'.$row_events['name'].'</span>
                                </div>
                                <div class="col mt-2">
                                    <span>Uzvārds</span>
                                    <br>
                                    <span class="">'.$row_events['surname'].'</span>
                                </div>
                                <div class="col mt-2">
                                    <span>Tel. num.</span>
                                    <br>
                                    <span class="">'.$row_events['phone_number'].'</span>
                                </div>
                                <div class="col mt-2">
                                    <span>E-pasts</span>
                                    <br>
                                    <span class="">'.$row_events['e_mail'].'</span>
                                </div>
                                <div class="col-6 mt-2">
                                    <span>Apraksts</span>
                                    <br>
                                    <span class="">'.$row_events['about_event'].'</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        }
    }
    else 
    {
        echo "Error executing events query: " . $stmt_events->error;
    }
}
else 
{
    echo "No animator found for this email.";
}
?>