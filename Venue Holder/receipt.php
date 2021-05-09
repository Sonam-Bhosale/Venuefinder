<?php include("includes/db_connect.php");?>
<?php if(isset($_SESSION['venue_id']))
{  if(( time() -  $_SESSION['last_login_time']) >900)
        {
            header("location:../controller/logout.php");
            echo "<script>window.location.href='../controller/logout_venue.php';</script>";
        }
        else{
            $_SESSION['last_login_time']=time();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>VenueFinder | Book Confirmation</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans');
    /* CLIENT-SPECIFIC STYLES */
    #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
    .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing */
    body, table, td, a{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
    table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
    img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */
    body{margin:0; padding:0;}
    img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
    table{border-collapse:collapse !important;}
    body{height:100% !important; margin:0; padding:0; width:100% !important;}
    * {
        -ms-text-size-adjust:100%;
        -webkit-text-size-adjust:none;
        -webkit-text-resize:100%;
        text-resize:100%;
    }

    /* iOS BLUE LINKS */
    .appleBody a {color:#68440a; text-decoration: none;}
    .appleFooter a {color:#999999; text-decoration: none;}

    /* MOBILE STYLES */
    @media screen and (max-width: 525px) {

        /* ALLOWS FOR FLUID TABLES */
        table[class="wrapper"]{
          width:100% !important;
        }

        /* ADJUSTS LAYOUT OF LOGO IMAGE */
        td[class="logo"]{
          text-align: left;
          padding: 0 !important;
        }

        td[class="logo"] img{
          margin:0 auto!important;
          padding: 30px 0 !important;
        }

        /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */
        td[class="mobile-hide"]{
          display:none;}

        img[class="mobile-hide"]{
          display: none !important;
        }

        img[class="img-max"]{
          max-width: 100% !important;
          height:auto !important;
        }

        /* FULL-WIDTH TABLES */
        table[class="responsive-table"]{
          width:100%!important;
        }

        /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */

        td[class="padding-copy"]{
          text-align: center;
        }

        td[class="padding-meta"]{
          text-align: center;
        }

        td[class="no-pad"]{
          padding: 0 0 20px 0 !important;
        }

        td[class="no-padding"]{
          padding: 0 !important;
        }

        /* ADJUST BUTTONS ON MOBILE */
        td[class="mobile-wrapper"]{
            padding: 10px 5% 15px 5% !important;
        }

        table[class="mobile-button-container"]{
            margin:0 auto;
            width:100% !important;
        }

        a[class="mobile-button"]{
            width:80% !important;
            padding: 15px !important;
            border: 0 !important;
            font-size: 16px !important;
        }

    }
</style>
</head>
<body style="margin: 0; padding: 0;">
    <!-- Begin Copy -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
        <tr>
            <td bgcolor="#f2f3f8" align="center">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                        <td align="center"><a href="booking_order.php"><i class="la la-back la-5x"></i> <h3>GO BACK</h3> </a></td>
                               
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- End Copy -->

    <!-- Begin Section -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
        <tr>
            <td bgcolor="f2f3f8" align="center" style="padding: 0 15px 0 15px;" class="section-padding">
                <table border="0" cellpadding="0" cellspacing="0" width="600" class="responsive-table">
                    <tr>
                        <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <!-- Begin Content -->
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                            <tr>
                                                <td align="left" style="font-size: 30px; font-family: Montserrat, Arial, sans-serif; color: #2c304d; padding: 30px 15px 0 15px;" class="padding-copy">Thanks for booking!</td>
                                            </tr>
                                        </table>
                                        <!-- End Content -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                      
                                        $id=$_GET['id'];
                                        $select="select *,ru.name as username from book_venue bv,register_user ru,tbl_venue tv,tbl_vendor td,payment p where bv.book_id='$id' and bv.user_id=ru.user_id and tv.venue_id=bv.venue_id and td.vendor_id=bv.vendor_id" ;
                                        $result=mysqli_query($connect,$select);
                                        while($r=mysqli_fetch_array($result))
                                        {
                                            $vname=$r['venue_name'];
                                            $uname=$r['username'];
                                            $bdate=$r['booking_date'];
                                            $ename=$r['event_name'];
                                            $session=$r['session'];
                                            $status=$r['event_status'];
                                            $advance=$r['advance_payment'];
                                            $remain=$r['remain_payment'];
                                        }
                                        ?>
                                        <!-- Begin Content -->
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                            <tr>
                                                <td align="left" style="padding: 50px 15px 0 15px; font-size: 15px; line-height: 25px; font-family: Noto Sans, Arial, sans-serif; color: #aea9c3;" class="padding-copy">
                                                <b style="color: #2c304d;">BOOK ID :<?php echo $id;?></b><br>Booking Date :<?php echo $bdate;?><br>
                                                Event Name : <?php echo $ename;?><br>
                                               Time Period : <?php echo $session;?><br>
                                                Status : <?php echo $status;?><br><br>
                                                <span style="color: #2c304d;">Booked By:</span><br><?php echo $uname;?>
                                            </tr>
                                        </table>
                                        <!-- End Content -->
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- End Section -->
    <!-- Begin Order Section -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
        <tr>
            <td bgcolor="#f2f3f8" align="center" style="padding: 0 15px 0 15px;" class="section-padding-bottom-image">
                <table border="0" cellpadding="0" cellspacing="0" width="600" class="responsive-table">
                    <tr>
                        <td>
                            <!-- Begin Columns -->
                            <table cellspacing="0" cellpadding="0" border="0" width="100%" bgcolor="#ffffff">
                                <tr>
                                    <td valign="middle" style="padding: 0;" class="mobile-wrapper">
                                        <!-- Left Column -->
                                        <table cellpadding="0" cellspacing="0" border="0" width="47%" align="left" class="responsive-table">
                                            <tr>
                                                <td style="padding: 10px 15px 0 0;">
                                                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                        <tr>
                                                            <td align="left" style="padding: 15px 0 0 15px; font-family: Montserrat, Arial, sans-serif; color: #2c304d; font-size: 21px;">Venue Name</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- End Left Column -->
                                        <!-- Begin Right Column -->
                                        <table cellpadding="0" cellspacing="0" border="0" width="47%" align="right" class="responsive-table">
                                            <tr>
                                                <td style="padding: 10px 15px 0 0;">
                                                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                        <tr>
                                                            <td align="right" style="padding: 15px 0 0 0; font-family: Montserrat, Arial, sans-serif; color: #2c304d; font-size: 21px;">Payment Details</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- End Right Column -->
                                    </td>
                                </tr>
                            </table>
                            <!-- End Columns -->
                            <!-- Begin Columns -->
                            <table cellspacing="0" cellpadding="0" border="0" width="100%" bgcolor="#ffffff">
                                <tr>
                                    <td valign="middle" style="padding: 0;" class="mobile-wrapper">
                                        <!-- Left Column -->
                                        <table cellpadding="0" cellspacing="0" border="0" width="47%" align="left" class="responsive-table">
                                            <tr>
                                                <td style="padding: 10px 15px 0 0;">
                                                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                        <tr>
                                                            <td align="left" style="padding: 10px 0 0 15px; font-family: Noto Sans, Arial, sans-serif; color: #94a4b0; font-size: 15px; line-height: 24px;">
                                                            <span style="color: #2c304d;"><?php echo $vname;?></span><br></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- End Left Column -->
                                        <!-- Begin Right Column -->
                                        <table cellpadding="0" cellspacing="0" border="0" width="47%" align="right" class="responsive-table">
                                            <tr>
                                                <td style="padding: 10px 15px 0 0;">
                                                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                        <tr>
                                                            <td align="right" style="padding: 10px 0 0 0; font-family: Noto Sans, Arial, sans-serif; color: #2c304d; font-size: 16px; line-height: 20px;">
                                                            Advance:<?php echo $advance;?></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" style="padding: 10px 0 0 0; font-family: Noto Sans, Arial, sans-serif; color: #2c304d; font-size: 16px; line-height: 20px;">
                                                           Remain: <?php echo $remain;?></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- End Right Column -->
                                    </td>
                                </tr>
                            </table>
                            <!-- End Columns -->
                            
                            <!-- Begin Columns -->
                            <table cellspacing="0" cellpadding="0" border="0" width="100%" bgcolor="#ffffff">
                                <tr>
                                    <td valign="middle" style="padding: 0;" class="mobile-wrapper">
                                        <!-- Begin Right Column -->
                                        <table cellpadding="0" cellspacing="0" border="0" width="47%" align="right" class="responsive-table">
                                            <tr>
                                                <td style="padding: 20px 15px 0 0;">
                                                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                        <tr>
                                                            <td align="right" style="padding: 40px 0 0 0; font-family: Noto Sans, Arial, sans-serif; color: #2c304d; font-size: 15px; line-height: 20px; border-top: 2px solid #eee;">
                                                         <span style="font-size: 30px; color: #e23f83;">Total: Rs. <?php echo $advance+$remain;?></span></td>
                                                        </tr> 
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- End Right Column -->
                                    </td>
                                </tr>
                            </table>
                            <!-- End Columns -->
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- End Order Section -->
  
   
    <!-- Begin Copy -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
        <tr>
            <td bgcolor="#f2f3f8" align="center">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                        <td style="padding-top: 30px;">
                            <!-- UNSUBSCRIBE COPY -->
                            <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="responsive-table">
                                <tr>
                                    <td align="center" valign="middle" style="font-size: 12px; line-height: 24px; font-family: Noto Sans, Arial, sans-serif; color:#aea9c3; padding-bottom: 35px;">
                                        <span class="appleFooter" style="color:#aea9c3;">VenudFinder, 2019-20. All Rights Reserved</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- End Copy -->
</body>
</html>
<?php }
        }
        else
        {	
            echo"<script> alert('You Must Login First')</script>";
            echo "<script>window.location.href='../venue.php';</script>";	
        }
?>