<?php
include "../connection.php";

$table_name = $_POST['table_name'];

if (!preg_match('/^[a-zA-Z_]+$/', $table_name)) 
{
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

if ($result->num_rows > 0) 
{
    echo '<div class="col-2 me-4 bg-dark">asd</div>';
    echo '<div class="col bg-dark">';
    echo '<div class="container-fluid" style="height: 500px; max-height: 500px; overflow-y: auto;">';
    
    echo '<div class="row">';
    $row = $result->fetch_assoc();
    foreach ($row as $key => $value) 
    {
        $label = isset($column_labels[$key]) ? $column_labels[$key] : $key;
        $style = ($key === 'id') ? 'style="max-width: 20px;"' : '';
        echo '<div class="col text-center"' . $style . '><span>' . htmlspecialchars($label) . '</span></div>';
    }
    echo '</div>';
    
    $result->data_seek(0);
    
    while ($row = $result->fetch_assoc()) 
    {
        echo '<div class="row">';
        foreach ($row as $key => $value) 
        {
            $style = ($key === 'id') ? 'style="max-width: 20px;"' : '';
            echo '<div class="col text-center"' . $style . '>
                    <input class="form-control border-0 text-light bg-dark" type="text" value="' . htmlspecialchars($value) .'"> 
                </div>';
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
