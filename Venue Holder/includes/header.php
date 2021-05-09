<?php include("includes/db_connect.php");?>
<?php if(isset($_SESSION['venue_id']))
{  if(( time() -  $_SESSION['last_login_time']) >900)
        {
            header("location:../controller/logout_venue.php");
            echo "<script>window.location.href='../controller/logout_venue.php';</script>";
        }
        else{
            $_SESSION['last_login_time']=time();
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>VenueFinder | Vendor</title>
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        
        <link href='layout/photobox/photobox.css' rel='stylesheet' type='text/css'>
        <link href='layout/style.css' rel='stylesheet' type='text/css'>

        <link rel="icon" type="image/png" sizes="16x16" href="../layout/assets/logo.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="../layout/assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="../layout/assets/vendors/css/base/elisyam-1.5.min.css">
        <link rel="stylesheet" href="../layout/assets/css/lity/lity.min.css">
        <link href="../layout/assets/css/datatables/datatables.min.css" rel="stylesheet">
        
   </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="../layout/assets/logo.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <?php }
        }
        else
        {	
            echo"<script> alert('Login first!!')</script>";
            echo "<script>window.location.href='../venue.php';</script>";	
        }
?>