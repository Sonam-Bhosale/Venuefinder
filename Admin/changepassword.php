<?php include("../include/db_connect.php");?>
<?php

if(isset($_SESSION['admin']))
{
	?>
   <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>VenueFinder - Admin </title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-touch-icon.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="../layout/assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="../layout/assets/vendors/css/base/elisyam-1.5.min.css">
        <link rel="stylesheet" href="../layout/assets/css/animate/animate.min.css">
        
    </head>
<body class="bg-fixed-02">
        <!-- Begin Container -->
        <div class="container-fluid h-100 overflow-y">
            <div class="row flex-row h-100">
                <div class="col-12 my-auto">
                    <div class="password-form mx-auto">
                        <h3>Admin Change Password</h3>
                        <form action="../controller/credentials.php" method="post">
                       <?php $name=$_SESSION['admin'];
                            $sql="select * from register_venue where user_name='$name'";
                            //echo $sql;
                            $result=mysqli_query($connect,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                                $password=$row['password'];
                                //echo $password;
                            }?>
                            <div class="group material-input">
                            <input  id="oldpassword" autofocus required name="oldpassword"  type="password" onchange="oldcheck()">
                           <input  id="dbold"  name="dbold"  type="hidden" value="<?php echo $password; ?>" >
							    <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Old Password</label>
                            </div>
							<div class="group material-input">
                            <input  id="newpassword" autofocus required onchange="callfunction()" name="newpassword"  type="password">
                            <span class="highlight"></span>
							    <span class="bar"></span>
							    <label>New Password</label>
							</div>
                            <div class="group material-input">
                            <input id="confirmpassword" autofocus onkeyup='check();' required name="confirmpassword" type="password">
                            <span class="highlight"></span>
							    <span class="bar"></span>
							    <label>Confirm  New Password</label>
							</div>
                        
                        <div class="button text-center">
                        <input type="submit" name="btnUpdatePassword" value="Change Password" class="btn btn-primary pmd-checkbox-ripple-effect">
                             <br><br>
                             <a href="dashboard.php"><i class=" la la-arrow-circle-left la-2x"></i><h3>Go to back!!</h3></a>
                        </div>
						</form>
                        
                    </div>        
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>  
        <!-- End Container --> 
        <?php include('includes/footer.php')?>
    </body>
</html>
<?php
}
else
{	
	echo"<script> alert('You Must Login First')</script>";
	echo "<script>window.location.href='../Admin/index.php';</script>";	
}
?>
<script>
            function check()
            {
                var pass=document.getElementById('newpassword').value;
                var cpass=document.getElementById('confirmpassword').value;
                if(pass!=cpass)
                {
                }
                else
                {
                   // document.getElementById('error').style.color = 'green';
                    document.getElementById('error').innerHTML = ''; 
                    alertify.success('Password is matched'); 
                }
            }
            function callfunction()
            {
            var textBox = document.getElementById("newpassword");
            var textLength = textBox.value.length;

                if(textBox.value=='' || textLength<5)
                {
                    //document.getElementById('error').innerHTML='Please entered more than 5 characters for new password';
                    alertify.success('Please entered more than 6 characters for new password');
                }
                else
                {
                    document.getElementById('error').innerHTML = '';
                }
            }
            function show(id) {
                var a = document.getElementById(id);
                if (a.type == "password") {
                    a.type = "text";

                } else {
                    a.type = "password";

                }
                }
            function oldcheck()
            {
            var txtop= document.getElementById("oldpassword").value;
            var dbop= document.getElementById("dbold").value;
              if(txtop!=dbop)
              {
                  alertify.success('Old Password is not Match!!!');
             }
             else{
                alertify.success('Old Password is match!!!');
             }
        
            }
</script>
