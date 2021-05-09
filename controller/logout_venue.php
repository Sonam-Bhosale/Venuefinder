<?php
    session_start();
    unset($_SESSION['venue_id']);
    header('location:../venue.php');
?>