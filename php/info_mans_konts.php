<?php
if (isset($_SESSION['username']) && $_SESSION['is_worker'] == 1) 
{
    // User is logged in and is a worker
    $username = $_SESSION['username'];
    
    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM animatori WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) 
    {
        $row = $result->fetch_assoc();

        // Output the information upload_info_profile.php
        echo '
            <form action="php/upload_info_profile.php" method="post">
            <div id="profile">
                <div id="profile_content">
                    <table id="profile_info">
                        <tr>
                            <td class="p_info_box">
                                <label for="username">Lietotājvārds:</label><br>
                                <input type="text" class="ac_text" name="username" value="'.$row['username'].'">      
                                <br>
                                <label for="name">Vārds</label><br>
                                <input type="text" class="ac_text" name="name" value="'.$row['name'].'">
                                <br>
                                <label for="surname">Uzvārds</label><br>
                                <input type="text" class="ac_text" name="surname" value="'.$row['surname'].'">
                                <br>
                                <label for="gender">Dzimums:</label><br>
                                <select name="gender" id="gender_1" class="ac_text" value="'.$row['gender'].'">
                                    <option value="male">Vīrietis</option>
                                    <option value="female">Sieviete</option>
                                </select>
                                <br>
                                <label for="password">Parole:</label><br>
                                <input type="password" class="ac_text" name="password" value="'.$row['password'].'" id="password">
                                <input type="checkbox" name="show_password" id="show_password" onchange="passwordChecked()">
                                <br>
                                <label for="age">Gadi:</label><br>
                                <input type="number" class="ac_text" name="age" value="'.$row['age'].'">
                                <br>
                                <label for="adress">Adrese:</label><br>
                                <input type="text" class="ac_text" name="adress" value="'.$row['adress'].'">
                                <br>
                                <label for="phone_num">Telefona numurs:</label><br>
                                <input type="text" class="ac_text" name="phone_num" value="'.$row['phone_number'].'">
                                <br>
                                <label for="e_mail">E-pasts:</label><br>
                                <input type="text" class="ac_text" name="e_mail" value="'.$row['e_mail'].'">
                            </td>
                            <td class="p_info_box">                     
                                <img src="css\img\user_img/'.$row['photo'].'" alt="No img!" id="profile_image">
                                <input type="hidden" name="photo" value="'.$row['photo'].'" id="photoValue">
                                <br>
                                <label for="character">Tēls:</label><br>
                                <input type="text" class="ac_text" style="text-align: center;" name="character" value="'.$row['character'].'">
                                <br>
                                <label for="theme">Tēmas:</label><br>
                                <input type="hidden" name="theme" value="'.$row['theme'].'" id="theme_value">
                                <table style="margin-left: auto; margin-right:auto;">
                                <tr>
                                    <td><button class="ac_btn_e" type="button" id="s1" onclick="changeColor(\'s1\'); btnChecked1(\'s1\');">Pilsētas svētki</button></td>
                                    <td><button class="ac_btn_e" type="button" id="s2" onclick="changeColor(\'s2\'); btnChecked1(\'s2\');">Pieaugušo dzimšanas diena</button></td>
                                    <td><button class="ac_btn_e" type="button" id="s3" onclick="changeColor(\'s3\'); btnChecked1(\'s3\');">Bērna dzimšanas diena</button></td>
                                    <td><button class="ac_btn_e" type="button" id="s4" onclick="changeColor(\'s4\'); btnChecked1(\'s4\');">Korporatīvi</button></td>
                                </tr>
                                <tr>
                                    <td><button class="ac_btn_e" type="button" id="s5" onclick="changeColor(\'s5\'); btnChecked1(\'s5\');">Kāzas</button></td>
                                    <td><button class="ac_btn_e" type="button" id="s6" onclick="changeColor(\'s6\'); btnChecked1(\'s6\');">Pasākumi bērniem</button></td>
                                    <td><button class="ac_btn_e" type="button" id="s7" onclick="changeColor(\'s7\'); btnChecked1(\'s7\');">Skolu pasākumi</button></td>
                                    <td><button class="ac_btn_e" type="button" id="s8" onclick="changeColor(\'s8\'); btnChecked1(\'s8\');">Jubilejas</button></td>
                                </tr>
                                </table>
                                <br>
                                <label for="photo">Fotogrāfija:</label>
                                <input type="file" name="photo1" id="image_value" onchange="loadImage()"> 
                            </td>
                            <td class="p_info_box">
                                <label for="work_days">Darba dienas:</label><br>
                                <input type="hidden" name="work_days" value="'.$row['work_days'].'" id="w_days_value">
                                <table style="margin-left: auto; margin-right:auto;">
                                <tr>
                                    <td><button class="ac_btn_d" type="button" id="d1" onclick="changeColor(\'d1\'); btnChecked2(\'d1\');">Pirmdiena</button></td>
                                    <td><button class="ac_btn_d" type="button" id="d2" onclick="changeColor(\'d2\'); btnChecked2(\'d2\');">Otrdiena</button></td>
                                    <td><button class="ac_btn_d" type="button" id="d3" onclick="changeColor(\'d3\'); btnChecked2(\'d3\');">Treštdiena</button></td>
                                    <td><button class="ac_btn_d" type="button" id="d4" onclick="changeColor(\'d4\'); btnChecked2(\'d4\');">Ceturtdiena</button></td>
                                </tr>
                                <tr>
                                    <td><button class="ac_btn_d" type="button" id="d5" onclick="changeColor(\'d5\'); btnChecked2(\'d5\');">Piektdiena</button></td>
                                    <td><button class="ac_btn_d" type="button" id="d6" onclick="changeColor(\'d6\'); btnChecked2(\'d6\');">Sestdiena</button></td>
                                    <td><button class="ac_btn_d" type="button" id="d7" onclick="changeColor(\'d7\'); btnChecked2(\'d7\');">Svētdiena</button></td>
                                </tr>
                                </table>
                                <br>
                                <label for="about_me">Par mani:</label><br>
                                <textarea name="about_me" id="about_me" rows="7" cols="50">'.$row['about_me'].'</textarea>
                                <br>
                                <label for="worker">Vai strādāsi?</label>
                                <input type="checkbox" name="worker" '. ($row['worker'] == 1 ? 'checked' : '') .' value="'. ($row['worker'] == 1 ? '1' : '0') .'">
                            </td>
                        </tr>
                    </table>
                    <input type="submit" class="info_submit" value="Pabeigt">
                </div>
            </div>
        </form>
        ';
    } 
    else 
    {
        echo "No information available for the specified username.";
    }
    $stmt->close();
} 
else 
{
    echo "User not authorized or missing session data.";
}



$conn->close();
?>
