<?php
    error_reporting(0);
    session_start();
    unset($_SESSION['username']);
    header('location:../index.php');
?>