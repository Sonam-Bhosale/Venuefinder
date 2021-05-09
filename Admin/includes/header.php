<?php include("includes/db_connect.php");?>
<?php 
if($_SESSION['admin'])
{
    $sql="select mobile from tbl_admin";
    $result=mysqli_query($connect,$sql);
    while($row=mysqli_fetch_array($result)){
        $mobile=$row['mobile'];
       // echo $mobile;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>VenueFinder | Admin</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../layout/assets/logo.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="../layout/assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="../layout/assets/vendors/css/base/elisyam-1.5.min.css">
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
        <?php
        }
        else
        {	
            echo"<script> alert('You have to login first!!')</script>";
            echo "<script>window.location.href='../Admin/index.php';</script>";	
        }
    ?>