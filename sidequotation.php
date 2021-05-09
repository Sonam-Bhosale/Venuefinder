<div id="contact-emp">
<?php 
            $sql="select *,tv.email as vemail from tbl_vendor td,tbl_venue tv where td.vendor_id='$vendor_id' and tv.vendor_id='$vendor_id'"; 
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
  <form action="controller/quotation_email.php?id=<?php  echo $venue_id; ?>" class="app-internal-tracking-form app-vendor-contact-form vendor-contact-form" method="post" name="form">
                                   <div class="storefrontContact__content">
                                        <p class="storefrontContact__title storefrontContact__title--center">
                                        <i class="svgIcon svgIcon__sendEnvelope storefrontContact__titleIcon svgIcon--center"><svg viewBox="0 0 34 16"><path d="M10.25 6.75v1.5H.75v-1.5h9.5zm.5 4.5v1.5h-5.5v-1.5h5.5zm23 2.293c0 1.157-.898 2.207-1.992 2.207H16.242c-1.094 0-1.992-1.05-1.992-2.207V2.473c0-1.158.898-2.223 1.992-2.223h15.516c1.094 0 1.992 1.065 1.992 2.223v11.07zm-1.5 0V2.473c0-.38-.288-.723-.492-.723H16.242c-.204 0-.492.342-.492.723v11.07c0 .376.283.707.492.707h15.516c.209 0 .492-.331.492-.707zm-7.807-5.308a.75.75 0 01-.886 1.21l-6.882-5.04a.75.75 0 11.886-1.21l6.882 5.04zm0 1.21a.75.75 0 01-.886-1.21l6.882-5.04a.75.75 0 11.886 1.21l-6.882 5.04zm6.984 1.68a.75.75 0 01-1.09 1.03l-2.647-2.8a.75.75 0 011.09-1.03l2.647 2.8zm-13.764 1.03a.75.75 0 01-1.09-1.03l2.647-2.8a.75.75 0 011.09 1.03l-2.647 2.8z" fill-rule="nonzero"></path></svg></i>
                                         Message vendor   </p>
                                    <div class="input-group input-group--iconRight">
                                    <input class="form-control" type="text" id="uname"  name="user_name" value="<?php echo $username;?>" readonly  autofocus maxlength="100" placeholder="User name">
                                        <i class="icon-header icon-header-form-user"></i>
                                    </div>

                                    <div class="input-group input-group--iconRight">
                                    <input class="form-control" type="text" id="venue_name" readonly name="venue_name"  value="<?php echo $name;?>"  autofocus maxlength="100" placeholder="Venue name">                                            <i class="icon-header icon-header-form-mail"></i>
                                    </div>

                                    <div class="input-group input-group--iconRight">
                                    <input type="date" name="book_date"  value="" required>
                                        <i class="icon-header icon-header-form-cal"></i>
                                    </div>

                                    <div class="input-group input-group--iconRight">
                                    <input  type="text" class="form-control" name="event"  placeholder="Event Name" required>
                                        <i class="icon-header icon-header-form-guests"></i>
                                    </div>
                                    <div class="input-group storefrontContact_textarea">
                                        
                                        <textarea class="app-lead-form-comment-field"  placeholder="Your Requirement" name="requirement" data-allow-enter="true"  rows="3"></textarea>
                                    </div>
                                    <input class="btn btn-primary btn-full testing-send-button app-vendor-contact-button" type="submit" data-type="0" value="Request pricing">
                                    <a  href="login.php"><p style="color:black">Firstly login to send Request Pricing </p></a>
                               </div>
                            </form> 
                        </div>  