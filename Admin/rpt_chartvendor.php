
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
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
                                       <a href="dashboard.php">Dashboard</a> &nbsp;/&nbsp; 
                                        <a href="vendorreport.php"> Vendor Report</a>&nbsp;/&nbsp;
                                        <a href="venuereport.php"> Venue Report</a>&nbsp;/&nbsp;
                                        <a href="dateinbetween.php"> Date In Between</a>&nbsp;/&nbsp;
                                        <a href="weekly.php"> Weekly</a>&nbsp;/&nbsp;
                                        <a href="monthly.php"> Monthly</a>&nbsp;/&nbsp;
                                        <a href="rpt_chartvendor.php"  style="color:red"> Graphical Analysis</a>

    	                        </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow" style="width: 1150px">
                                    <div style="background-color:cornflowerblue"><br>
                                        <h2 align="center"> Graphical Analysis</h2><hr>
                                    </div>
                                    <div class="widget-body">
                                    <?php
                                    $sql="SELECT count(vendor_id)as count FROM tbl_vendor ";
                                    $result=mysqli_query($connect,$sql);while($row=mysqli_fetch_array($result))
                                    {     
                                        $vendor=$row['count'];
                                    }
                                    $sql="SELECT count(tv.venue_id) as count FROM tbl_venue tv,tbl_vendor td  WHERE td.vendor_id=tv.vendor_id";
                                    $result=mysqli_query($connect,$sql);while($row=mysqli_fetch_array($result))
                                    {     
                                            $venue=$row['count'];
                                    }
                                    $sql="SELECT count(b.book_id) as count FROM book_venue b, payment p WHERE p.bookid=b.book_id and p.payment_status='TXN_SUCCESS'";
                                    $result=mysqli_query($connect,$sql);while($row=mysqli_fetch_array($result))
                                    {     
                                             $booking=$row['count'];
                                    }
                                    $sql="SELECT count(id) as count FROM rating ";
                                    $result=mysqli_query($connect,$sql);while($row=mysqli_fetch_array($result))
                                    {     
                                             $review=$row['count'];
                                    }
                                    $sql="SELECT count(id) as count FROM wishlist";
                                    $result=mysqli_query($connect,$sql);while($row=mysqli_fetch_array($result))
                                    {     
                                             $wishlist=$row['count'];
                                    }
							$user_response = array(
								array("y"=>$vendor,"name"=> "Vendor", "exploded"=> true),
								array("y"=>$venue, "name"=> "Venue"),
                                array("y"=>$booking,"name"=> "Booking"),
                                array("y"=>$review,"name"=> "Review"),
                                array("y"=>$wishlist,"name"=> "Wishlist"),
							);
                            ?>
                              <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                        
                                    </div>
                                </div>
                                <!-- End Sorting -->
                            </div>
                         </div>    
                        <!-- End Row -->
						</div>
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
    theme:"light1",
    exportEnabled: true,
    exportFileName: "User Response",
	animationEnabled: true,
	title:{
		text: "User Response",
        fontFamily:'Times New Roman',
        fontSize:22,
        fontColor:'red',
		horizontalAlign: "center"
	},
    subtitles:[{
        text: "Vendor / Venue / Booking / Review / Wishlist",
        fontFamily:'Times New Roman',
        fontSize:18,
        fontColor:'brown',
    }],
    legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "pie",
		showInLegend: true,
		indexLabelFontSize: 17,
		indexLabel: "{name} - {y}",
        legendText:"{name} - {y}",
		toolTipContent: "<b>{name}:</b> {y} ",
		dataPoints: <?php echo json_encode($user_response, JSON_NUMERIC_CHECK); ?>
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
}    </script>
<script src="../Style/canvasjs.min.js"></script>