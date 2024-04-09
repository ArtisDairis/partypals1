<?php
include "connection.php";

$anim_id = $_POST['anim_id'];

$sql_anims = "SELECT * FROM `characters` WHERE `id` = $anim_id";

$result_anims = $conn->query($sql_anims);

$row_anims = $result_anims->fetch_assoc();
?>

<div id="anim_<?php echo htmlspecialchars($row_anims['id']); ?>" class="row pt-1 pb-1 mt-1 mb-1 ms-3 me-3 bg-dark rounded">
    <div class="col">
        <span><?php echo htmlspecialchars($row_anims['char_name']) ?></span>
        <i class="ms-2 fa-solid fa-circle-info" onclick="showInfoAnim(<?php echo htmlspecialchars($row_anims['id']); ?>)"></i>
    </div>
    <div class="col-3">
        <i class="btn text-light fa-solid fa-minus"></i>
    </div>
</div>