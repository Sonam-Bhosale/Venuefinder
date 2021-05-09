<?php
    session_start();

    unset($_SESSION['User_Name']);
    header('location:../login.php');
?>