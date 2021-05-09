<div class="storefrontHeader" style="background-color:honeydew">
    <div class="wrapper">
        <!-- Start Container -->
        <div class="storefrontHeader__infoContainer">
            <input type="hidden" name="facebook_conversion_enabled" value="1" >
            <input type="hidden" name="google_conversion_enabled" value="1">            
            <div class="storefrontHeader__info">
                <h1 class="storefrontHeader__title"><?php echo $name;?></h1>
                <div class="storefrontHeaderOnepage__address">
                    <!-- APP_SHOW_LOCATION_GEO -->
                    <?php echo $address;?>                                         
                    <!-- /APP_SHOW_LOCATION_GEO -->
                    <a class="storefrontHeaderOnepage__infoItem" href="map.php?id=<?php echo  $vendor_id;?>">Map | </a>
                    <?php if(isset($website)){  ?>
                        <a class="storefrontHeaderOnepage__infoItem" href="../../../<?php echo $website;?>" target="_blank">Website |</a>
                        <?php } else{echo ''; }?>
                       
						<span class="app-emp-phone-wrapper storefrontHeaderOnepage__infoItem storefrontDrop pointer">
                        <span class="app-emp-phone-txt">Landline: <?php if($plan_id=='3' && isset($status)=='Active'){  ?><?php echo $landline;} else{ echo ' Not Show';}?></span>
                            <span id="app-emp-phone" class="app-emp-phone dnone"><?php echo $landline;?></span>
                        </span>
                </div>
            </div>
                        <!-- Start Review -->
            <div class="storefrontHeader__actions">
                <span class="btnOutline btnOutline--grey storefrontHeader__review">
                    <a rel="nofollow" href="review.php?id=<?php echo $vendor_id;?>&vid=<?php echo $venue_id;?>"><i class="svgIcon svgIcon__starOutline ">
                    <svg viewBox="0 0 32 32" width="16" height="16">
                        <use xlink:href="#svg-_common-starOutline"></use>
                    </svg></i>Write a review </a>
                </span>
           <?php
            if(isset($_SESSION['User_Name']))
            {
            $userid=$_SESSION['User'];
            $sql="select * from book_venue where user_id='$userid' and venue_id='$venue_id' and vendor_id='$vendor_id' and event_status='Confirmed'";
            $result=mysqli_query($connect,$sql);
            if(mysqli_num_rows($result)>0)
            {?>
                <span class="app-save-vendor btnOutline btnOutline--grey storefrontHeader__save ml5" role="button" data-type="save" >
                 <a href="controller/book.php?id=<?php echo $vendor_id;?>&vid=<?php echo $venue_id;?>">
               <i class="fa fa-check-circle" style="color:darkturquoise;font-size:22px">
                   </i>  Hired </a></span>

              <?php } else{ ?>
                <span class="app-save-vendor btnOutline btnOutline--grey storefrontHeader__save ml5" role="button" data-type="save" >
                        <a href='controller/book.php?id=<?php echo $vendor_id;?>&vid=<?php echo $venue_id;?>'><i class="svgIcon svgIcon__hired">
                    <svg viewBox="0 0 32 32" width="16" height="16">
                        <use xlink:href="#svg-vendors-hired"></use>
                    </svg> </i>  Hired?   </a> </span>
                
        <?php }}
        else
        {?>  
        <span class="app-save-vendor btnOutline btnOutline--grey storefrontHeader__save ml5" role="button" data-type="save" >
                        <a href='controller/book.php?id=<?php echo $vendor_id;?>&vid=<?php echo $venue_id;?>'><i class="svgIcon svgIcon__hired">
                    <svg viewBox="0 0 32 32" width="16" height="16">
                        <use xlink:href="#svg-vendors-hired"></use>
                    </svg> </i>  Hired?   </a> </span>
        <?php }?>

            <?php
            if(isset($_SESSION['User_Name']))
            {
            $userid=$_SESSION['User'];
            $sql="select * from wishlist where userid='$userid' and venue_id='$venue_id'";
            $result=mysqli_query($connect,$sql);
            if(mysqli_num_rows($result)>0)
            {?>
                  <span class="app-track-profile-links app-link btnOutline btnOutline--grey storefrontHeader__save active ml5" data-href="" >
                  <a href='controller/wishlist.php?id=<?php echo $vendor_id;?>&vid=<?php echo $venue_id;?>'><i class="fa fa-heart" style="color:darkturquoise;font-size:22px">
                  </i>       Saved   </a>     </span>
        <?php } else{ ?>
            <span class="app-save-vendor btnOutline btnOutline--grey storefrontHeader__save ml5" role="button" data-type="save" >
            <a href='controller/wishlist.php?id=<?php echo $vendor_id;?>&vid=<?php echo $venue_id;?>'><i class="svgIcon svgIcon__heartOutline ">
                    <svg viewBox="0 0 32 32" width="16" height="16">
                        <use xlink:href="#svg-_common-heartOutline"></use>
                    </svg> </i>    Save  </a>   </span>

        <?php }}
        else
        {?>
            <span class="app-save-vendor btnOutline btnOutline--grey storefrontHeader__save ml5" role="button" data-type="save" >
                        <a href='controller/wishlist.php?id=<?php echo $vendor_id;?>&vid=<?php echo $venue_id;?>'><i class="svgIcon svgIcon__heartOutline ">
                    <svg viewBox="0 0 32 32" width="16" height="16">
                        <use xlink:href="#svg-_common-heartOutline"></use>
                    </svg> </i>    Save    </a> </span>
       <?php }
        ?>
            </div>
            <!-- End Review -->
        </div>
        <!-- End Container -->
        <div class="storefrontSummary" >
            <div id="lContactEmp">
                <a   data-toggle="modal" name="quotation" data-target="#modelQuotation" id="btnCompany" class="app-show-lead-layer app-profile-lead-btn app-track-profile-links app-ua-track-event storefront-header-btn btn btn-primary" rel="nofollow" href="#">
                        Request pricing                    </a>
            </div>
            <?php 
                    $q="select *,round(avg((quality+response+value)/3),1) as totalavg,round(avg(quality),1) as tlquality,round(avg(response),1) as tlrepsonse,round(avg(value),1) as tlvalue from rating where venue_id='$venue_id'";
                    $r=mysqli_query($connect,$q);
                    while($row=mysqli_fetch_array($r))
                    {
                        $totalavg=$row['totalavg'];
                        $toalquality=$row['tlquality'];
                        $totalresponse=$row['tlrepsonse'];
                        $totalvalue=$row['tlvalue'];
                    }
                ?>    
             <a class="storefrontSummary__item" href="view_review.php?id=<?php echo  $vendor_id;?>">
                    <span class="storefrontSummary__label">
                        <div class="rating-stars-vendor mr5">
                           <span class="rating-stars-vendor rating-stars-vendor-bar" style=" width:95%;"><img src="Style/images/rate.png" width="10px" height="10px">&nbsp;<img src="Style/images/rate.png" width="10px" height="10px">&nbsp;<img src="Style/images/rate.png" width="10px" height="10px">&nbsp;<img src="Style/images/rate.png" width="10px" height="10px">&nbsp;<img src="Style/images/rate.png" style="color:black"width="10px" height="10px"></span>
                        </div>
                         <?php  if(isset($rcount)){ echo $rcount;}else{echo '';}?> reviews  </span>
                    <div class="storefrontSummary__text strong">  <?php if(isset($totalavg)){ echo $totalavg;}else{echo '0.0';} ?> out of 5.0   </div>
            </a>
       
            <div class="storefrontSummary__item">
                    <span class="storefrontSummary__label">Booking Amount(Empty)   </span>
                        <i class="svgIcon svgIcon__pricing listItem__featuresIcon">
                        <svg viewBox="0 0 32 32" width="16" height="16">
                            <use xlink:href="#svg-vendors-pricing"></use>
                        </svg> </i>   ₹  <?php  if(isset($amount)){ echo $amount;}else{echo '';}?>
            </div>  
            <div class="storefrontSummary__item">
                    <span class="storefrontSummary__label">Contact Number </span>
                        <i class="fa fa-phone"></i>
                <?php if($plan_id=='3'&& $status=='Active'){ echo $contact;} else{ echo 'Not Show';}?>
            </div>                                    
            <div class="storefrontSummary__item">
                    <span class="storefrontSummary__label">Number of guests</span>
                        <i class="svgIcon svgIcon__guests listItem__featuresIcon">
                        <svg viewBox="0 0 32 32" width="16" height="16">
                            <use xlink:href="#svg-_common-guests"></use>
                        </svg></i>  <?php if(isset($chair)){echo '50   to ' . $chair;}else{echo '50 to above';}?> 
            </div>
                            
        </div>
        <div class="app-dual-calendar dnone" data-year="2020" data-month="3"></div>
    </div> <!--End Wrapper Class-->
</div>
<?php 
if(isset($_SESSION['User_Name']))
{
    ?>
    <!-- Model Start -->
<div id="modelQuotation" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="margin-top:-30px;">
                <button type="button" class="close" data-dismiss="modal" style="color:black">&times;</button>
                <h4 class="modal-title" style="text-align-last: center">Request Quotation Form</h4>
            </div>
            <div class="modal-body">
            <?php 
            $sql="select *,tv.email as vemail from tbl_vendor td, tbl_venue tv where td.vendor_id='$vendor_id' and tv.vendor_id='$vendor_id' and tv.venue_id='$venue_id'"; 
            $result=$connect->query($sql);
            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) 
                {
                    $id=$row['vendor_id'];
                    $name=$row['venue_name'];
                    $address=$row['venue_address'];
                    $city=$row['city'];	
                    $contact=$row['mobile'];
                    $email_venue=$row['vemail'];
                    $amount=$row['booking_amt'];
                }
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
             <center>
                <form action="controller/quotation_email.php?id=<?php  echo $vendor_id; ?>" method="post" name="form">
				<br><table width="500px" style="border-collapse: separate; border-spacing:0 2em">
					<tr>
                         <td><label>User Name&nbsp;</label></td>
                            <td>:&nbsp;&nbsp;</td>
							<td><input class="pure-u-1" type="text" id="uname"  name="user_name" value="<?php echo $username;?>" readonly  autofocus placeholder="User name"></td>
                    </tr>
					<tr>
                            <td><label>Venue Name&nbsp;</label></td>
                            <td>:&nbsp;&nbsp;</td>
							<td><input class="pure-u-1" type="text" id="venue_name" readonly name="venue_name"  value="<?php echo $name;?>"  autofocus  placeholder="Venue name"></td>
                    </tr>
					<tr>
                            <td><label>Booking Date&nbsp;</label></td>
                            <td>:&nbsp;&nbsp;</td>
							<td> <input type="date" name="book_date"  class="pure-u-1" value="" required></td>
					</tr>
					<tr>
						    <td><label>Event Name&nbsp;</label></td>
                            <td>:&nbsp;&nbsp;</td>
							<td><input  type="text"  class="pure-u-1" name="event"  placeholder="Event Name" required></td>
					</tr>
					<tr>
						<td><label>Another Requirement&nbsp;</label></td>
                            <td>:&nbsp;&nbsp;</td>
							<td> <textarea  class="pure-u-1" placeholder="Your Requirement" name="requirement" ></textarea></td>
						</div>
					</tr>
					</table>                
            </div>
            <div class="modal-footer">
            <button type="submit" name="quotation" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </form>
            </center>
            </div>
        </div>
    </div>
</div>
<!-- Model End -->
<?php
}
else
{?>
    <!-- Model Start -->
<div id="modelQuotation" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" style=" margin: 0 ;padding: 0;">
            <div class="modal-header" style="margin-top:-30px;margin-bottom:-25px">
                <button type="button" class="close" data-dismiss="modal" style="color:black">&times;</button>
                <h5 class="modal-title" align="center">Request Quotation Form</h5>
            </div>
            <div>
                 <a href="login.php"><h3 align="center"> Firstly Login to Send Request Quotation.</h3></a>
                 <center><a href="login.php" class="btn btn-secondary"><h3 align="center">Login</h3></a></center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Model End -->
<?php } ?>