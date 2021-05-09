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
                                <!-- Begin Page Header-->
                                <div class="page-header pr-0 pl-0">
                                    <div class="d-flex align-items-center">
                                        <a href="booking_request.php" style="color:black" > Quotation Request List</a>&nbsp;|&nbsp;
                                        <a href="rpt_request.php"  style="color:black">Quotation Report</a>&nbsp;|&nbsp;
                                        <a href="rpt_requestchart.php" style="color:red">Graphical Analysis</a>
                                    </div>
                                </div>                              
                                <!-- End Page Header -->
                                <div class="row">
                                    <div class="col-xl-12">
                                        <!-- Sorting -->
                                        <div class="widget has-shadow">
                                    <div style="background-color:cornflowerblue"><br>
                                     <h2 align="center">Graphically Quotation Request Report </h2><hr>
                                    </div>
                                            <div class="widget-body">
                                                <div class="table-responsive">
                                                <?php
                                                $id=$_SESSION['venue_id'];
                            $sql="SELECT COUNT(r.id) as Count,MONTHNAME(r.created_at) as 'Month Name'
                            FROM venue_enquires r WHERE  r.venue_id='$id' and YEAR(r.created_at) = YEAR(CURDATE())
                            GROUP BY YEAR(r.created_at),MONTH(r.created_at)";
                            $result=mysqli_query($connect,$sql);
                            $request=array();
                            while($r=mysqli_fetch_array($result)){
                                $count=$r['Count'];
                                $month=$r['Month Name'];
                                $point = array("y" => $r['Count'],"label" => $r['Month Name']);
                                array_push($request, $point); 
                            }   ?>

                        <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                        <?php
                     $sql="select count(id) as count,register_user.name as customer_name,date(venue_enquires.created_at) as cdate,date(venue_enquires.updated_at) as rdate from venue_enquires,register_user where venue_enquires.user_id=register_user.user_id and venue_enquires.venue_id='$id' and venue_enquires.quotation_rate!='null' and venue_enquires.reply!='null' order by id desc";
                     $result=mysqli_query($connect,$sql);
                     while($row=mysqli_fetch_array($result))
                     {
                         $done=$row['count'];
                     }
                      $sql="select count(id) as count from venue_enquires where venue_enquires.venue_id='$id' and venue_enquires.quotation_rate IS NULL and venue_enquires.reply='' order by id desc";
                     $result=mysqli_query($connect,$sql);
                     while($row=mysqli_fetch_array($result))
                     {
                         $notdone=$row['count'];
                     }
                     $response=array(
                         array("y"=>$done,"name"=>"Resonse Sent","exploded"=> true),array("y"=>$notdone,"name"=>"Resonse Not Sent")
                     )
                     
                     ?>
                     <br>
                        <div id="chartContainer1" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- End Sorting -->
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
		text:"Monthly Quotation Report ",
        fontFamily:"Times New Roman",
        fontColor:"red",
        fontSize:28,
	},
	axisX:{
		interval: 1
	},
	axisY2:{
		interlacedColor: "rgba(1,77,101,.2)",
		gridColor: "rgba(1,77,101,.1)",
		title: "Count of Quotation Request",
        fontFamily:"Times New Roman",
        fontColor:"blue",
        fontSize:20        
	},
	data: [{
		type: "bar",
		name: "Quotation Request",
		axisYType: "secondary",
		color: "#369EAD",
        legendText:"{label} - {y}",
		dataPoints: <?php echo json_encode($request, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

var chart1 = new CanvasJS.Chart("chartContainer1", {
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: "Quotation Request Response ",
        fontFamily:"Times New Roman",
        fontColor:"blue",
        fontSize:28,
	},
    subtitles:[{text:"Response Sent/Response Not Send", fontFamily:"Times New Roman",
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
		dataPoints: <?php echo json_encode($response, JSON_NUMERIC_CHECK); ?>
	}]
});
chart1.render();
}
function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart1.render();

}

</script>

<script src="../Style/canvasjs.min.js"></script>