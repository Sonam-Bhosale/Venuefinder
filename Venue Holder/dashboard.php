<?php include('includes/header.php');?>
     <div class="page db-social">
           <?php include('includes/header_section.php');?>
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <?php include('includes/navbar.php');?>
                <!-- Begin Content -->
                <div class="content-inner compact">
                    <!-- Begin Jumbotron -->
                    <?php 
                        $id=$_SESSION['venue_id'];
                        $sq="select * from tbl_vendor tv where tv.vendor_id='$id'";
                        $result=mysqli_query($connect,$sq);
                        while($row=mysqli_fetch_array($result))                        
                        {
                                $name=$row['name'];
                        }
                        $sql="select * from tbl_vendor tv,tbl_venue tvv where tv.vendor_id='$id' and tvv.vendor_id='$id'";
                        $result=mysqli_query($connect,$sql);
                        while($row=mysqli_fetch_array($result))                        
                        {
                            $logo=$row['logo'];
                            $banner=$row['banner_image'];
                            $views=$row['views'];
                            $name=$row['name'];
                            $venue_name=$row['venue_name'];
                            $address=$row['venue_address'];
                        }
                    ?>
                     <?php 
                        $id=$_SESSION['venue_id'];
                        $sql ="SELECT book_id from book_venue bv,payment p,tbl_venue tv,tbl_vendor td where bv.book_id=p.bookid and p.payment_status='TXN_SUCCESS' and  bv.vendor_id='$id' and tv.vendor_id='$id' and tv.vendor_id=td.vendor_id and bv.venue_id=tv.venue_id ";
                        $result = mysqli_query($connect,$sql);
                        $book_count=mysqli_num_rows($result);
                    ?>
                     <?php 
                        $id=$_SESSION['venue_id'];
                        $sql="select * from rating r,tbl_vendor td,tbl_venue tv where r.venue_id=tv.venue_id and tv.vendor_id='$id' and td.vendor_id=tv.vendor_id";
                        $result=mysqli_query($connect,$sql);
                        $review_count=mysqli_num_rows($result);
                    ?>
                     <?php 
                        $id=$_SESSION['venue_id'];
                        $sql="select * from wishlist w, tbl_vendor td,tbl_venue tv where w.venue_id=tv.venue_id and tv.vendor_id='$id' and td.vendor_id=tv.vendor_id";
                        $result=mysqli_query($connect,$sql);
                        $wishlist_count=mysqli_num_rows($result);
                    ?>
					<div class="jumbotron jumbotron-fluid" style="background-image:url('../controller/uploads/banner/<?php echo $banner; ?>')"></div>
                    <!-- End Jumbotron -->
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-11">
                                <!-- Start Head Profile -->
                                <div class="widget head-profile has-shadow">
                                    <div class="widget-body pb-0">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-start justify-content-md-start justify-content-center">
                                                <ul>
                                                    <li>
                                                        <div class="counter"><?php if(isset($views)){echo $views;}else{echo '0';} ?></div>
                                                        <div class="heading" style="color:black">Viewers</div>
                                                    </li>                                                   
                                                    <li>
                                                        <div class="counter"><?php echo $book_count;?></div>
                                                        <div class="heading" style="color:black">Booking</div>
                                                    </li> 
                                                    <li>
                                                        <div class="counter"><?php echo $review_count;?></div>
                                                        <div class="heading" style="color:black">Reviews</div>
                                                    </li><li>
                                                        <div class="counter"><?php echo $wishlist_count;?></div>
                                                        <div class="heading" style="color:black">Wishlist</div>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-center">
                                                <div class="image-default">
                                                <?php if(isset($logo)){ ?> <img class="rounded-circle"  src="../controller/uploads/logo/<?php echo $logo; ?>" height="130px" width="150px" alt="...">
                                                    <?php }else{ ?><img class="rounded-circle" src="../layout/assets/logo.png" height="130px" width="150px" alt="logo" style="width: 70px;">
                                            <?php }?>
                                                </div>
                                                <div class="infos" >
                                                    <h2><?php if(isset($name)){echo $name;}else{ echo '';}?></h2>
                                                    <div class="location" style="color:black">
                                                        <?php if(isset($venue_name)){echo $venue_name;}else{ echo '';}?><br>
                                                        <?php if(isset($address)){echo $address;}else{ echo '';}?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 d-flex justify-content-lg-end justify-content-md-end justify-content-center">
                                                <div class="follow">
                                                   
                                                    <div class="actions dark">
                                                        <div class="dropdown">
                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                                <i class="la la-ellipsis-h"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a href="../controller/logout.php" class="dropdown-item"> 
                                                                    Logout
                                                                </a>
                                                                <a href="profile.php" class="dropdown-item"> 
                                                                    Setting
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="head-nav nav nav-tabs justify-content-center">
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="images.php">Photos</a></li>
                                            <li><a href="videos.php">Videos</a></li>
                                        </ul>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="alert alert-info back-widget-set text-center" style="background-color:bisque;color:blue">
                                                        <i class="la la-money la-5x"></i>
                                                    <?php 
                                                    $sql ="SELECT sum(p.payment_amount) as sum from book_venue bv,payment p where bv.book_id=p.bookid and p.payment_status='TXN_SUCCESS' and  bv.vendor_id=$id ";
                                                    $result = mysqli_query($connect,$sql);
                                                    $rows=mysqli_fetch_array($result);
                                                    ?>
                                                    <h3><?php if(isset($rows['sum'])){echo '₹'.htmlentities($rows['sum']).'.00';}else{ echo '₹ 0.00';}?></h3> Total Earning
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                        <div class="alert alert-info back-widget-set text-center" style="background-color:bisque;color:blue"> 
                                        <?php 
                                                        $id=$_SESSION['venue_id'];
                                                        $sql="select *,count(venue_plan.id) as count,date(venue_plan.start_date) as sdate,date(venue_plan.expire_date) as edate from venue_plan,subscription_plan where venue_plan.venue_id='$id' and venue_plan.plan_id =subscription_plan.plan_id";
                                                        $result=mysqli_query($connect,$sql);
                                                        $count=mysqli_num_rows($result);
                                                        while($row=mysqli_fetch_array($result))
                                                        {
                                                            $plan_name=$row['plan_name'];
                                                            $start_date=$row['sdate'];
                                                            $start_ts=strtotime($start_date);
                                                            $activated_date=date('d-m-Y',$start_ts);
                                                            $enddate=$row['edate'];
                                                            $end_ts=strtotime($enddate);
                                                            $end_date=date('d-m-Y',$end_ts);
                                                            $monthly=$row['three_month'];
                                                            $yearly=$row['yearly'];
                                                            $price=$row['price'];
                                                            if($price==$monthly)
                                                            {
                                                                $type='Three Month';
                                                            }
                                                            else{
                                                                $type='Yearly';
                                                            }
                                                            $today=date('d-m-Y');
                                                            if(strtotime($today) < strtotime($end_date))
                                                            {
                                                                $diff=strtotime($end_date)-strtotime($today);
                                                                $remain=abs(floor($diff/86400));
                                                            }else{
                                                                $remain='0';    
                                                            }
                                                            
                                                            $count=$row['count'];
                                                        }
                                            ?>
                                       
                                        <h3>Plan Details</h3><h5>Active Plan:<?php if(isset($plan_name)){echo '<u style="color:black;font-size:16px">'.$plan_name.'</u>';}?></h5>
                                        <!-- Plan Type:<?php //if(isset($type)){echo //$type;}?> -->
                                        Remaining Days:<?php if(isset($remain)){echo $remain;}?>                                                        
                                                        <h3><?php if(isset($count)){echo $count;}else{ echo '0';}?></h3>Total Purchase Count
                                                    </div>                                                                                       
                                                        
                                                </div>
                                            <div class="col-md-4">
                                                <div class="alert alert-success back-widget-set text-center" style="background-color:lavender;color:blue">
                                                        <i class="la la-calendar la-3x"></i>
                                                    <?php 
                                                    $date=date('d-m-Y');
                                                    $sql ="SELECT book_id from book_venue,payment where payment.payment_status='TXN_SUCCESS' and payment.bookid=book_venue.book_id and book_venue.vendor_id= '$id'  and book_venue.booking_date > '$date' and book_venue. event_status='Confirmed'";
                                                    $result = mysqli_query($connect,$sql);
                                                    $rows=mysqli_num_rows($result);
                                                    ?>
                                                    <h3><?php echo htmlentities($rows);?></h3> Total Pending Bookings
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="alert alert-success back-widget-set text-center" style="background-color:lavender;color:blue">
                                                        <i class="la la-calendar la-3x"></i>
                                                    <?php 
                                                     $date=date('d-m-Y');
                                                    $sql ="SELECT book_id from book_venue,payment where book_venue.vendor_id='$id' and payment.payment_status='TXN_SUCCESS' and payment.bookid=book_venue.book_id and book_venue.event_status='Completed'";
                                                    $result = mysqli_query($connect,$sql);
                                                    $rows=mysqli_num_rows($result);
                                                    ?>
                                                    <h3><?php echo htmlentities($rows);?></h3> Total Completed Bookings
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="alert alert-success back-widget-set text-center" style="background-color:lavender;color:blue">
                                                        <i class="la la-calendar la-3x"></i>
                                                    <?php 
                                                    $sql ="SELECT book_id from book_venue,payment where book_venue.vendor_id='$id'  and payment.payment_status='TXN_SUCCESS' and payment.bookid=book_venue.book_id and book_venue.event_status='Canceled'";
                                                    $result = mysqli_query($connect,$sql);
                                                    $rows=mysqli_num_rows($result);
                                                    ?>
                                                    <h3><?php echo htmlentities($rows);?></h3> Total Canceled Bookings
                                                </div>
                                            </div>
                                           
                                        
                                        </div>
                                        <br> <div class="row">
                                <div class="col-md-6">
                                <h3><u>Monthly Revenue Analysis</u></h3>
                                </div>
                            </div><br>
                                    <div class="row">
                                    <div class="col-md-12">
                                                 <div id="chartContainer3" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                                        </div>         
                                        </div>
                                        <br>
                                        <br>
                                        <?php
                            $sql="SELECT sum(payment.payment_amount) as Sum,MONTHNAME(create_at) as 'Month Name'
                            FROM payment,book_venue WHERE book_venue.vendor_id='$id' and book_venue.book_id=payment.bookid and payment.payment_status='TXN_SUCCESS' and YEAR(payment.create_at) = YEAR(CURDATE())
                            GROUP BY YEAR(payment.create_at),MONTH(payment.create_at)";
                            $result=mysqli_query($connect,$sql);
                            $earning=array();
                            $p='';
                            while($r=mysqli_fetch_array($result)){
                            $sum=$r['Sum'];
                            if($sum >=$p)
                            {
                            $point = array("label" => $r['Month Name'] , "y" => $sum,"indexLabel"=>"gain","markerType"=> "triangle", "markerColor" => "#6B8E23");
                            array_push($earning, $point); 
                            }
                            else{
                                $point = array("label" => $r['Month Name'] , "y" => $r['Sum'],"indexLabel"=>"loss","markerType"=> "cross", "markerColor" => "tomato");
                                array_push($earning, $point); 
                            }  
                            $p=$sum;                           
                        }   
                            ?>
                                        <br>
                                        <div class="row">
                                                <div class="col-md-3">
                                                   <h3><u> Booking Analysis</u></h3>
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;background-color:lavenderblush;color:blue"></div>
                                                </div>
                                        </div>
                          <?php
                            $sql="SELECT COUNT(book_venue.book_id) as Count,MONTHNAME(book_venue.created_at) as 'Month Name'
                            FROM book_venue,payment WHERE book_venue.vendor_id='$id' and payment.payment_status='TXN_SUCCESS' and payment.bookid=book_venue.book_id and YEAR(book_venue.created_at) = YEAR(CURDATE())
                            GROUP BY YEAR(book_venue.created_at),MONTH(book_venue.created_at)";
                            $result=mysqli_query($connect,$sql);
                            $booking=array();
                            while($r=mysqli_fetch_array($result)){
                                $count=$r['Count'];
                                $month=$r['Month Name'];
                                $point = array("label" => $r['Month Name'] , "y" => $r['Count']);
                                array_push($booking, $point); 
                            }    
                            $date=date('d-m-Y'); 
                            $sql="SELECT COUNT(book_venue.book_id) as Count,MONTHNAME(book_venue.created_at) as 'Month Name'
                            FROM book_venue,payment WHERE book_venue.vendor_id='$id' and  payment.payment_status='TXN_SUCCESS'  and book_venue.event_status='Completed' and payment.bookid=book_venue.book_id and YEAR(book_venue.created_at) = YEAR(CURDATE())
                            GROUP BY YEAR(book_venue.created_at),MONTH(book_venue.created_at)";
                             
                            $result=mysqli_query($connect,$sql);
                            $complete=array();
                            while($r=mysqli_fetch_array($result)){
                                $count=$r['Count'];
                                $month=$r['Month Name'];
                                $point = array("label" => $r['Month Name'] , "y" => $r['Count']);
                                array_push($complete, $point);                              
                               
                            }   
                            $sql="SELECT COUNT(book_venue.book_id) as Count,MONTHNAME(book_venue.created_at) as 'Month Name'
                            FROM book_venue,payment WHERE  book_venue.vendor_id='$id' and payment.payment_status='TXN_SUCCESS' and book_venue.event_status='Canceled' and payment.bookid=book_venue.book_id and YEAR(book_venue.created_at) = YEAR(CURDATE())
                            GROUP BY YEAR(book_venue.created_at),MONTH(book_venue.created_at)";
                            $result=mysqli_query($connect,$sql);
                            $cancel=array();
                            while($r=mysqli_fetch_array($result)){
                                $count=$r['Count'];
                                $month=$r['Month Name'];
                                $point = array("label" => $r['Month Name'] , "y" => $r['Count']);
                                array_push($cancel, $point);                              
                               
                            }
                            $cur_date=date('d-m-Y');
                            $sql="SELECT COUNT(book_venue.book_id) as Count,MONTHNAME(book_venue.created_at) as 'Month Name'
                            FROM book_venue,payment WHERE book_venue.vendor_id='$id' and payment.payment_status='TXN_SUCCESS' and book_venue.booking_date > $date and book_venue.event_status='Confirmed' and payment.bookid=book_venue.book_id and YEAR(book_venue.created_at) = YEAR(CURDATE())
                            GROUP BY YEAR(book_venue.created_at),MONTH(book_venue.created_at)";
                            $result=mysqli_query($connect,$sql);
                            $pending=array();
                            while($r=mysqli_fetch_array($result)){
                                $count=$r['Count'];
                                $month=$r['Month Name'];
                                $point = array("label" => $r['Month Name'] , "y" => $r['Count']);
                                array_push($pending, $point);                              
                               
                            }                         
                        ?><br>             
                                        
                                        <br><hr>
                                        <div class="row">
                                            <!-- Begin Widget 20 -->
	                                        <div class="col-xl-6" >
	                                            <div class="widget widget-20 has-shadow">
                                                <!-- Begin Widget Header -->
                                                <div class="widget-header bordered d-flex align-items-center">
                                                <h2>Files</h2>                                                
                                                </div>
                                                <!-- End Widget Header -->
                                                <div class="widget-body">

                                                <div class="row">
                                                <div class="col-xl-6">
                                                <div class="media w-100">
                                                <div class="align-self-center mr-2">
                                                <i class="la la-file-video-o la-3x"></i>
                                                </div>
                                                <div class="media-body align-self-center">
                                                <div class="files-title" style="color:black;font-size:22px"><a href="#">My Video</a></div>
                                                <?php 
                                                    $sql ="SELECT video_id from videos where holder_id=$id ";
                                                    $result = mysqli_query($connect,$sql);
                                                    $rows=mysqli_num_rows($result);
                                                    ?>
                                                <div class="files-number" style="color:blue;font-size:20px"><?php echo $rows;?> Files</div>
                                                </div>
                                                </div>
                                                </div>
                                                <div class="col-xl-6">
                                                <div class="media w-100">
                                                <div class="align-self-center mr-2">
                                                <i class="la la-file-picture-o la-3x"></i>
                                                </div>
                                                <div class="media-body align-self-center">
                                                <div class="files-title" style="color:black;font-size:22px"><a href="#">Photos</a></div>
                                                <?php 
                                                        $sql1 ="SELECT distinct(count(album_name)) as count from images where holder_id=$id ";
                                                        $result = mysqli_query($connect,$sql1);
                                                        $rows=mysqli_num_rows($result);
                                                        $row=mysqli_fetch_array($result);
                                                ?>
                                                <div class="files-number" style="color:blue;font-size:20px"><?php echo $row['count'];?> Files</div>
                                                </div>
                                                </div>
                                                </div><br>
                                                <div class="col-xl-6">
                                                <div class="media w-100">
                                                <div class="align-self-center mr-2">
                                                <i class="la la-gift la-3x"></i>
                                                </div>
                                                <?php 
                                                        $sql3 ="SELECT id from event_master  where venue_id=$id";
                                                        $result = mysqli_query($connect,$sql3);
                                                        $rows=mysqli_num_rows($result);
                                                        ?>
                                                <div class="media-body align-self-center">
                                                <div class="files-title" style="color:black;font-size:22px"><a href="#">Events</a></div>

                                                <div class="files-number" style="color:blue;font-size:20px"><?php  echo $rows; ?> Files</div>
                                                </div>
                                                </div>
                                                </div>

                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                <!-- End Widget 20 -->
                                                <div class="col-xl-6">
                                                <!-- Begin Widget 06 -->
                                                <div class="widget widget-06 has-shadow">
                                                <!-- Begin Widget Header -->
                                                <div class="widget-header bordered d-flex align-items-center">
                                                <h2>Reviews</h2>
                                               
                                                </div>
                                                <!-- End Widget Header -->
                                                <!-- Begin Widget Body -->
                                                <div class="widget-body p-0">
                                                <div id="list-group" class="widget-scroll" style="max-height:490px;">
                                                <ul class="reviews list-group w-100">
                                                <!-- 01 -->
                                                <?php 
                                                    //$select="select *, from rating where venue_id=$id order by id ";
                                                    $s="select *,date(r.created_at) as date FROM rating r,tbl_venue tv WHERE r.venue_id=tv.venue_id and tv.vendor_id='$id' order by rand()";

                                                    $res = mysqli_query($connect,$s);
                                                    if(mysqli_num_rows($res)>0){ 
                                                   while($row=mysqli_fetch_array($res)) {
                                                       $q=$row['quality'];
                                                       $r=$row['response'];
                                                       $v=$row['value'];
                                                       $avg=$q+$r+$v/3;
                                                       $totalavg=round($avg,1);
                                                ?>
                                                <li class="list-group-item">
                                                <div class="media">
                                                <div class="media-left align-self-start">
                                                    <img src="../controller/uploads/review/<?php echo $row['photo']?>" class="user-img rounded-circle" alt="...">
                                                </div>
                                                <div class="media-body align-self-center">
                                                <div class="username">
                                                <h4><?php echo $row['name']?></h4>
                                                </div>
                                                <div class="msg">
                                                <div class="stars">
                                                    <?php if($totalavg >'1' && $totalavg <='5')
                                                    { ?> <i class="la la-star"></i>
                                                     <i class="la la-star-half-empty"></i>
                                                    <?php } else if($totalavg < '8' && $totalavg >'5'){ ?>
                                                        <i class="la la-star"></i>
                                                         <i class="la la-star"></i>
                                                          <i class="la la-star-half-empty"></i>
                                                          <?php } else if($totalavg < '11' && $totalavg >='8'){ ?>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-half-empty"></i>
                                                            <?php } else if($totalavg <'14' && $totalavg >='11'){ ?>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-half-empty"></i>
                                                            <?php } else{?>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <?php }?>
                                               
                                                </div>
                                                <p>
                                               <?php echo $row['title']; ?>
                                                </p>
                                                </div>
                                                <div class="meta">
                                                <span class="mr-3">Review date: <?php echo $row['date'];?></span>
                                                </div>
                                                </div>
                                                <div class="media-right pr-3 align-self-center">
                                                <div class="like text-center">
                                                <i class="ion-heart"></i>
                                                <span><?php echo $row['likes'];?></span>
                                                </div>
                                                </div>
                                                </div>
                                                </li>
                                                <!-- End 01 -->
                                                   <?php 
                                                   } } else{ echo '<h2>No any reviews</h2>';
                                                       }
                                                       ?>                                                
                                                </ul>
                                                </div>
                                                <!-- End List -->
                                                </div>
                                                <!-- End Widget Body -->
                                                </div>
                                                <!-- End Widget 06 -->
                                                </div>
                                    </div>
                                    <br>
                                           
                                    </div>
                                </div>
                              
                                <!-- End Head Profile -->                              
                                
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <?php include('includes/footer.php');?>
                
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        </body> 
</html>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
    exportEnabled: true,
    exportFileName: "Monthly Booking",
	title:{
		text: "Monthly Booking",
        fontSize:30,
        fontFamily:'Times New Roman',
        fontColor:'blue',
	},	
    subtitles:[{
        text: "Total Booking / Pending / Completed / Canceled",
        fontSize:22,
        fontFamily:'Times New Roman' ,
        fontColor:'red',
    }],
	axisY: [{
		title: "Total Booking Count",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
        {
            title: " Pending Booking Count",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"}
        ],
	axisY2: [{
		title: "Complete Booking Count",
		titleFontColor: "#C0504E",
		lineColor: "#C0504E",
		labelFontColor: "#C0504E",
		tickColor: "#C0504E"
	},
    {
		title: " Cancel Booking Count",
		titleFontColor: "#C0504E",
		lineColor: "#C0504E",
		labelFontColor: "#C0504E",
		tickColor: "#C0504E"
	}],	
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		itemclick: toggleDataSeries1
	},
	data: [{
		type: "column",
		name: "Total Booking Count",
		legendText: "Total Booking ",
		showInLegend: true, 
		dataPoints:<?php echo json_encode($booking, JSON_NUMERIC_CHECK); ?>
	},
	{
		type: "column",	
		name: "Total Completed Count",
		legendText: "Completed Booking",
		axisYType: "secondary",
		showInLegend: true,
		dataPoints:<?php echo json_encode($complete, JSON_NUMERIC_CHECK); ?>
	},
    {
		type: "column",
		name: "Total Pending Count",
		legendText: "Pending Booking ",
		showInLegend: true, 
		dataPoints:<?php echo json_encode($pending, JSON_NUMERIC_CHECK); ?>
	},
    {
		type: "column",	
		name: "Total Canceled Count",
		legendText: "Canceled Booking ",
        
		axisYType: "secondary",
		showInLegend: true,
		dataPoints:<?php echo json_encode($cancel, JSON_NUMERIC_CHECK); ?>
	}
    
    ]
},


);
chart.render();

function toggleDataSeries1(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}


var chart3 = new CanvasJS.Chart("chartContainer3", {
	theme: "dark2", // "light1", "light2", "dark1", "dark2"
	animationEnabled: true,
    exportEnabled: true,
    exportFileName: "Monthly Earning",
	title:{
		text: "Monthly Earning" ,
        fontSize:30,
        fontFamily:'Times New Roman'  
	},
	axisX: {
		interval: 1,
		intervalType: "month",
		valueFormatString: "MMM"
	},
	axisY:{
		title: "Price (in Rupees)",        
        includeZero: false
	},
	data: [{        
		type: "line",
		markerSize: 12,
		// xValueFormatString: "MMM, YYYY",
		// yValueFormatString: "$###.#",
		dataPoints:  <?php echo json_encode($earning, JSON_NUMERIC_CHECK); ?>
	}]
});
chart3.render();


}
</script>
<script src="../Style/canvasjs.min.js"></script>