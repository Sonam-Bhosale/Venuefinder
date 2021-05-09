<?php 
    include('header.php');
    $venue_id=$_GET['vid'];
    $vendorid=$_GET['id'];
    $sql="select * from tbl_venue tv,tbl_vendor td where tv.venue_id='$venue_id' and td.vendor_id='$vendorid' and tv.vendor_id='$vendorid'"; 
            $result=$connect->query($sql);
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) 
                {
                   
                    $name=$row['venue_name'];
                    $address=$row['venue_address'];
                    $city=$row['city'];	
                    $contact=$row['mobile'];
                    $email_venue=$row['email'];
                    $amount=$row['booking_amt'];
                }
            }
            $faq="select * from tbl_faq where venue_id=$venue_id";
            $res=mysqli_query($connect,$faq);
            While($row=mysqli_fetch_array($res))
                    {
                        $booking_per=$row['f4'];
                        $amt=$row['f5'];
                    }
            if(isset($booking_per))
            { 
                $cal_deposite=($amount*$booking_per)/100;
            }
            else
            {
                $cal_deposite=$amount;
            }
            if(isset($_SESSION['User_Name']))
            {
                $id=$_SESSION['User'];
                $s="select * from register_user where user_id=$id";
                $r=mysqli_query($connect,$s);
                While($row=mysqli_fetch_array($r))
                {
                    $username=$row['name'];
                    $email=$row['email'];
                    $number=$row['mobile'];
                }
            }
 ?> 
<!DOCTYPE html>
<html>
<head>
    <title>Booking Form - VenueFinder</title>
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
        
    </div>
</div>

<div class="wrapper-auth">
    <div class="pure-g mb10 border-light template-auth">
        <div class="pure-u-2-5 layout-auth-cover" style="background-image:url(Style/images/login.jpeg);"></div>
        <div id="app-signup-layer-content" class="pure-u-3-5 white relative">
             <div class="border-bottom">                

            </div>
            <div class="pt20 pb20 p40">
                <p class="layout-auth-title text-center">Booking Form</p>
                <form class="app-internal-tracking-form app-signup-layer-form" action="controller/confirm_booking.php" method="post">
                        <div>
                                <div class="pure-u-1 textfield">
                                    <i class="textfield__icon icon icon-form-user"></i>
                                    <input class="textfield__input" type="text" id="uname"  value="<?php echo $username;?>" readonly name="user_name" autofocus maxlength="100" placeholder="User name">
                                </div>
                                <div class="pure-u-1 textfield">
                                    <i class="textfield__icon icon icon-form-user"></i>
                                    <input class="textfield__input" type="text" id="venue_name"  value="<?php echo $name;?>" readonly name="venue_name" autofocus maxlength="100" placeholder="Venue name">
                                    <input type="hidden" name="vid" value="<?php echo $venue_id;?>">
                                    <input type="hidden" name="vendorid" value="<?php echo $vendorid;?>">
                                </div>
                                <div class="pure-u-1 textfield">
                                <i class="textfield__icon icon icon-form-mail"></i>
                                    <input class="textfield__input pure-u-1" type="email" name="email" value=<?php echo $email;?> readonly autofocus placeholder="Email">
                                  
                                </div>
                                <div class="pure-g">
                                <div class="pure-u-1-2 pr10">
                                    <div class="textfield">
                                    <i class="textfield__icon icon icon-form-mobile"></i>
                                        <input class="textfield__input pure-u-1" value="<?php echo $number;?>" autofocus type="tel" name="mobile" id="mobile" placeholder="Phone number">
                                    </div>
                                </div>
                                <!-- <div class="pure-u-1-2 pr6">
                                    <div class="textfield">
                                        </div>                                   
                                </div> -->
                            </div>
                            <div class="pure-g">
                                <div class="pure-u-1-2 pr10 mb10">
                                    <div  style="margin-left:-1px" class="pure-u-1 ml10 mb20 pointer app-auth-select textfield textfield--focused" id="comboPaises">
                                    <select class="pure-u-1 app-change-country textfield__input textfield__input--select" name="session" id="session" required>
                                        <option value="" >Time Slot</option>
                                        <option value="morning">Morning Session</option>
                                        <option value="fullday">Full Day</option>
                                        <option value="evening">Evening Session</option>                                    
                                        </select>
                                    </div>
                                </div>
                                 <div class="pure-u-1-2 pl10">
                                 <div class="textfield storefront-contact-date app-common-datepicker">
                                        <!-- <i class="textfield__icon icon icon-form-cal"></i> -->
                                        <input type="date" class="pure-u-1"  id="date" name="book_date" required>
                                    </div> 
                                </div>
                            </div>      
                            <div class="pure-g">     
                                  <div style="margin-left:-1px" class="pure-u-1 ml10 mb20 pointer app-auth-select textfield textfield--focused" id="comboPaises">
                                   <select class="pure-u-1 app-change-country textfield__input textfield__input--select" onchange="myFunction()" name="event" id="event" required>
                                    <option value="" >Select Event</option>
                                                                        
                                    <?php 
                                         $sql="select * from event_master where venue_id= '$venue_id' ";
                                         $result=mysqli_query($connect,$sql);
                                         if(mysqli_num_rows($result)>0)
                                         { 
                                             while($r=mysqli_fetch_array($result))
                                             {
                                                 $eid=$r['id'];
                                                 $event_name=$r['event_name'];
                                             $q="select * from event_master where event_name ='$event_name' and id='$eid' ";
                                             $res=mysqli_query($connect,$q);
                                             while($row=mysqli_fetch_array($res))
                                             {
                                                 $price=$row['price'];
                                                 //echo $price;
                                                 $advance=$row['advance'];
                                                 $deposite_amount=($price*$advance)/100;
                                             }
                                             
                                             echo "<option data-price='$r[3]'  data-advance='$r[4]'  value='$r[2]'> $r[2] </option>";
                                        ?>  
                                                                                   <?php } } else{
                                                                                      echo "<option  data-price='$amount'  data-advance='$booking_per' value='Wedding' >Wedding </option>";   
                                                                                   }
                                                                                   ?>                                          
                                 </select>
                                </div>
                                
                            </div>
                            <div class="pure-g">
                                <div class="pure-u-1-2 pr10 mb10">
                                    <div class="textfield storefront-contact-date app-common-datepicker">
                                        <i class="textfield__icon icon icon-form-cal"></i>
                                        <input class="textfield__input textfield__input--disable pure-u-1" name="amount" id="amt" title="Total Amount" autofocus type="text" readonly="readonly" placeholder="Booking Amount">
                                    </div>
                                </div>
                                 <div class="pure-u-1-2 pl10">
                                        <div class="textfield">
                                            <i class="textfield__icon icon icon-form-mobile"></i>
                                            <input type="text" name="deposite_amt"  id="deposite" placeholder='Advance Percentage' title="Advance Percentage"  class="textfield__input pure-u-1" readonly autofocus ">
                                        </div>
                                </div>
                            </div>
                            <div class="pure-g">
                                <div class="pure-u-1-2   pr10 mb10">
                                    <div class="pure-u-1 textfield">
                                            <i class="textfield__icon icon icon-form-user"></i>
                                            <input class="textfield__input" type="text" id="total" readonly name="total" title="Advance Amount" autofocus  placeholder="Total Advance Booking">
                                    </div>
                                </div>
                                <div class="pure-u-1-2 pl10">
                                    <div class="pure-u-1 textfield">
                                        <i class="textfield__icon icon icon-form-user"></i>
                                        <input class="textfield__input" type="text" id="remain" readonly name="remain" autofocus title="Remaining Amount" placeholder="Remaining Amount">
                                    </div>
                                  </div>
                            </div>                         
                            <div class="pure-u-1">
                                <div class="text-center mt20">
                                    <input class="btn-flat red btn-full layout-auth-submit-button" type="submit" name="btnBook" value="Book Now">
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function myFunction(){
        var amount = $('#event').find(':selected').data('price');
        var deposite = $('#event').find(':selected').data('advance');
        $('#amt').val(amount);
        $('#deposite').val(deposite);
        var advance,rem;
        if(deposite!=0)
        {
            advance=(amount*deposite)/100;
            $('#total').val(advance);
            rem=amount-advance;
            $('#remain').val(rem);
        }
        else{            
            advance=amount; 
            $('#total').val(advance); 
            rem=amount-advance;
            $('#remain').val(rem);
       }
        
    }
</script>