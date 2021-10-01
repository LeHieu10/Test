<?php
session_start();
    include './config/config.php';
    unset($_SESSION['user']);
    header('location: index.php');
?>