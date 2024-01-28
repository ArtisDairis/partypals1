<?php
    include "connection.php";

    session_unset();

    session_destroy();

    header("location:http://localhost/kursa_darbs/index.php")
?>