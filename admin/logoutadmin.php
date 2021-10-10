<?php session_start();
    session_destroy();
    session_unset();
    include('../include/config.inc.php');
    header("Location: ".$baseUrl."admin/index.php");
?>