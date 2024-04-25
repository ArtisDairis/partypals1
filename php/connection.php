<?php
$servername = "localhost";
$username1 = "root";
$password = "mysql";
$dbname = "partypals";

$conn = new mysqli($servername, $username1, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$backupDir = './backups/';

if (!is_dir($backupDir)) 
{
    mkdir($backupDir, 0755, true);
}

$backupFile = $backupDir . $dbname . '_' . date('Y-m-d_H-i-s') . '.sql';
$command = "mysqldump -h $servername -u $username1 -p$password $dbname > $backupFile";
exec($command, $output, $return);

if ($return === 0) 
{
    echo 'Backup of partypals database created successfully!';
} 
else 
{
    echo 'Backup failed!';
}
?>
