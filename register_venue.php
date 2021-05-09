
<!DOCTYPE html>
<html lang="en-IN" prefix="og: http://ogp.me/ns#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>VenueFinder | Vendor Registration</title>
<link rel="icon" type="image/png" sizes="16x16" href="layout/assets/logo.png"> 
<link rel="stylesheet" href="Style/css/base.css"> 
    <link rel="stylesheet" href="Style/css/base1.css"> 
    <link rel="stylesheet" href="Style/css/vendors.css"> 
    <!-- Font Awesome CSS -->
    <link href="Style/css/font-awesome.min.css" rel="stylesheet">
      <!-- JavaScript -->
      <script data-ad-client="ca-pub-7054987710116733" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script src="layout/assets/js/alertify.min.js"></script>
<script src="layout/assets/js/alertify.js"></script>
<link rel="stylesheet" href="layout/assets/js/alertify.min.css" />
<link rel="stylesheet" href="https://www.weddingwire.in/css/css-nossl-sf-sui-20200217-11UTF_IN131-1_www_m_-phoenix/base.css">
<link rel="stylesheet" href="https://www.weddingwire.in/css/css-nossl-sf-sui-20200217-11UTF_IN131-1_www_m_-phoenix/vendors_dash_landings,migrate/migrate,phoenix/community,phoenix/vendors_dash_admin,admin_dash_vendors,phoenix/vendors.css">
</head>
<body>
<div class="headerEmp">
    <div class="wrapper wrapper--blood flex">
        <div class="flex-item">
            <div class="headerEmp__main">
                <a class="headerEmp__logo" title="venuefinder logo" href="index.php">
                    <img class="pr5" src="Style/logo1.png" alt="logo">
                </a>
            </div>
        </div>
                <div class="flex-left-auto">
                            <nav class="headerEmp__nav">
                                <a href="venue.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="feature.php" > Features</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="premiun.php"> Premium services </a>   &nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="register_venue.php" style="color:red">Register</a>&nbsp;&nbsp;&nbsp;&nbsp;
                            </nav>
                    </div>
    </div>
</div>
<header class="adminAppsHero"style="background-image: url(Style/images/3.jpg)">
    <div class="wrapper wrapper--blood" style="background-color:white">
        <h1  align="center" style="color:blue">Manage your business anywhere with VenueFinder for Business</h1>
    </div>
</header>
<hr class="mt-100 bold">

<div class="wrapper-800 contact-page">
    <h1 class="text-center mt30">Vendor Registration</h1>
    <hr class="mt20 medium bold">
    <p align="center" id="error"></p>
        <form role="form" method="post" enctype='multipart/form-data' class="app-contact-form mt40 pure-form" action="controller/process_master.php">
                                        <fieldset>	
                                        <div class="form-group">
                                            <label for="user-name"><b>Name of Vender</b><sup style="font-size:16px;color:red">*</sup></label>
                                            <input type="text" class="pure-u-1" id="user_name" value="" name="user_name" onkeypress="return onlyAlphabets(event,this);" placeholder="Enter Name of Venue Holder" required autofocus onblur="onLeave()">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="city"><b>City</b><sup style="font-size:16px;color:red">*</sup></label>
                                            <input type="text" class="pure-u-1" id="city" value="Satara"name="city"  readonly required>
                                        </div>
                                        <div class="form-group">
                                            <label for="mobile"><b>Mobile Number</b><sup style="font-size:16px;color:red">*</sup></label>
                                            <input type="text" class="pure-u-1" name="mobile" value="" id="number" data-max=10 oninput="showfocus(this)" class="form-control input-lg" minlength="10" maxlength="10"autofocus placeholder="Enter Mobile No." onchange="validate()" onkeypress="return isNumberKey(event)" required>
                                            <input type=hidden id="mobile" value="<?php echo $mobile;?>">
                                        </div>
                                      
                                        <div class="form-group">
                                            <label for="email"><b>Email</b><sup style="font-size:16px;color:red">*</sup></label>
                                            <input type="email" class="pure-u-1" id="email" name="email" placeholder="Enter Email" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="address"><b>Address</b><sup style="font-size:16px;color:red">*</sup></label>
                                            <textarea required class="pure-u-1" name="address" placeholder="Enter Address" autofocus></textarea>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label for="password"><b>Password</b><sup style="font-size:16px;color:red">*</sup></label>
                                            <input type="password" class="pure-u-1"  name="password" value="" id="pass" class="form-control input-lg" required autofocus placeholder=" Enter Password" onchange="callfunction()">
                                            <input type="checkbox" onclick="view()"> Show Password
                                        </div>
                                        <div class="form-group">
                                            <label for="cpass"><b>Confirm Password</b></label>
                                            <input type="password" class="pure-u-1"  name="confirm_password" value=""  id="cpass" class="form-control input-lg" required  autofocus placeholder=" Enter Confirm Password" onkeyup='check();'>
                                            <input type="checkbox"  onclick="viewc()"> Show Password
                                        </div>
                                        <!-- <div class="form-group">
                                        <br><label for="logo image"><b>Logo Image:</b></label>
                                            <input type="file" class="pure-u-1" id="logo" value=""name="logo" required>
                                       </div>
                                        <div class="form-group">
                                            <br><label for="banner image"><b>Banner Image:</b></label>
                                            <input type="file"class="pure-u-1" id="userfile" value=""name="userfile" required>
                                        </div> -->
                                        <div>
                                            <center></br>  <input type="submit"  class="btn-flat red mt10 pure-u-1" name="RegisterVendor" value="Register">
                                            </center>
                                        </div>
                                        </br>
                                            <div class="form-group">
                                            <h4 align="center">Already have an account with venuefinder? <a href="venue.php" style="color:red">Login</a></h4>
                                            </div>
                                        </fieldset>
                                        </form>
                                </div>
 <script>
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
					//document.getElementById('error').innerHTML="This is required only Alphabets!!";
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
            input.value =  input.value.charAt(0).toUpperCase() +  input.value.slice(1);
            var input = document.getElementById("venue_name");  
             input.value =  input.value.charAt(0).toUpperCase() +  input.value.slice(1); 
        }
        function onlyAlphabets1(e,t)
                {
                    try {
                        if (window.event) { var charCode = window.event.keyCode; }
                        else if (e)
                                { var charCode = e.which;}
                        else { return true;}
                        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)||(charCode ==32))
                                {  return true; }		
                        else{ 
                        alertify.success("This is required only Alphabets!!");                        
                        document.getElementById("venue_name").focus();  
                                    return false;
                        }
                    }
                    catch (err) {
                        alert(err.Description);
                    }
                }
  function validate()
        {
            var textBox = document.getElementById("number");
            var textLength = textBox.value.length;
                if(textBox.value=='' || textLength<10)
                {
                  alertify.success('Please entered 10 numbers');
                  document.getElementById("number").focus();  
                }
            var txtmobile= document.getElementById("number").value;
            var dbmobile= document.getElementById("mobile").value;
              if(txtmobile==dbmobile)
              {
                  alertify.success('Number Already Registered!!! Please Enter Another Number');
                  document.getElementById("number").focus();  
             }
        }		
		function isNumberKey(evt)
        {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
         {    
          alertify.success("This is required only numbers!!");
          document.getElementById("number").focus();  
			    return false;
         }
		   return true;
      }
      function isNumberKey101(evt)
        {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
         {    
          alertify.success("This is required only numbers!!");
          document.getElementById("pincode").focus();  
			    return false;
         }
		   return true;
      }
      function isNumberKey11(evt)
        {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
         {    
          alertify.success("This is required only numbers!!");
          document.getElementById("amt").focus();  
			    return false;
         }
		   return true;
      }
      function showfocus(element) 
        {
                max = parseInt(element.dataset.max)
                if (element.value.length >= max) 
                {
                    document.getElementById("email").focus();  
                }
        }
      function callfunction()
        {
            var textBox = document.getElementById("pass");
            var textLength = textBox.value.length;
                if(textBox.value=='' || textLength<=6)
                {
                  alertify.success('Please entered more than 6 characters for password');
                  document.getElementById("pass").focus();  
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
                   document.getElementById("cpass").focus();  
                }
                else
                {
                    alertify.success('Password is matched');
                    document.getElementById("logo").focus();  
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
    </script>
