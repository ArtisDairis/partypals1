<?php
include "connection.php";

setcookie("id", "", time() - 3600, "/");
setcookie("e_mail", "", time() - 3600, "/");
setcookie("is_worker", "", time() - 3600, "/");
?>