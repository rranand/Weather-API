<?php
    error_reporting(0);
    session_start();
    unset($_SESSION['ad_username']);
    header('location:index.php');
?>