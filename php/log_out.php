<?php
include "connection.php";

setcookie("username", "", time() - 3600, "/");
setcookie("is_worker", "", time() - 3600, "/");

header("Location: http://localhost/kursa_darbs/index.php");
exit(); 
?>