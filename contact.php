<?php include('header.php'); ?><br>
<section class="landing-who-section landing-who-aboutus pt45 border-bottom" >
    <div class="wrapper landing-who-aboutus-hero white">
        <div class="pure-g-r border-bottom">
            <div class="pure-u-1-2">
                <h2 class="section-title">Address and Contact Information</h2>
                <p class="section-text">
                Office Address: Plot No. E-3/4, MIDC Satara - 415002<br>
                Phone: +91 9422032969/+912164 225058  <br>
                Email: info@wathare.com<br>
                </p><br><br>
                <iframe width="500" height="400" frameborder="0" id="cusmap" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=Plot No. E-3/4, MIDC Satara - 415002&output=embed"></iframe>
        </div>
            <div class="pure-u-1-2" >
            <h2 class="section-title">Leave Comment</h2>
            <div class="text-center mt20">
        <p>We want to hear from you!</p>
        <p>If you have any questions about the site or need support, please fill out the form below, and we will respond to your request as quickly as possible.</p>
    </div>
    <form class="app-contact-form mt40 pure-form" name="contactform" action="Controller/process_master.php" method="post">
         
           <div class="relative mb10">
            <input  class="pure-u-1" type="text" name="name" placeholder="Name" required autofocus>   
        </div>
        <div class="relative mb10">
                <input type="tel" class="pure-u-1" placeholder="Your Phone" id='mobile' onkeypress="return isNumberKey(event)" name="phone"  required autofocus>
        </div>
        <div class="relative mb10">      
            <input class="pure-u-1" type="email" name="email" placeholder="Email"  autofocuss>
        </div>
        <div class="pure-g mb10">
            <div class="relative pure-u-1">
                <textarea class="pure-u-1" name="message" rows="7"  required placeholder="Comment" ></textarea>
            </div>
               <input  style="background-color:red" class="btn-flat red mt10 pure-u-1"  name="btn_contact" type="submit" value="Send message">
        </div>
    </form>
            </div>
        </div>
      
    </div>
</section>
<!-- <div class="wrapper-800 contact-page" style="background-image:url('Style/images/aa.jpg')">
    <h1 class="text-center mt30">Contact us</h1>
    <hr class="mt20 medium bold">
    <div class="text-center mt20">
        <p>We want to hear from you!</p>
        <p>If you have any questions about the site or need support, please fill out the form below, and we will respond to your request as quickly as possible.</p>
    </div>
    <form class="app-contact-form mt40 pure-form" name="contactform" action="Controller/process_master.php" method="post">
         
           <div class="relative mb10">
            <input  class="pure-u-1" type="text" name="name" placeholder="Name" required autofocus>   
        </div>
        <div class="relative mb10">
                <input type="tel" class="pure-u-1" placeholder="Your Phone" id='mobile' onkeypress="return isNumberKey(event)" name="phone"  required autofocus>
        </div>
        <div class="relative mb10">      
            <input class="pure-u-1" type="email" name="email" placeholder="Email"  autofocuss>
        </div>
        <div class="pure-g mb10">
            <div class="relative pure-u-1">
                <textarea class="pure-u-1" name="message" rows="7"  required placeholder="Comment" ></textarea>
            </div>
               <input  style="background-color:red" class="btn-flat red mt10 pure-u-1"  name="btn_contact" type="submit" value="Send message">
        </div>
    </form>
</div> -->
<br>

 <?php include('footer.php'); ?>