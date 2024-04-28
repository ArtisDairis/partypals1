<?php
include "../connection.php";

$table_name = $_POST['table_name'];

if (!preg_match('/^[a-zA-Z_]+$/', $table_name)) {
    die("Invalid table name");
}

$column_labels = array(
    'name' => 'Vārds',
    'password' => 'Parole',
    'username' => 'Lietotājvārds',
    'id' => 'ID',
    'is_worker' => 'Darbinieks?',
    'surname' => 'Uzvārds',
    'phone_number' => 'Telefona num.',
    'e_mail' => 'E-pasts',
    'work_days' => 'Darba dienas',
    'about_me' => 'Par mani',
    'photo' => 'Fotogrāfija',
    'worker' => 'Strādā?',
    'adress' => 'Adrese',
    'recruit' => 'Statuss',
    'send_date' => 'Datums',
    'worker_id' => 'Darbinieka ID',
    'char_name' => 'Loma',
    'about_char' => 'Lomas apraksts',
    'theme' => 'Tēma/s',
    'char_photo' => 'Lomas attēls',
    'event_name' => 'Pasākums',
    'event_time_start' => 'Pasākuma sākums',
    'event_time_end' => 'Pasākuma beigas',
    'event_date' => 'Pasākuma datums',
    'about_event' => 'Par pasākumu',
    'animators_id' => 'Animātori',
    'status' => 'Statuss',
    'note' => 'Piezīme',
    'order_num' => 'Pasūtījumu skaits'
);

$sql = "SELECT * FROM $table_name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
    <div class="col-2 me-4 bg-dark">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col">
                    <select id="table_column_val" class="form-control mt-2 mb-3">
<?php
$row = $result->fetch_assoc();
foreach ($row as $key => $value) 
{
    $label = isset($column_labels[$key]) ? $column_labels[$key] : $key;
    echo '<option value="'. htmlspecialchars($key) .'">' . htmlspecialchars($label) . '</option>';
}
?>
                    </select>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Meklējamā vērtība" id="searchInput" oninput="renewTable(this.value)">
                        <button type="button" class="btn bg-success" onclick="searchValue()">Meklēt</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    echo '<div id="table_data" class="col bg-dark">';
    echo '<div class="container-fluid" style="height: 500px; max-height: 500px; overflow-y: auto;">';
    echo '<div class="row">';
    $row = $result->fetch_assoc();
    foreach ($row as $key => $value) {
        $label = isset($column_labels[$key]) ? $column_labels[$key] : $key;
        $style = ($key === 'id') ? 'style="max-width: 80px;"' : '';
        echo '<div class="col text-center"' . $style . '><span>' . htmlspecialchars($label) . '</span></div>';
    }
    echo '</div>';

    $result->data_seek(0);

    while ($row = $result->fetch_assoc()) 
    {
        echo '<div class="row">';
        $idValue = '';
        foreach ($row as $key => $value) 
        {
            $style = ($key === 'id') ? 'style="max-width: 80px;"' : '';
            $readonly = ($key === 'id') ? 'readonly' : '';

            if ($key === 'id') 
            {
                $idValue = htmlspecialchars($value);
            }

            if ($key === 'recruit' && $table_name === 'animators_reg') 
            {
                echo '<div class="col text-center"' . $style . '>
                        <select class="form-control border-0 text-light bg-dark" ' . $readonly . ' onchange="updateData(this.value,`' . $key . '`,`' . $table_name . '`,`' . $idValue . '`)">';
                echo '<option value="Izskata"' . ($row[$key] === 'Izskata' ? ' selected' : '') . '>Izskata</option>';
                echo '<option value="Pienemts"' . ($row[$key] === 'Pienemts' ? ' selected' : '') . '>Pienemts</option>';
                echo '<option value="Atteikts"' . ($row[$key] === 'Atteikts' ? ' selected' : '') . '>Atteikts</option>';
                echo '</select></div>';
            }
            else 
            {
                echo '<div class="col text-center"' . $style . '>
                        <input class="form-control border-0 text-light bg-dark" type="text" value="' . htmlspecialchars($value) .'" ' . $readonly . ' oninput="updateData(this.value,`' . $key . '`,`' . $table_name . '`,`' . $idValue . '`)"> 
                    </div>';
            }
        }
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
} 
else 
{
    echo "Data not found";
}

$conn->close();
?>
