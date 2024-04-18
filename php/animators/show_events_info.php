<?php
include "../connection.php";

if(isset($_COOKIE['e_mail'])) 
{
    $email = $_COOKIE['e_mail'];

    $sql_sel_username = "SELECT `username` FROM animators WHERE `e_mail` = ?";
    $stmt = $conn->prepare($sql_sel_username);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result_username = $stmt->get_result();

    if($result_username->num_rows > 0) 
    {
        $row = $result_username->fetch_assoc();
        $username = $row['username'];

        $sql_sel_events = "SELECT * FROM `events` WHERE `animators_id` = ? ORDER BY `event_date` DESC";
        
        if (!empty($_POST['column']) && !empty($_POST['asc_desc'])) 
        {
            $column = $_POST['column'];
            $asc_desc = $_POST['asc_desc'];
            $sql_sel_events .= " ORDER BY `$column` $asc_desc";
        }

        if (!empty($_POST['event_name'])) 
        {
            $event_name = '%' . $_POST['event_name'] . '%';
            $sql_sel_events .= " AND `event_name` LIKE ?";
        }

        if (!empty($_POST['event_date'])) 
        {
            $event_date = date_format(date_create($_POST['event_date']), "d.m.Y");
            $sql_sel_events .= " AND `event_date` = ?";
        }

        if (!empty($_POST['event_status'])) 
        {
            $event_status = $_POST['event_status'];
            $sql_sel_events .= " AND `status` = ?";
        }

        $stmt_events = $conn->prepare($sql_sel_events);
        $stmt_events->bind_param("s", $username);

    if ($stmt_events->execute()) 
    {
        $result_events = $stmt_events->get_result();

        while ($row_events = $result_events->fetch_assoc()) 
        {
            echo '
                <div class="container-fluid align-center mt-3 pt-2 pb-2" style="border-radius: 25px; background-color: #484848;">
                    <div class="row">
                        <div class="col mt-2 text-center">
                            <span class="">'.$row_events['event_name'].'</span>
                        </div>
                        <div class="col mt-2 text-center">
                            <input type="text" class="text-center text-light" style="background-color: #484848; border: 0;" value="'.date('H:i', strtotime($row_events['event_time_start'])).'" oninput="changeTime('.$row_events['id'].',`start`, this)">
                            <i class="fa-solid fa-square-pen"></i>
                        </div>
                        <div class="col mt-2 text-center">
                            <input type="text" class="text-center text-light" style="background-color: #484848; border: 0;" value="'.date('H:i', strtotime($row_events['event_time_end'])).'" oninput="changeTime('.$row_events['id'].',`end`, this)">
                            <i class="fa-solid fa-square-pen"></i>
                        </div>
                        <div class="col mt-2 text-center">
                            <span class="">'.date('d.m.Y.',strtotime($row_events['event_date'])).'</span>
                        </div>
                        <div class="col mt-2 text-center">
                            <span class="">'.$row_events['adress'].'</span>
                        </div>
                        <div class="col mt-2 text-center">
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
                            <button id="btn1" class="btn text-light" onclick="openAcc(this, \''.$row_events['id'].'p\')">Info <i class="ms-2 fa-solid fa-caret-down"></i></button>
                        </div>
                        <div class="col-1">
                            <button class="btn bg-danger text-light" onclick="deleteEvent('.$row_events['id'].')"><i class="fa-solid fa-trash-can"></i></button>
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
                                <div class="col-3 mt-2">
                                    <span>Apraksts</span>
                                    <br>
                                    <span class="">'.$row_events['about_event'].'</span>
                                </div>
                                <div class="col mt-2">
                                    <span>Piezīmes</span>
                                    <br>
                                    <textarea id="noteTextarea" maxlength="500" class="form-control" oninput="addNote(this, '.$row_events['id'].')">'.$row_events['note'].'</textarea>
                                    <div class="character-count">
                                        <span id="noteLength'.$row_events['id'].'">0</span><span>/500</span>
                                    </div>
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
}
else 
{
    echo "No animator found for this email.";
}
?>