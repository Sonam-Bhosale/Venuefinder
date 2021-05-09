<?php include('includes/header.php');?>
<?php 
if($_SESSION['admin'])
{
?>
        <div class="page db-modern">
        <?php include('includes/header_section.php');?>
            <!-- Begin Page Content -->
            <div class="page-content">
            <?php include('includes/navbar.php');?>
                <div class="content-inner boxed mt-4 w-100">
                    <div class="container">
                        <!-- Begin Page Header-->
                        <div class="row" style="background-color:white">
                            <div class="page-header" >
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title"><br>Dashboard</h2>
	                            </div>
                            </div>
                        </div><br>
                        <!-- End Page Header -->
                        <!-- Begin Row -->
                    <div class="row" >
                            <div class="col-md-4">
                                <div class="alert alert-success back-widget-set text-center" style="background-color:bisque;color:blue">                                        <i class="la la-street-view la-5x"></i>
                                    <?php 
                                    $sql ="SELECT vendor_id from tbl_vendor where status='Active'  ";
                                    $result = mysqli_query($connect,$sql);
                                    $rows=mysqli_num_rows($result);
                                    ?>
                                    <h3><?php echo htmlentities($rows);?></h3>Total Vendors
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="alert alert-danger back-widget-set text-center" style="background-color:lavender;color:blue">
                                 <i class="la la-group la-5x"></i>
                                        <?php 
                                        $sql1 ="SELECT user_id from register_user ";
                                        $result = mysqli_query($connect,$sql1);
                                        $rows=mysqli_num_rows($result);
                                        ?>
                                                <h3><?php echo htmlentities($rows);?></h3>Total Users
                                    </div>
                            </div>
                            <div class="col-md-4">
                                <div class="alert alert-info back-widget-set text-center" style="background-color:bisque;color:blue">
                                 <i class="la la-dashboard la-5x"></i>
                                        <?php 
                                        $s ="SELECT book_id from book_venue b,payment p where p.payment_status='TXN_SUCCESS' and p.txn_id=b.transaction_id ";
                                        $result = mysqli_query($connect,$s);
                                        $rows=mysqli_num_rows($result);
                                        ?>
                                                <h3><?php echo htmlentities($rows);?></h3>Total Bookings
                                    </div>
                            </div>
                            <div class="col-md-4">
                                <div class="alert alert-success back-widget-set text-center" style="background-color:lavender;color:blue">
                                 <i class="la la-envelope la-5x"></i>
                                        <?php 
                                        $s ="SELECT id from contact ";
                                        $result = mysqli_query($connect,$s);
                                        $rows=mysqli_num_rows($result);
                                        ?>
                                                <h3><?php echo htmlentities($rows);?></h3>Total Feedbacks 
                                    </div>
                            </div>
                            <div class="col-md-4">
                                <div class="alert alert-danger back-widget-set text-center" style="background-color:bisque;color:blue">
                                 <i class="la la-leaf la-5x"></i>
                                        <?php 
                                        $s ="SELECT id from venue_plan where payment_status='TXN_SUCCESS' ";
                                        $result = mysqli_query($connect,$s);
                                        $rows=mysqli_num_rows($result);
                                        ?>
                                                <h3><?php echo htmlentities($rows);?></h3>Total Purchase Plan
                                    </div>
                            </div>
                            <div class="col-md-4">
                                <div class="alert alert-info back-widget-set text-center" style="background-color:lavender;color:blue">
                                 <i class="la la-money la-5x"></i>
                                        <?php 
                                        $s ="SELECT sum(price) as pricesum from venue_plan where payment_status='TXN_SUCCESS' ";
                                        $result = mysqli_query($connect,$s);
                                        $row=mysqli_fetch_array($result);
                                       $sum=$row['pricesum'];
                                        ?>
                                                <h3><?php if(isset($sum)){echo '₹'.htmlentities($sum).'.00';}else{ echo '₹ 0.00';}?></h3>Total Earning
                                    </div>
                            </div>
                        <!-- End Row -->
                </div>
                <br>
                <div class="row" style="background-color:white">
                            <div class="page-header">
	                            <div class="d-flex align-items-center"><br>
	                                <h2 class="page-header-title"><br>Analytical Analysis of Vendors and Users</h2>
	                            </div>
                            </div>
                        </div><br>
                        <div class="row" >
                            <div class="col-md-6">                          
                              <div id="chartContainer1" style="height: 370px; width: 100%;"></div> 
                            </div>
                            <?php
                            $sql="SELECT COUNT(user_id) as Count,MONTHNAME(created_at) as 'Month Name'
                            FROM register_user WHERE YEAR(created_at) = YEAR(CURDATE())
                            GROUP BY YEAR(created_at),MONTH(created_at)";
                            $result=mysqli_query($connect,$sql);
                            $customer=array();
                            while($r=mysqli_fetch_array($result)){
                                $point = array("label" => $r['Month Name'] , "y" => $r['Count']);
                                array_push($customer, $point); 
                            }     
                            $sql="SELECT COUNT(vendor_id) as Count,MONTHNAME(created_at) as 'Month Name'
                            FROM tbl_vendor WHERE YEAR(created_at) = YEAR(CURDATE())
                            GROUP BY YEAR(created_at),MONTH(created_at)";
                            $result=mysqli_query($connect,$sql);
                            $owner=array();
                            while($r=mysqli_fetch_array($result)){
                                $count=$r['Count'];
                                $month=$r['Month Name'];
                                $point = array("label" => $r['Month Name'] , "y" => $r['Count']);
                                array_push($owner, $point);                              
                               
                            }                         
                        ?>
                        <div class="col-md-6">
                        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                        </div>
                    </div>
                <?php
                        $sql="SELECT DATE(created_at) as Date, DAYNAME(created_at) as 'DayName', COUNT(user_id) as Count  
                        FROM register_user
                        WHERE date(created_at) > DATE_SUB(NOW(), INTERVAL 1 WEEK) AND MONTH(created_at) = MONTH(CURDATE()) AND YEAR(created_at) = YEAR(CURDATE())
                        GROUP BY DAYNAME(created_at) ORDER BY (created_at)";
                        $result=mysqli_query($connect,$sql);
                        //loop through the returned data
                        $user = array();
                        while($r=mysqli_fetch_array($result)){
                            $count=$r['Count'];
                            $day=$r['DayName'];
                            $point = array("label" => $r['DayName'] , "y" => $r['Count']);
                            array_push($user, $point);
                        } 
                                            
                    $sql="SELECT DATE(created_at) as Date, DAYNAME(created_at) as 'DayName', COUNT(vendor_id) as Count  
                    FROM tbl_vendor
                    WHERE date(created_at) > DATE_SUB(NOW(), INTERVAL 1 WEEK) AND MONTH(created_at) = MONTH(CURDATE()) AND YEAR(created_at) = YEAR(CURDATE())
                    GROUP BY DAYNAME(created_at) ORDER BY (created_at)";
                    $result=mysqli_query($connect,$sql);
                    $venue = array();
                    while($r=mysqli_fetch_array($result)){
                        $count=$r['Count'];
                        $day=$r['DayName'];        
                        $point = array("label" => $r['DayName'] , "y" => $r['Count']);
                        array_push($venue, $point);
                    } 

                ?> <br> <div class="row" >
                            <div class="col-md-12">                          
                              <div id="chartContainer2" style="height: 370px; width: 100%;"></div> 
                            </div>
					</div> <?php
                        $sql="SELECT tv.venue_name,tv.views,tv.vendor_id FROM tbl_venue tv,tbl_vendor td
                        WHERE  td.vendor_id=tv.vendor_id and td.status='Active' ORDER BY rand()";
                        $result=mysqli_query($connect,$sql);
                        //loop through the returned data
                        $view = array();
                        while($r=mysqli_fetch_array($result)){
                        
                            $point = array("label" => $r['venue_name'] , "y" => $r['views']);
                            array_push($view, $point);
                        }
                        ?>
                        <br> <div class="row" >
                            <div class="col-md-12">                          
                              <div id="chartContainer3" style="height: 370px; width: 100%;"></div> 
                            </div>
					</div>  <?php
                        $sql="SELECT sum(price) as Sum,MONTHNAME(create_at) as 'Month Name'
                        FROM venue_plan WHERE payment_status='TXN_SUCCESS' and YEAR(create_at) = YEAR(CURDATE())
                        GROUP BY YEAR(create_at),MONTH(create_at)";
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
                        ?><br>
                        <div class="row">
                            <div class="col-md-12">                          
                              <div id="chartContainer4" style="height: 370px; width: 100%;"></div> 
                            </div>
                    </div>
                    <?php
                        $sql="SELECT COUNT(id) as Count,MONTHNAME(date) as 'Month Name'
                        FROM contact WHERE YEAR(date) = YEAR(CURDATE())
                        GROUP BY YEAR(date),MONTH(date)";
                        $result=mysqli_query($connect,$sql);
                        $feedback=array();
                        while($r=mysqli_fetch_array($result)){
                            $count=$r['Count'];
                            $month=$r['Month Name'];
                            $point = array("label" => $r['Month Name'] , "y" => $r['Count']);
                            array_push($feedback, $point);                              
                        }  
                        ?>
                    <!-- End Container -->
                    
                  </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
    <?php include('includes/footer.php');?>
    <?php
        }
        else
        {	
            echo"<script> alert('You Must Login First')</script>";
            echo "<script>window.location.href='../Admin/index.php';</script>";	
        }
    ?>
     <script>
 window.onload = function () {
  
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     exportEnabled: true,
     theme: "light1", // "light1", "light2", "dark1", "dark2"
     title:{
         text: "Weekly Registered User and Vendor",
         fontFamily:"Times New Roman",
        fontColor:"Blue",
        fontSize:22,
     },
     axisX:{
         reversed: true
     },
     toolTip:{
         shared: true
     },
     data: [{
         type: "stackedBar",
         name: "User",
         dataPoints: <?php echo json_encode($user, JSON_NUMERIC_CHECK); ?>
     },{
         type: "stackedBar",
         name: "Vendor",
         dataPoints: <?php echo json_encode($venue, JSON_NUMERIC_CHECK); ?>
     },]
 });
 chart.render();

 var chart1 = new CanvasJS.Chart("chartContainer1", {
     animationEnabled: true,
     exportEnabled: true,
     theme: "light1", // "light1", "light2", "dark1", "dark2"
     title:{
         text: "Monthly Registered User and Vendor",
         fontFamily:"Times New Roman",
        fontColor:"Red",
        fontSize:22,
     },
     axisX:{
         reversed: true
     },
     toolTip:{
         shared: true
     },
     data: [{
         type: "stackedBar",
         name: "User",
         dataPoints: <?php echo json_encode($customer, JSON_NUMERIC_CHECK); ?>
     },{
         type: "stackedBar",
         name: "Vendor",
         dataPoints: <?php echo json_encode($owner, JSON_NUMERIC_CHECK); ?>
     },]
 });
 chart1.render();

 var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Number of Views",
        fontFamily:"Times New Roman",
        fontColor:"brown",
        fontSize:30,
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",
		name: "view",		
		dataPoints: <?php echo json_encode($view, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();

var chart3 = new CanvasJS.Chart("chartContainer3", {
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	animationEnabled: true,
	title:{
		text: "Business Performance Analysis"  ,
        fontFamily:"Times New Roman",
        fontColor:"Black",
        fontSize:32,
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
		type: "area",
		markerSize: 12,
		dataPoints:  <?php echo json_encode($earning, JSON_NUMERIC_CHECK); ?>
	}]
});
chart3.render();
var chart4 = new CanvasJS.Chart("chartContainer4", {
	animationEnabled: true,
	title:{
		text: "Feedback Monthly Analysis",
        fontFamily:"Times New Roman",
        fontColor:"Blue",
        fontSize:22,
	},
	axisY: {
		title:"Total Count"
	},
	legend:{
		horizontalAlign: "center"
	},
	data: [{
		type: "line",       
		lineDashType: "dash",
		showInLegend: true,
		legendText: "Feedback",
		legendMarkerType: "circle",
		legendMarkerColor: "grey",
		toolTipContent: "Count: {y} ",
		dataPoints: <?php echo json_encode($feedback, JSON_NUMERIC_CHECK); ?>
	}]
});
chart4.render();


 }
 </script>
<!--<script src="../Style/canvasjs.react.js"></script>
<script src="../Style/jquery.canvasjs.min.js"></script>-->
<script src="../Style/canvasjs.min.js"></script>