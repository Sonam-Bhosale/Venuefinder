<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>VenueFinder - Forgot Password</title>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>       
        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../layout/assets/logo.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="../layout/assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="../layout/assets/vendors/css/base/elisyam-1.5.min.css"> 
    </head>
    <body >
       <!-- Begin Preloader -->
       <div id="preloader">
            <div class="canvas">
                <img src="../layout/assets/logo.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <!-- Begin Container -->
        <div class="container-fluid h-100 overflow-y">
            <div class="row flex-row h-100">
                <div class="col-12 my-auto">
                    <div class="password-form mx-auto">
                        <div class="logo-centered">
                            <a href="index.php">
                                <img src="../layout/assets/logo.png" alt="logo">
                            </a>
                        </div>
                       <h2 align="center"><strong>Reset Password</strong></h2>
                        <p align="center">Enter your email address for instructions to reset your password.</p> 
                        <form action="../controller/forgot.php" method="post">
                            <div class="group material-input">
							    <input type="email" required name="email">
							    <span class="highlight"></span>
							    <span class="bar"></span>
							    <label>Email</label>
                            </div>
                            <div class="group material-input">
							    <input type="password" required name="pass" id="pass" onchange="callfunction()">
							    <span class="highlight"></span>
							    <span class="bar"></span>
							    <label>New Password</label>
                            </div>
                            <div class="group material-input">
							    <input type="password" required name="cpass" id="cpass" onkeyup="check()">
							    <span class="highlight"></span>
							    <span class="bar"></span>
							    <label>Confirm Password</label>
                            </div>
                        
                        <div class="button text-center">
                           <input type="submit" class="btn btn-lg btn-gradient-01" name="btnConfirm" value="Reset Password">
                        </div>
                        </form>
                        <div class="back">
                            <a href="index.php">Sign In</a>
                        </div>
                    </div>        
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>  
        <!-- End Container --> 
        <!-- Begin Vendor Js -->
        <script src="../layout/assets/vendors/js/base/jquery.min.js"></script>
        <script src="../layout/assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="../layout/assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
    </body>
</html>
<script>
     function callfunction()
        {
            var textBox = document.getElementById("pass");
            var textLength = textBox.value.length;
                if(textBox.value=='' || textLength<=6)
                {
                  alertify.success('Please entered more than 6 characters for password');
                }
        }

        function check()
            {
                var pass=document.getElementById('pass').value;
                var cpass=document.getElementById('cpass').value;
                var plength=length.pass;
                var clength=length.cpass;
                if(plength!= clength || pass!=cpass)
                {
                   //alertify.success('Password do not match');
                }
                else
                {
                    alertify.success('Password is matched'); 
                }
            }</script>
            <!-- Begin Page Snippets -->
  <script src="../layout/assets/js/alertify.min.js"></script>
<script src="../layout/assets/js/alertify.js"></script>
<!-- include the style -->

<link rel="stylesheet" href="../layout/assets/js/alertify.min.css" />
<!-- include a theme -->
<link rel="stylesheet" href="../layout/assets/js/default.min.css" />