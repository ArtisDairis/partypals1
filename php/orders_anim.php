<?php
include "connection.php";

if(isset($_POST['theme']) && !empty($_POST['theme'])) 
{
    $theme = $conn->real_escape_string($_POST['theme']);

    $sql = "SELECT * FROM `characters` WHERE find_in_set(?, theme)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $theme);

    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            ?>
            <div class="row mb-2 border rounded ms-1 me-1" style="height: 40px;">
                <div class="col pt-1 ps-4">
                    <span><?php echo htmlspecialchars($row['char_name']); ?></span>
                    <i class="ms-2 fa-solid fa-circle-info"></i>
                </div>
                <div class="col-3">
                    <i class="btn text-light fa-solid fa-plus"></i>
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