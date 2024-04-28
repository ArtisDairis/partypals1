<?php
include "../connection.php";

try {
    $connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $get_all_table_query = "SHOW TABLES";
    $statement = $connect->prepare($get_all_table_query);
    $statement->execute();
    $result = $statement->fetchAll();

    $output = '';
    foreach ($result as $row) {
        $table = $row[0];
        $show_table_query = "SHOW CREATE TABLE $table";
        $statement = $connect->prepare($show_table_query);
        $statement->execute();
        $show_table_result = $statement->fetch(PDO::FETCH_ASSOC);

        $output .= "\n\n" . $show_table_result["Create Table"] . ";\n\n";

        $select_query = "SELECT * FROM $table";
        $statement = $connect->prepare($select_query);
        $statement->execute();
        $total_row = $statement->rowCount();

        for ($count = 0; $count < $total_row; $count++) {
            $single_result = $statement->fetch(PDO::FETCH_ASSOC);
            $table_column_array = array_keys($single_result);
            $table_value_array = array_values($single_result);
            $output .= "INSERT INTO $table (";
            $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
            $output .= "'" . implode("','", $table_value_array) . "');\n";
        }
    }

    $file_name = 'database_backup_on_' . date('y-m-d') . '.sql';
    $file_path = __DIR__ . '/' . $file_name;
    $file_handle = fopen($file_path, 'w+');
    if ($file_handle === false) {
        throw new Exception("Failed to open file for writing: $file_path");
    }
    fwrite($file_handle, $output);
    fclose($file_handle);

    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file_path));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_path));
    ob_clean();
    flush();
    readfile($file_path);
    unlink($file_path); // Delete the file after sending

    exit(); // Exit script after sending the file

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
} catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
