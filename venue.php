
<!DOCTYPE html>
<html lang="en-IN" prefix="og: http://ogp.me/ns#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>VenueFinder | Home</title>
<link rel="icon" type="image/png" sizes="16x16" href="layout/assets/logo.png"> 
<link rel="stylesheet" href="Style/css/base.css"> 
    <link rel="stylesheet" href="Style/css/base1.css"> 
    <link rel="stylesheet" href="Style/css/vendors.css"> 
          <!-- JavaScript -->
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
                                <a href="venue.php" style="color:red">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="feature.php"> Features</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="premiun.php"> Premium services </a>   &nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="register_venue.php">Register</a>&nbsp;&nbsp;&nbsp;&nbsp;
                            </nav>
                    </div>
    </div>
</div>
<header class="adminAccessHero" style="background-image: url('Style/images/venue.jpg');">
    <div class="wrapper wrapper--blood">
        <div class="pure-g">
            <div class="pure-u-5-7">
                <br><br>
                <h1 class="adminAccessHero__title" style="color:whitesmoke">Grow your business with Venue Finder!</h1>
               <br>
                <a href="register_venue.php"  class="adminLandingCta"> Sign up </a>
            </div>
            <div class="pure-u-2-7" >
                <form class="adminAccessLogin"  style="background-color: pink" name="frmAcceso"  action="Controller/credentials.php" method="post">
                    <input type="hidden" name="r" value="" />
                    <p class="adminAccessLogin__title">Vendor Login</p>
                    <div class="adminAccessLogin__inputContainer">
                        <i class="adminAccessLogin__inputIcon adminAccessLogin__inputIcon--user"></i>
                        <input class="adminAccessLogin__input adminAccessLogin__input--user qa-vendor-login-user" onchange="validate()" data-max=10 oninput="showfocus(this)" onkeypress="return isNumberKey1(event)" type="text" placeholder="Mobile" autofocus name="mobile" id="mobile" value="" maxlength="10" required/>
                    </div>
                    <div class="adminAccessLogin__inputContainer">
                        <i class="adminAccessLogin__inputIcon adminAccessLogin__inputIcon--pass"></i>
                        <input class="adminAccessLogin__input adminAccessLogin__input--pass qa-vendor-login-password" type="password" placeholder="Password" name="password" id="password" maxlength="20" required/>
                    </div>
                    <input class="adminAccessLogin__submit qa-vendor-login-button" name="btnLogin" type="submit" value="Log In">
                    <a class="adminAccessLogin__rememberPass app-va-open-modal" style="color:blue" href="#">Forgot your password?                    </a>
                 </form>
            </div>
        </div>
    </div>
</header>
<section class="adminAccessSteps">
    <div class="wrapper wrapper--blood">
        <h2 class="adminAccessTitle adminAccessTitle--bridge">Grow your business with VenueFinder!</h2>
        <p class="adminAccessText">Not listed in our directory of Venue?</p>
                    <a class="btn-outline outline-red" href="register_venue.php">Sign up</a>
                            <div class="pure-g mt60 admin-landing-element-items">
                <div class="pure-u-1-3">
                    <div class="adminAccessSteps__item">
                        <span class="adminAccessSteps__icon adminAccessSteps__icon--bridgeSprite adminAccessSteps__icon--vendors"></span>
                        <p class="adminAccessSteps__description">
                            Join with <br/> VenueFinder </p>
                    </div>
                </div>
                <div class="pure-u-1-3">
                    <div class="adminAccessSteps__item">
                        <span class="adminAccessSteps__icon adminAccessSteps__icon--bridgeSprite adminAccessSteps__icon--couples"></span>
                        <p class="adminAccessSteps__description">
                            Drive quality leads and build your <br/>online presence                        </p>
                    </div>
                </div>
                <div class="pure-u-1-3">
                <div class="adminAccessSteps__item">
                    <i class="adminAccessSteps__icon adminAccessSteps__icon--sol"></i>
                   <p class="adminAccessSteps__description adminAccessSteps__description--small">
                        Reply directly to  users via email or<br/> your account Dashboard.                    </p>
                </div>
            </div>
            </div>
            </div>
</section>
<hr>
<section class="adminAccessBenefit">
    <div class="wrapper wrapper--blood">
        <h2 class="adminAccessTitle">Manage your business and track your growth</h2>
        <div class="pure-g">
            <div class="pure-u-13-24 text-center">
                <img src="https://cdn1.weddingwire.in/assets/img/admin-emp/gen_access-menu_en-IN.png"
                     srcset="https://cdn1.weddingwire.in/assets/img/admin-emp/gen_access-menu_en-IN@2x.png 2x, https://cdn1.weddingwire.in/assets/img/admin-emp/gen_access-menu_en-IN.png 1x">
            </div>
            <ul class="pure-u-11-24 mt20">
                <li class="adminAccessBenefit__item">
                    <p class="adminAccessBenefit__itemDescription adminAccessBenefit__itemDescription--icon adminAccessBenefit__itemDescription--iconTool">
                        Customise your venue by adding a business description, photos, service details and more.                    </p>
                </li>
                <li class="adminAccessBenefit__item">
                    <p class="adminAccessBenefit__itemDescription adminAccessBenefit__itemDescription--icon adminAccessBenefit__itemDescription--iconEnvelope">
                        Get notified instantly about new leads and messages by email and phone so you can respond quickly.                    </p>
                </li>
                <li class="adminAccessBenefit__Item">
                    <p class="adminAccessBenefit__itemDescription adminAccessBenefit__itemDescription--icon adminAccessBenefit__itemDescription--iconShoto">
                        Quickly request reviews from users and monitor your analytics.                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>
<div class="app-footer">
    <br>
    
<?php include 'footer.php'; ?>
</body>
</html>
<script>
function isNumberKey1(evt)
        {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
         {    
            alertify.success("This is required only numbers!!");
                document.getElementById("mobile").focus(); 
			    return false;
         }
		   return true;
      }
      function validate()
        {
            var textBox = document.getElementById("mobile");
            var textLength = textBox.value.length;
                if(textBox.value=='' || textLength<10)
                {
                    alertify.success('Please entered 10 numbers');
                  document.getElementById("mobile").focus();  
                }
           
        }
        function showfocus(element) 
        {
                max = parseInt(element.dataset.max)
                if (element.value.length >= max) 
                {
                    document.getElementById("password").focus();  
                }
        }
      </script>