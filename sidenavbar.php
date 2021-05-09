<?php include('header.php'); ?>
<br>
<?php //if(isset($_SESSION['User_Name'])){?>
<div class="premiumBox swiper-slide app-link ">
    <div class="premiumBox__item">             
       <li class="nav-main-item">
            <a class="nav-main-link app-header-tab testing-nav-planning-tools" href="profile.php">
            &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user" style="color:red; font-size:20px"></i> 
            &nbsp;&nbsp;&nbsp;&nbsp;My Profile</a>
            
        </li><br>
        <li class="nav-main-item">
            <a class="nav-main-link app-header-tab testing-nav-planning-tools" href="enquires.php">
            &nbsp;&nbsp;<i class="fa fa-phone" style="color:red; font-size:20px"></i> 
            &nbsp;&nbsp;&nbsp;&nbsp;My Enquires</a>
        </li><br>
        <li class="nav-main-item">
            <a class="nav-main-link app-header-tab testing-nav-planning-tools" href="booking.php">
            &nbsp;&nbsp;<i class="fa fa-shopping-cart" style="color:red; font-size:20px"></i> 
            &nbsp;&nbsp;&nbsp;&nbsp;Active Booking</a>
        </li><br>
        <!-- <li class="nav-main-item">
            <a class="nav-main-link app-header-tab testing-nav-planning-tools" href="pastbooking.php">
            &nbsp;&nbsp;<i class="fa fa-history" style="color:red; font-size:20px"></i> 
            &nbsp;&nbsp;&nbsp;&nbsp;Past Booking</a>
        </li><br> -->
        <li class="nav-main-item">
            <a class="nav-main-link app-header-tab testing-nav-planning-tools" href="changepassword.php">
            &nbsp;&nbsp;<i class="fa fa-gear" style="color:red; font-size:20px"></i> 
            &nbsp;&nbsp;&nbsp;&nbsp;Change Password</a>
        </li><br>
        <li class="nav-main-item">
            <a class="nav-main-link app-header-tab testing-nav-planning-tools" href="showwishlist.php">
            &nbsp;&nbsp;<i class="fa fa-heart" style="color:red; font-size:20px"></i> 
            &nbsp;&nbsp;&nbsp;&nbsp;Wishlist</a>
        </li><br>
     </div>
</div>
<div class="premiumBox__item">    
<?php 
//}
//else{
   // echo '<script>alert("Login First!!");</script>';
   // echo '<script>window.location.href="login.php";</script>';
//}