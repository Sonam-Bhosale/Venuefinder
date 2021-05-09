<?php include('includes/header.php');?>
        <div class="page db-social albums">
        <?php include('includes/header_section.php');?>
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
            <?php include('includes/navbar.php');?>
                </div>
                <!-- End Left Sidebar -->
                <!-- Begin Content -->
                <div class="content-inner compact">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-11">
								 <div class="page-header pr-0 pl-0">
                                    <div class="d-flex align-items-center">
                                    <a href="dashboard.php">Dashboard</a> &nbsp;/&nbsp; 
                                        <a href="booking.php">Booking Report</a>&nbsp;/&nbsp;
                                        <a href="dateinbetweenb.php"> Date In Between</a>&nbsp;/&nbsp;
                                        <a href="weeklyb.php" > Weekly</a>&nbsp;/&nbsp;
                                        <a href="monthlyb.php" > Monthly</a>&nbsp;/&nbsp;                                 
                                        <a href="rpt_booking.php" style="color:red">Graphically Booking Report</a>&nbsp;</div>
                                </div>  
							<br>
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="widget has-shadow">
                                    <div style="background-color:cornflowerblue"><br>
                                     <h2 align="center">Graphically Booking Report </h2><hr>
                                    </div>
                                    <div class="widget-body">

                                    <?php 
                                                    $id=$_SESSION['venue_id'];
                                                    $date=date('d-m-Y');
                                                    $sql ="SELECT count(book_venue.book_id) as count from book_venue,payment where payment.payment_status='TXN_SUCCESS' and payment.bookid=book_venue.book_id and book_venue.vendor_id= '$id'  and book_venue.booking_date > '$date' and book_venue. event_status='Confirmed'";
                                                    $result = mysqli_query($connect,$sql);
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                                        $pending=$row['count'];
                                                    }

                                                    $sql1 ="SELECT count(book_venue.book_id) as count from book_venue,payment where book_venue.vendor_id='$id' and payment.payment_status='TXN_SUCCESS' and payment.bookid=book_venue.book_id and book_venue.event_status='Completed'";
                                                    $result1 = mysqli_query($connect,$sql1);
                                                    while($row=mysqli_fetch_array($result1))
                                                    {
                                                        $complete=$row['count'];
                                                    }
                                                    $sql2 ="SELECT count(book_venue.book_id) as count from book_venue,payment where book_venue.vendor_id='$id'  and payment.payment_status='TXN_SUCCESS' and payment.bookid=book_venue.book_id and book_venue.event_status='Canceled'";
                                                    $result2= mysqli_query($connect,$sql2);
                                                    while($row=mysqli_fetch_array($result2))
                                                    {
                                                        $cancel=$row['count'];
                                                    }
                                                    $booking=array(
                                                        array("y"=>$pending,"name"=>"Pending","exploded"=> true),array("y"=>$complete,"name"=>"Complete"),array("y"=>$cancel,"name"=>"Cancel")
                                                    )
                                    ?>
                                                           <div class="row">
                            <div class="col-xl-6">

                                            <div id="chartContainer" style="height: 370px;max-width: 920px; margin: 0px auto;"></div>
                                      
                                                    </div><?php
                                                              $sql1 ="SELECT count(user_id) as count from register_user";
                                                              $result1 = mysqli_query($connect,$sql1);
                                                              while($row=mysqli_fetch_array($result1))
                                                              {
                                                                  $user=$row['count'];
                                                              }
                                                              $sql2 ="SELECT count(distinct(book_venue.user_id)) as count from book_venue,payment where book_venue.vendor_id='$id'  and payment.payment_status='TXN_SUCCESS' and payment.bookid=book_venue.book_id ";
                                                              $result2= mysqli_query($connect,$sql2);
                                                              while($row=mysqli_fetch_array($result2))
                                                              {
                                                                  $user_book=$row['count'];
                                                              }
                                                              $user_response=array(
                                                                  array("y"=>$user,"name"=>"Total User","exploded"=> true),array("y"=>$user_book,"name"=>"User Booking")
                                                              )
                                              ?>
                  
                            <div class="col-xl-6">
                                            <div id="chartContainer1" style="height: 370px;max-width: 920px; margin: 0px auto;"></div>
                                       
                                                              </div>
                                                              </div>
                                                              </div>
                            </div>
                         </div>    
                        <!-- End Row -->
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
	exportEnabled: true,
	animationEnabled: true,
    exportFileName: "Booking Report",
	title:{
		text: "Booking Report ",
        fontFamily:"Times New Roman",
        fontColor:"blue",
        fontSize:28,
	},
    subtitles:[{text:"Pending / Complete / Cancel", fontFamily:"Times New Roman",
        fontColor:"red",
        fontSize:14,}],
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y}</strong>",
		indexLabel: "{name} - {y}",
        legendText:"{name} - {y}",
		dataPoints: <?php echo json_encode($booking, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart.render();

}

var chart1 = new CanvasJS.Chart("chartContainer1", {
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: "User Booking Response ",
        fontFamily:"Times New Roman",
        fontColor:"blue",
        fontSize:28,
	},
    subtitles:[{text:"User Registered / User Booking ", fontFamily:"Times New Roman",
        fontColor:"red",
        fontSize:14,}],
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y}</strong>",
		indexLabel: "{name} - {y}",
        legendText:"{name} - {y}",
		dataPoints: <?php echo json_encode($user_response, JSON_NUMERIC_CHECK); ?>
	}]
});
chart1.render();
function explodePie1 (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart1.render();

}

}
</script>

<script src="../Style/canvasjs.min.js"></script>