    <?php //include('includes/header.php');?>
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
        <!-- Begin Container -->
        <div class="container-fluid no-padding h-100">
            <div class="row flex-row h-100 bg-white">
                <!-- Begin Left Content -->
                <div class="col-xl-4 col-lg-6 col-md-5 no-padding" >
                        <!-- <div class="elisyam-overlay overlay-01"></div> -->
                        <div class="authentication-col-content mx-auto">
                    </div>
                </div>
                <!-- End Left Content -->
                <!-- Begin Right Content -->
                <div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
                    <!-- Begin Form -->
                    <div class="authentication-form mx-auto">
                    <a href="../index.php"><center><h2 style="color:black">Administration Login</h3></center></a> 
                        <div> <p id="error" align="center" style="color:red"></p></div><br>
                        <form action="../controller/credentials.php" method ="post">
                        <div class="group material-input">
                        <input type="text" class="form-control" id="mobile" name="mobile" maxlength="10" minlength="10" data-max=10 oninput="myfunction(this)" autofocus onchange="myfun()" onkeypress="return isNumberKey1(event)"required>
							    <span class="highlight"></span>
							    <span class="bar"></span>
							    <label>Mobile Number</label>
                            </div>
							<div class="group material-input">
                            <input type="password" class="form-control" id="password" name="password" autofocus required>
							    <span class="highlight"></span>
							    <span class="bar"></span>
							    <label>Password</label>
							</div>
                           
                       <div class="sign-btn text-center">
                       <input type="submit" class="btn pmd-ripple-effect btn-primary btn-block" name="btnAdminLogin" value="Login">
                        </div>
                       
                         </form>
                         <br>
                        <div class="row">
                            
                            <!-- <div class="col text-right">
                                <a href="forgot.php">Forgot Password ?</a>
                            </div> -->
                        </div>
                     </div>
                    <!-- End Form -->                        
                </div>
                <!-- End Right Content -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->
        <script>
        function isNumberKey1(evt)
        {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
         {    
			document.getElementById('error').innerHTML="This is required only numbers!!";
            alertify.success('This is required only numbers!!');
			return false;
		 }
		 document.getElementById('error').innerHTML=" ";
		   return true;
        }
        function myfun()
        {
            var textBox = document.getElementById("mobile");
            var textLength = textBox.value.length;
                if(textBox.value=='' || textLength<10)
                {
                    document.getElementById('error').innerHTML='Please entered 10 numbers';
                    alertify.success('Please entered 10 numbers');
                }
                else
                {
                    document.getElementById('error').innerHTML = '';
                }
        }
        function myfunction(element) 
        {
                max = parseInt(element.dataset.max)
                if (element.value.length >= max) 
                {
                    document.getElementById("password").focus();  
                }
        }
    </script> 
    <?php include('includes/footer.php');?>
    </body>
</html>
 <?php	
//}
?>