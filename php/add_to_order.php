<?php
include "connection.php";

$anim_id = $_POST['anim_id'];

$sql_anims = "SELECT * FROM `characters` WHERE `id` = ?";
$stmt_anims = $conn->prepare($sql_anims);
$stmt_anims->bind_param("i", $anim_id);
$stmt_anims->execute();
$result_anims = $stmt_anims->get_result();
$row_anims = $result_anims->fetch_assoc();

$sql_anim = "SELECT * FROM `animators` WHERE `id` = ?";
$stmt_anim = $conn->prepare($sql_anim);
$stmt_anim->bind_param("i", $row_anims['worker_id']);
$stmt_anim->execute();
$result_anim = $stmt_anim->get_result();
$row_anim = $result_anim->fetch_assoc();
?>

<div id="anim_<?php echo htmlspecialchars($row_anims['id']); ?>" class="row pt-1 pb-1 mt-1 mb-1 ms-3 me-3 bg-dark rounded">
    <div class="col">
        <span><?php echo htmlspecialchars($row_anims['char_name']) ?> : <?php echo htmlspecialchars($row_anim['surname']) ?></span>
        <i class="ms-2 fa-solid fa-circle-info" onclick="showInfoAnim(<?php echo htmlspecialchars($row_anims['id']); ?>)"></i>
    </div>
    <div class="col-1 me-5">
        <i class="btn text-light fa-solid fa-minus" onclick="removeFromList(<?php echo htmlspecialchars($row_anims['id']); ?>)"></i>
    </div>
</div>
