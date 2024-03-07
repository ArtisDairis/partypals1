<?php
include "../connection.php";

$what_do = $_POST['what_do'];
$themes = $_POST['themes'];
$this_theme = $_POST['this_theme'];
$char_id = $_POST['char_id'];

if ($what_do == "add") 
{
    if($themes == "")
    {
        $sql = "UPDATE `characters` SET `theme` = $this_theme WHERE `id` = ". $char_id;
    }
    else
    {
        $sql = "UPDATE `characters` SET `theme` = CONCAT(`theme`, ',$this_theme') WHERE `id` = ". $char_id;
    }
    
} 
elseif ($what_do == "remove") 
{
    $theme_array = explode(',', $themes);
    
    $theme_array = array_diff($theme_array, array($this_theme));
     
    if (empty($theme_array)) 
    {
        $sql = "UPDATE `characters` SET `theme` = '' WHERE `id` = ". $char_id;
    } 
    else 
    {
        $updated_theme_string = implode(',', $theme_array);
         
        $sql = "UPDATE `characters` SET `theme` = '$updated_theme_string' WHERE `id` = ". $char_id;
    }
}

if ($conn->query($sql) === TRUE) 
{
    $sql_sel = "SELECT `theme` FROM `characters` WHERE `id` = ". $char_id;
    $result = $conn->query($sql_sel);
    $row = $result->fetch_assoc();
    echo $row['theme'];
} 

$conn->close();
?>
