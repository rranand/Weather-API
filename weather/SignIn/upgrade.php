<?php
    session_start();
    $username = $_SESSION['username'];
    include("../php/classes.php");
    include("../php/db.php");

    $db = new database();
    $log = new login($db->Connect());
    $log->upgradeAC($username);
    error_reporting(0);
    header('location:dashboard.php');
?>