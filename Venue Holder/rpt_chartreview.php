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
                                        <a href="rpt_review.php" >Review Report</a>&nbsp;/&nbsp;
										<a href="rpt_chartreview.php" style="color:red">Monthly Review Chart Analysis</a>
                                    </div>
                                </div>  
							<br>
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="widget has-shadow">
                                    <div style="background-color:cornflowerblue"><br>
                                     <h2 align="center">Graphically Review Report </h2><hr>
                                    </div>
                                        <?php
                            $sql="SELECT COUNT(r.id) as Count,MONTHNAME(r.created_at) as 'Month Name'
                            FROM rating r,tbl_venue tv WHERE tv.venue_id=r.venue_id and tv.vendor_id='$id' and YEAR(r.created_at) = YEAR(CURDATE())
                            GROUP BY YEAR(r.created_at),MONTH(r.created_at)";
                            $result=mysqli_query($connect,$sql);
                            $review=array();
                            while($r=mysqli_fetch_array($result)){
                                $count=$r['Count'];
                                $month=$r['Month Name'];
                                $point = array("label" => $r['Month Name'] , "y" => $r['Count']);
                                array_push($review, $point); 
                            }   ?>

                        <div id="chartContainer" style="height: 370px;max-width: 920px; margin: 0px auto;"></div>
                                       
                              
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
	animationEnabled: true,
	
	title:{
		text:"Monthly Review Report ",
        fontFamily:"Times New Roman",
        fontColor:"blue",
        fontSize:24,
	},
	axisX:{
		interval: 1
	},    axisY:{		
        title: "<-----------------------  Count of User Review ----------------------->",
        
	},
	data: [
        {
		type: "bar",
		name: "Reviews",
		color:"darkorchid",
		axisYType: "primary",
		dataPoints: <?php echo json_encode($review, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>

<script src="../Style/canvasjs.min.js"></script>