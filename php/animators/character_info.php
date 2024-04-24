<?php
include "../connection.php";

$char_id = $_POST['char_id'];

$sql_about_char = "SELECT * FROM `characters` WHERE `id` = ".$char_id;
$result_about_char = $conn->query($sql_about_char);
            
if ($result_about_char) 
{
    if ($result_about_char->num_rows > 0) 
    {
        $row_about_char = $result_about_char->fetch_assoc();
        echo'
        <div class="container">
            <p class="h4">Lomas apraksts</p>
                <div class="row rounded" style="background-color: #333333; height: 290px;">
                    <div class="col mt-2">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <i class="fa-solid fa-pen me-2" style="padding-top: -10px;"></i>
                                    <input id="edit_name" type="text" class="h3 border-0" value="'.$row_about_char['char_name'].'" style="background-color: #333333;" oninput="update_char_data('.$row_about_char['id'].', `char_name`)">
                                </div>
                            </div>
                        </div>
                        <div class="row ms-2">
                            <span class="h5 mt-2">Tēmas</span>
                            <div class="col">
                            ';
                            $theme_array = explode(",", $row_about_char['theme']);
                            foreach ($theme_array as $theme) {
                                $sql_theme = "SELECT * FROM `theme` WHERE `id` = ?";
                                $stmt = $conn->prepare($sql_theme);
                                $stmt->bind_param("i", $theme);
                                $stmt->execute();
                                $result_theme = $stmt->get_result();
                                
                                if ($result_theme->num_rows > 0) 
                                {
                                    $row_theme = $result_theme->fetch_assoc();
                                    echo "<span class='me-3'>" . $row_theme['name'] . "</span>";
                                }
                                $stmt->close();
                            }
                            echo'
                            </div>
                        </div>
                        <div class="row ms-2">
                            <span class="h5">Apraksts</span>
                            <div class="col">
                                <i class="fa-solid fa-pen me-2 float-start" style="padding-top: -10px;"></i>
                                <textarea id="edit_about" cols="40" class="text-light border-0" style="background-color: #333333;" oninput="update_char_data('.$row_about_char['id'].', `about_char`)">'.$row_about_char['about_char'].'</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-2 me-2">
                        <div class="container">
                            <div class="row">
                                <div class="col ms-2 mt-2 me-2">
                                    <div class="row">
                                        <div class="col">
                                        ';
                                        $file_path = "../../css/img/char_img/" . $row_about_char['char_photo'];
                                        if (file_exists($file_path)) 
                                        {
                                            echo '<img class="rounded-2 mx-auto d-block" src="css/img/char_img/'.$row_about_char['char_photo'].'" alt="OOOOO" style="max-width: 200px;">';
                                        } 
                                        else 
                                        {
                                            echo '<img class="rounded-2 mx-auto d-block" src="css/img/empty.gif" alt="OOOOO" style="max-width: 200px;">';
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
        ';
    }
}
else
{
    echo "Error: " . $conn->error;
}
?>