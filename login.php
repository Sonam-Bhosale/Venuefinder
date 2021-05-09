
<?php
$captchanumber = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz'; // Initializing PHP variable with string
$rand = substr(str_shuffle($captchanumber), 0, 6); // Getting first 6 word after shuffle.
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login - VenueFinder</title>
         <link rel="stylesheet" href="Style/css/destination.css">
        <link rel="stylesheet" href="Style/css/base.css"> 
        <link rel="stylesheet" href="Style/css/base1.css">        
        <link rel="stylesheet" href="Style/css/sprite_set_wedding_landing_pages.css">
        <link rel="stylesheet" href="Style/css/vendors.css">
        <link rel="icon" type="image/png" sizes="16x16" href="layout/assets/logo.png"> 
        <script type="text/javascript" async="" src="Style/js1/f.txt"></script>
        <script type="text/javascript" async="" src="Style/js1/ec.js.download"></script>
        <script src="Style/js1/1708661419409134" async=""></script>
        <script async="" src="Style/js1/fbevents.js.download"></script>
        <script async="" defer="" src=".Style/js1/beacon.js.download"></script>
        <script async="" src="Style/js1/analytics.js.download"></script>           
        <script defer="" src="Style/js1/common.js.download"></script>
        <script defer="" src="Style/js1/WebBundleDesktopVendorsProfile.js.download"></script>
    <!-- Font Awesome CSS -->
    <link href="Style/css/font-awesome.min.css" rel="stylesheet">
      <!-- JavaScript -->
  <script src="layout/assets/js/alertify.min.js"></script>
<script src="layout/assets/js/alertify.js"></script>
<link rel="stylesheet" href="layout/assets/js/alertify.min.css" />
</head>
<body class="layout-auth layout-auth-template">
<div class="header">
    <div class="mt30 text-center">
        <a href="index.php" title="venuefinder">
         <img src="Style/logo1.png" alt="" width="150px">
        </a>
    </div>
</div>


<div class="wrapper-auth">
    <div class="pure-g mb10 border-light template-auth">
        <div class="pure-u-2-5 layout-auth-cover" style="background-image:url('Style/images/ll.jpg')"></div>

        <div id="app-signup-layer-content" class="pure-u-3-5 white">
            <div class="layout-auth-container">
                      <p class="layout-auth-title">Log in to your account</p>
                <p class="layout-auth-action">Don't have an account?     <a class="app-ua-track-event" href="register_user.php">Free sign up</a>
                </p> <br>
                <form  class="form-line" name='form1' action="controller/credentials.php" method="post">
                <p id="error" align="center" style="color:red"></p>  
                    <div class="form-content-inputs">
                    <input type="text"  class="pure-u-1 qa-user-login-user"  id="mobile" placeholder="Your Mobile Number" name="mobile" maxlength="10" minlength="10" data-max=10 oninput="myfunction1(this)" autofocus onchange="myfun1()" onkeypress="return isNumberKey1(event)" required>
                    <div class="pure-g">
                         <div class="pure-u-1-0 pr10 mb10">
                            <input type="password"  class="pure-u-1 qa-user-login-password"  id="password" placeholder="Your Password" name="password" autofocus required>
                        </div>
                    
                        <input type="image" src="Style/images/eye.png" height="25px" width="40px" onclick="view()"> 
                    </div>
                    <div class="pure-g">
                         <div class="pure-u-1-0 pr15 mb10">
                         <input type="text"   class="pure-u-1 qa-user-login-user" value="<?=$rand?>" id="ran" readonly="readonly">
                        </div>                    
                        <input type="image" src="Style/images/refresh.jpeg" width="40px "height="25px" onclick="captch()" />
               
                    </div>
                       <input type="text"  class="pure-u-1 qa-user-login-user" name="chk"   placeholder="Captcha Code" required autofocus id="chk">
                    <a href="forgot.php" class="forgotten-password">Forgot your password?</a>
                   
                  <div class="text-center mb30 mt40">
                    <input type="submit"  class="btn-flat btn-flat--big red btn-full testing-desktop-login qa-user-login-button app-ua-track-event" name="btnUserLogin" onclick="return validation();" value="Login">
                   </div>
                        <p class="layout-auth-action">Are you a vendor?</p>
                        <a class="app-ua-track-event strong" href="venue.php" >Vendor login</a>
                       </div>
                </form>
            </div>
        </div>
    </div>
</div>        
<div class="layout-auth-footer" style="background-color:white "><br>
    <ul>
        <li class="pure-u"><a rel="nofollow" href="register_user.php">Sign up with VenueFinder</a> | </li>
        <li class="pure-u"><a rel="nofollow" href="venue.php">Register your business</a> | </li>
        <li class="pure-u"><a rel="nofollow" href="contact.php">Contact Us</a> | </li>
        <li class="pure-u"><a rel="nofollow" href="">Terms &amp; Privacy</a> | </li>
        <li class="pure-u"><a rel="nofollow" href="about.php">About Us</a> | </li>
     </ul><br>
        <p class="layout-auth-footer-copyright">© 2020 VenueFinder</p>
</div>
 </div>

</body></html>
<script>
     function view()
            {
                var x=document.getElementById('password');
                if(x.type=='password')
                {
                    x.type="text";
                }
                else
                {
                    x.type="password";
                }
            }
            function myfunction1(element) 
            {
                max = parseInt(element.dataset.max)
                if (element.value.length >= max) 
                {
                    document.getElementById("password").focus();  
                }
             }
            function myfun1()
            {
            var textBox = document.getElementById("mobile");
            var textLength = textBox.value.length;
                if(textBox.value=='' || textLength<10)
                {
                    //document.getElementById('error').innerHTML='Please entered 10 numbers';
                    alertify.success('Please entered 10 numbers');
                    document.getElementById("mobile").focus();  
                }
                else
                {
                    document.getElementById('error').innerHTML = '';
                }                
            }
            function isNumberKey1(evt)
            {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
            {    
               // document.getElementById('error').innerHTML="This is required only numbers!!";
                alertify.success('This is required only numbers!!');
                document.getElementById("mobile").focus();  
                return false;
            }
            document.getElementById('error').innerHTML=" ";
            return true;
            }
       </script>

<script type="text/javascript">
function validation()
{
    if(document.form1.ran.value!=document.form1.chk.value){
        document.getElementById("error").innerHTML="Captcha Not Matched!";        
        alertify.success('Captcha Not Matched!!');
        document.form1.chk.focus();
        return false;
    }
    if(document.form1.mobile.value==""){
        document.getElementById("error").innerHTML="Please Fill Mobile!";
        alertify.success('Please Fill Mobile!');
        document.form1.mobile.focus();
        return false;
    }
    if(document.form1.chk.value==""){
        document.getElementById("error").innerHTML="Please Fill Captcha!";
        alertify.success('Please Fill Captcha!');
        document.form1.password.focus();
        return false;
    }
    if(document.form1.password.value==""){
        document.getElementById("error").innerHTML="Please Fill Password!";
        alertify.success('Please Fill Password!');
        document.form1.chk.focus();
        return false;
    }
    return true;
    }
</script>
<script type="text/javascript">

function captch() { 
    var x = document.getElementById("ran")
    x.value=Math.random().toString(36).substr(2,6);
    }
</script>





