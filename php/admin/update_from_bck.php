<?php
include "../connection.php";

if(isset($_FILES['sql_file']) && $_FILES['sql_file']['error'] === UPLOAD_ERR_OK) 
{
    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch(PDOException $e) 
    {
        echo "Connection failed: " . $e->getMessage();
        exit();
    }

    try 
    {
        $stmt = $conn->prepare("SHOW TABLES");
        $stmt->execute();
        $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
        foreach($tables as $table) 
        {
            $conn->exec("DROP TABLE IF EXISTS $table");
        }
        echo "All tables dropped successfully.<br>";
    } 
    catch(PDOException $e) 
    {
        echo "Error dropping tables: " . $e->getMessage();
        exit();
    }

    try 
    {
        $sql_content = file_get_contents($_FILES['sql_file']['tmp_name']);
        $sql_statements = explode(';', $sql_content);
        
        foreach ($sql_statements as $sql) 
        {
            if (empty(trim($sql))) {
                continue;
            }
            echo "Executing SQL statement: $sql<br>";
            $conn->exec($sql);
        }

        echo "Data from SQL file updated successfully.";

    } 
    catch(PDOException $e) 
    {
        echo "Error executing SQL statements: " . $e->getMessage();
    }
} 
else 
{
    echo "Error uploading file.";
}
?>
