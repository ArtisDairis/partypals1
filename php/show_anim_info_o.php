<?php
include "connection.php";

$anim_id = $_POST['anim_id'];

$sql_anim_info = "SELECT * FROM `characters` WHERE `id` = $anim_id";
$result_anim_info = $conn->query($sql_anim_info);

$row_anim_info = $result_anim_info->fetch_assoc();
?>
<div class="row">
    <div class="col bg-dark text-light rounded">
        <div class="container-fluid">
            <div class="row mt-1">
                <div class="col-1"></div>
                <div class="col text-center">
                    <span class="h3">Tēla apraksts</span>
                </div>
                <div class="col-2">
                    <i class="btn text-light mt-2 fa-solid fa-xmark" onclick="close_about()"></i>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <img src="./css/img/char_img/<?php echo htmlspecialchars($row_anim_info['char_photo']); ?>" class="rounded" alt="" style="width: 150px;">
                </div>
                <div class="col text-center">
                    <span class="h5"><?php echo htmlspecialchars($row_anim_info['char_name']); ?></span>
                </div>
            </div>
            <div class="row mt-3 pb-3">
                <div class="col text-center">
                    <span><?php echo htmlspecialchars($row_anim_info['about_char']); ?></span>
                </div>
            </div>
        </div>
    </div>
</div>