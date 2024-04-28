<?php
include "../connection.php";

$table_name = $_POST['table_name'];
$col_name = $_POST['col_name'];
$search_val = $_POST['search_val'];

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

$sql = "SELECT * FROM $table_name WHERE $col_name LIKE ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}

$search_param = "%" . $search_val . "%";
$stmt->bind_param("s", $search_param);

if (!$stmt->execute()) {
    die("Error executing statement: " . $stmt->error);
}

$result = $stmt->get_result();

if ($result->num_rows > 0) {
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

    while ($row = $result->fetch_assoc()) {
        echo '<div class="row">';
        $idValue = '';
        foreach ($row as $key => $value) {
            $style = ($key === 'id') ? 'style="max-width: 80px;"' : '';
            $readonly = ($key === 'id') ? 'readonly' : '';

            if ($key === 'id') {
                $idValue = htmlspecialchars($value);
            }

            if ($key === 'recruit' && $table_name === 'animators_reg') {
                echo '<div class="col text-center"' . $style . '>
                        <select class="form-control border-0 text-light bg-dark" ' . $readonly . ' onchange="updateData(this.value,`' . $key . '`,`' . $table_name . '`,`' . $idValue . '`)">';
                echo '<option value="Izskata">Izskata</option>';
                echo '<option value="Pienemts">Pienemts</option>';
                echo '<option value="Atteikts">Atteikts</option>';
                echo '</select></div>';
            } else {
                echo '<div class="col text-center"' . $style . '>
                        <input class="form-control border-0 text-light bg-dark" type="text" value="' . htmlspecialchars($value) .'" ' . $readonly . ' oninput="updateData(this.value,`' . $key . '`,`' . $table_name . '`,`' . $idValue . '`)"> 
                    </div>';
            }
        }
        echo '</div>';
    }

    echo '</div>'; 
} else {
    echo "No matching records found.";
}

$stmt->close();
$conn->close();
?>
