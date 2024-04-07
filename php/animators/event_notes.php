<?php
    include "../connection.php";

    // Sanitize and validate event_id
    $event_id = filter_input(INPUT_POST, 'event_id', FILTER_VALIDATE_INT);
    if ($event_id === false) {
        exit("Invalid event ID");
    }

    $status = $_POST['status'];

    if ($status == 'add') {
        // Assuming 'notetext' is also sent via AJAX
        $notes = $_POST['notetext'];

        $sql_notes = "UPDATE `events` SET `note` = ? WHERE `id` = ?";
        $stmt = $conn->prepare($sql_notes);
        $stmt->bind_param("si", $notes, $event_id);

        if($stmt->execute()) {
            echo "Updated successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        $sql_notes = "SELECT `note` FROM `events` WHERE `id` = ?";
        $stmt = $conn->prepare($sql_notes);
        $stmt->bind_param("i", $event_id);

        if($stmt->execute()) {
            $stmt->bind_result($note);
            $stmt->fetch();
            echo strlen($note); // Echo the length directly
        } else {
            echo "Error: " . $stmt->error;
        }
    }
    $stmt->close();
    $conn->close();
?>