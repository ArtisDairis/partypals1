<?php
include "connection.php";

if (isset($_POST['theme']) && !empty($_POST['theme'])) 
{
    $theme = $conn->real_escape_string($_POST['theme']);

    if (isset($_POST['anim_name'])) 
    {
        $anim_name = '%' . $_POST['anim_name'] . '%';
        $sql = "SELECT * FROM `characters` WHERE find_in_set(?, theme) AND `char_name` LIKE ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $theme, $anim_name);
    } 
    else 
    {
        $sql = "SELECT * FROM `characters` WHERE find_in_set(?, theme)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $theme);
    }

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) 
    {
        while ($row = $result->fetch_assoc()) 
        {
            ?>
            <div class="row mb-2 border rounded ms-1 me-1" style="height: 40px;">
                <div class="col pt-1 ps-4">
                    <span><?php echo htmlspecialchars($row['char_name']); ?></span>
                    <i class="ms-2 fa-solid fa-circle-info" onclick="showInfoAnim(<?php echo htmlspecialchars($row['id']); ?>)"></i>
                </div>
                <div class="col-3">
                    <i id="addbtn<?php echo htmlspecialchars($row['id']); ?>" class="btn text-light fa-solid fa-plus" onclick="addAnimsList(<?php echo htmlspecialchars($row['id']); ?>, this)"></i>
                </div>
            </div>
            <?php
        }
    } 
    else 
    {
        echo "No characters found for the specified theme.";
    }

    $stmt->close();
} 
else 
{
    echo "Theme not provided.";
}

$conn->close();
?>
