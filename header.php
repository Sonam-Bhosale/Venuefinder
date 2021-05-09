<?php include('include/db_connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>VenueFinder | User</title>    
        <link rel="stylesheet" href="Style/css/destination.css">
        <link rel="stylesheet" href="Style/css/base.css"> 
        <link rel="stylesheet" href="Style/css/base1.css">        
         <link rel="stylesheet" href="Style/css/sprite_set_wedding_landing_pages.css"> 
        <link rel="stylesheet" href="Style/css/vendors.css">
        <link rel="stylesheet" href="Style/css/migrate.css"> 
		<!-- Font Awesome CSS -->
        <link href="Style/css/font-awesome.min.css" rel="stylesheet">
	    <link href="Style/css/line-awesome.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="16x16" href="layout/assets/logo.png"> 
         <script type="text/javascript" async="" src="Style/js1/f.txt"></script>
        <script type="text/javascript" async="" src="Style/js1/ec.js.download"></script>
        <script src="Style/js1/1708661419409134" async=""></script>
        <script async="" src="Style/js1/fbevents.js.download"></script>
        <script async="" defer="" src=".Style/js1/beacon.js.download"></script>
        <script async="" src="Style/js1/analytics.js.download"></script>  
        <script defer="" src="Style/js1/WebBundleDesktopHome.js.download"></script>
        <script defer="" src="Style/js1/WebBundleDesktopVendorsProfile.js.download"></script> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

      <!-- JavaScript -->
  <script src="layout/assets/js/alertify.min.js"></script>
<script src="layout/assets/js/alertify.js"></script>
<link rel="stylesheet" href="layout/assets/js/alertify.min.css" />
</head>
<body class='app-has-ajax-manager homeBody'>
        <div class="menu-top">
        <div class="menu-top-wrapper">
         <a class="menu-top-access" rel="nofollow" href="venue.php">
            <i class="svgIcon svgIcon__briefcase ">
                <svg viewBox="0 0 48 41">
                    <path d="M44.3 27.917h.933V13.925c0-1.46-1.199-2.86-3.057-3.625H5.825c-1.859.766-3.058 2.164-3.058 3.625v13.992h14.866V24.39a1 1 0 011-1h10.734a1 1 0 011 1v3.527H44.3zm-2.133 2h-11.8v.51a1 1 0 01-1 1H18.633a1 1 0 01-1-1v-.51h-11.8v8.564h36.334v-8.564zM14.567 8.3v-.51c0-3.797 2.855-7.035 6.533-7.035h5.8c3.68 0 6.533 3.236 6.533 7.036V8.3h8.935a1 1 0 01.358.066c2.655 1.02 4.507 3.115 4.507 5.559v14.992a1 1 0 01-1 1h-2.066v9.564a1 1 0 01-1 1H4.833a1 1 0 01-1-1v-9.564H1.767a1 1 0 01-1-1V13.925c0-2.445 1.852-4.54 4.509-5.559a1 1 0 01.358-.066h8.933zm13.8 21.126V25.39h-8.734v4.036h8.734zm3.066-21.635c0-2.747-2.018-5.036-4.533-5.036h-5.8c-2.513 0-4.533 2.29-4.533 5.036V8.3h14.866v-.51z" fill-rule="nonzero"/>
                </svg>
            </i>ARE YOU A VENDOR?</a>
        </div>
    </div>
<div id="menu" class="menu app-menu" style="background-image:url('Style/images/head.jpg')">
    <div class="menu-wrapper">
        <div class="menu-wrapper-align">
            <div class="pure-g-r">
                <div class="pure-u-1-5 main-logo">
                   <a href="index.php"  title="VenueFinder Logo" class="headerEmp__logo"><img  class="pr5" src="Style/logo1.png" width="250px" height="200px"></a>
                </div>

                <div class="pure-u-4-5">
                    <div class="app-common-header-container" id="nav-main" role="navigation"> </div>                              
                        <div class="header-join"> 
                              <ul class="nav-main">
                                <li class="nav-main-item"><a class="nav-main-link app-header-tab testing-nav-planning-tools" href="index.php"><i class="fa fa-home" style="color:blue; font-size:18px"></i> Home</a> </li>
                                <li class="nav-main-item"><a class="nav-main-link app-header-tab testing-nav-planning-tools" href="satara.php"><i class="fa fa-map-marker" style="color:blue; font-size:18px"></i> Browse Venue</a></li>
                                <li class="nav-main-item"><a class="nav-main-link app-header-tab testing-nav-planning-tools" href="contact.php"><i class="fa fa-phone" style="color:blue; font-size:18px"></i> Contact Us</a></li>
                                <li class="nav-main-item"><a class="nav-main-link app-header-tab testing-nav-planning-tools" href="about.php"><i class="fa fa-info-circle" style="color:blue; font-size:18px"></i> About</a></li>
                            <?php
                            if(isset($_SESSION['User_Name']))
                            {
                                if(( time() -  $_SESSION['last_login_time']) >900)
                                {
                                    header("location:controller/logout.php");
                                    echo "<script>window.location.href='controller/logout.php';</script>";
                                }
                                else{
                                    $_SESSION['last_login_time']=time();
                               
                                ?>  <a class="header-join-link testing-nav-login" href="profile.php"><i class="fa fa-user" style="color:blue; font-size:18px"></i> <?php echo $_SESSION['User_Name']; ?></a>
                                <li class="nav-main-item"><a class="nav-main-link app-header-tab testing-nav-planning-tools" href="controller/logout.php"><i class="fa fa-power-off" style="color:blue; font-size:18px"></i> Logout</a> </li>
                            <?php  } }
                            else
                            { ?>
                            <a class="header-join-link testing-nav-login" href="login.php"><i class="fa fa-sign-in" style="color:blue; font-size:18px"></i> Log In</a>
                            <a class="header-join-link testing-nav-join app-ua-track-event" href="register_user.php"> <i class="fa fa-user-plus" style="color:blue; font-size:18px"></i>Sign up</a>
                    <?php } ?>   
                     </ul></div>
                </div>
            </div>
        </div>
    </div>
    
</div>
 <!---------------------------------------   Validation   ------------------------------------------>
 <script>
        function isNumberKey1(evt)
        {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
         {    
			document.getElementById('error').innerHTML="This is required only numbers!!";
            alertify.success('This is required only numbers!!');
            document.getElementById("mobile").focus();  
			return false;
		 }
		 document.getElementById('error').innerHTML=" ";
		   return true;
        }
        function showfocus(element) 
        {
                max = parseInt(element.dataset.max)
                if (element.value.length >= max) 
                {
                    document.getElementById("password").focus();  
                }
        }
 
		function onlyAlphabets(e,t)
		  {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e)
					{
                    var charCode = e.which;
                }
                else { document.getElementById('error').innerHTML="";return true;}
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)||(charCode ==32))
				{
					    document.getElementById('error').innerHTML="";
					     return true;					 						 
				}
                else
					document.getElementById('error').innerHTML="This is required only Alphabets!!";
                    alertify.success("This is required only Alphabets!!");
                    document.getElementById("user_name").focus();  
					return false;
					
            }
            catch (err) {
                alert(err.Description);
            }
        }
		function onLeave()
		{
			var input = document.getElementById("user_name");  
          var string = input.value; 
          input.value = string.charAt(0).toUpperCase() + 
           string.slice(1); 
        }
        function myfun1()
        {
            var textBox = document.getElementById("mobile");
            var textLength = textBox.value.length;
                if(textBox.value=='' || textLength<10)
                {
                    document.getElementById('error').innerHTML='Please entered 10 numbers';
                    alertify.success('Please entered 10 numbers');
                    document.getElementById("error").focus();  
                }
                else
                {
                    document.getElementById('error').innerHTML = '';
                }
                var txtmobile= document.getElementById("number").value;
                var dbmobile= document.getElementById("mobile").value;
                if(txtmobile==dbmobile)
                {
                    alertify.success('Number Already Registered!!! Please Enter Another Number');
                    document.getElementById("mobile").focus();  

                }
        }
          function callfunction()
        {
            var textBox = document.getElementById("pass");
            var textLength = textBox.value.length;

                if(textBox.value=='' || textLength<=6)
                {
                    document.getElementById('errror').innerHTML='Please entered more than 6 characters for password';
                    alertify.success('Please entered more than 6 characters for password');
                    document.getElementById("pass").focus();  
                }
                else
                {
                    document.getElementById('error').innerHTML = '';
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
                   alertify.success('Password do not match');
                   document.getElementById("cpass").focus();  
                }
                else
                {
                    alertify.success('Password is matched'); 
                }
            }    
            function view()
            {
                var x=document.getElementById('pass');
                if(x.type=='password')
                {
                    x.type="text";
                }
                else
                {
                    x.type="password";
                }
            }
            function viewc()
            {
                var x=document.getElementById('cpass');
                if(x.type=='password')
                {
                    x.type="text";
                }
                else
                {
                    x.type="password";
                }
            }   
            $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
