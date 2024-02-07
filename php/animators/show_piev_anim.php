<?php
include "php/connection.php";

if (isset($_GET['tema'])) 
{
    // Fetch data from the database
    $selectedTheme = $_GET['tema'];
    $sql = "SELECT * FROM animatori WHERE `theme` = $selectedTheme";
    $result = $conn->query($sql);

    $data = array();
    $col_max = 0;

    echo "<form method='post'>";

    echo "<table>";

    if ($result->num_rows > 0) 
    {
        while ($row = $result->fetch_assoc()) 
        {
            if ($row['worker']) 
            {
                $col_max++;

                if ($col_max % 5 == 1) 
                {
                    echo "<tr>";
                }

                echo "<th>";
                echo "<div class='box'>";
                echo "<h2>" . $row["character"] . "</h2>";
                echo "<img src='css/img/user_img/" . $row["photo"] . "' alt='No img!' class='card_img'>";
                echo "<br>";
                echo "<a href='anim_apraksts.php?id=" . $row["id"] . "' class='btn_darb'>Lasīt vairāk!</a>";
                echo "<br>";
                echo "<label for='take_anim' class='pas_text'>Nomāt</label>";
                echo "<input type='checkbox' name='take_anim[]' value='". $row["id"] ."'>";
                echo "</div>";
                echo "</th>";

                if ($col_max % 5 == 0 || $col_max == $result->num_rows) 
                {
                    echo "</tr>";
                }
            }
        }

        // Add a hidden input field
        echo "<input type='hidden' name='selected_animators' id='selectedAnimators' value=''>";
    } 
    else 
    {
        echo "<tr><td colspan='5'>No animators found for the selected theme.</td></tr>";
    }

    echo "</table>";

    echo "</form>";
} 
else 
{
    echo "Error: No tema parameter received";
}

$conn->close();
?>

<script>
    // JavaScript to update the hidden input field when checkboxes are checked
    document.addEventListener('DOMContentLoaded', function() 
    {
        let checkboxes = document.querySelectorAll('input[name="take_anim[]"]');
        let hiddenInput = document.getElementById('selectedAnimators');

        checkboxes.forEach(function(checkbox) 
        {
            checkbox.addEventListener('change', function() 
            {
                let selectedAnimators = Array.from(checkboxes)
                    .filter(checkbox => checkbox.checked)
                    .map(checkbox => checkbox.value);

                hiddenInput.value = selectedAnimators.join(',');
                // showvalue(selectedAnimators);
            });
        });
    });
</script>