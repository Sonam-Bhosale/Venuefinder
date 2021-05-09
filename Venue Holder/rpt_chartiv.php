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
                                        <a href="dashboard.php">Dashboard</a> &nbsp;|&nbsp; 
                                        <a href="rpt_image.php" >Image Report</a> &nbsp;|&nbsp; 
                                        <a href="videorpt.php" >Video Report</a>&nbsp;|&nbsp; 
                                        <a href="rpt_chartiv.php" style="color:red">Graphical Report</a>
                                  </div>
                                </div>  
							<br>
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="widget has-shadow">
                                    <div style="background-color:cadetblue" class="widget-header bordered no-actions d-flex align-items-center">
                                    <h4 style="color:white"> Graphical Report</h4>
                                    </div>
                                    <div class="widget-body">                                  

                                      <?php
                                        $id=$_SESSION['venue_id'];
                                        $sql="SELECT COUNT(image_id) as Count,MONTHNAME(created_at) as 'Month Name'
                                        FROM images WHERE  holder_id='$id' and  YEAR(created_at) = YEAR(CURDATE())
                                        GROUP BY YEAR(created_at),MONTH(created_at)";
                                        $result=mysqli_query($connect,$sql);
                                        $photo=array();
                                        while($r=mysqli_fetch_array($result)){
                                            $count=$r['Count'];
                                            $month=$r['Month Name'];
                                            
                                            $point = array("label" => $r['Month Name'] , "y" => $r['Count']);
                                            array_push($photo, $point);                              
                                           
                                        }
                                        
                                        $sql="SELECT COUNT(video_id) as Count,MONTHNAME(created_at) as 'Month Name'
                                        FROM videos where holder_id='$id' and YEAR(created_at) = YEAR(CURDATE())
                                        GROUP BY YEAR(created_at),MONTH(created_at)";
                                        $result=mysqli_query($connect,$sql);
                                        $video=array();
                                        while($r=mysqli_fetch_array($result)){
                                            $count=$r['Count'];
                                            $month=$r['Month Name'];
                                            $point = array("label" => $r['Month Name'] , "y" => $r['Count']);
                                            array_push($video, $point);                              
                                           
                                        } ?>
                            <div class="row">
                            <div class="col-xl-12">
                                     <div id="chartContainer2" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>

                            </div>
                            <!-- <div class="col-xl-6">
                                <?php
                                //  $sql ="SELECT count(video_id) as count from videos where holder_id='$id' ";
                                //  $result = mysqli_query($connect,$sql);
                                //  while($row=mysqli_fetch_array($result))
                                //  {
                                //      $video=$row['count'];
                                //      echo $video;
                                //  }

                                //  $sql1 ="SELECT distinct(count(album_name)) as count from images where holder_id='$id'";
                                //  $result = mysqli_query($connect,$sql1);
                                //  while($row=mysqli_fetch_array($result))
                                //     {
                                //         $photos=$row['count'];
                                //         echo $photos;
                                //     }

                                //  $response=array(
                                //     array("y"=>$video,"name"=>"Videos","exploded"=> true),array("y"=>$photos,"name"=>"Photo Album")
                                //  );
                                
                                 ?>
                                 
                            <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                            </div> -->
                            </div>

                                    </div>
                                </div>
                                <!-- End Export -->
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
var chart2 = new CanvasJS.Chart("chartContainer2", {
	title:{
		text: "Monthly Report ",
        fontSize:24,
        fontColor:"red",
        fontFamily:"Times New Roman",
	},
    subtitles:[{
        text:"Photos Album / Videos",
        fontSize:16,
        fontColor:"blue",
        fontFamily:"Times New Roman",
    }],
	
	axisY2: [
    {title: "Videos",
		lineColor: "#7F6084",
		tickColor: "#7F6084",
		labelFontColor: "#7F6084",
		titleFontColor: "#7F6084",
		},{
        title: "Photos",
		lineColor: "#7F6084",
		tickColor: "#7F6084",
		labelFontColor: "#7F6084",
		titleFontColor: "#7F6084",	
	}
    ],
	toolTip: {
		shared: true
	},
	legend: {
		cursor: "pointer",
		itemclick: toggleDataSeries
	},
	data: [	
	{
		type: "area",
		name: "Photos",
		color: "#7F6084",
		axisYType: "secondary",
		showInLegend: true,
		dataPoints: <?php echo json_encode($photo, JSON_NUMERIC_CHECK); ?>
    },
    {
		type: "area",
		name: "Videos",
		color: "green",
		axisYType: "secondary",
		showInLegend: true,
		dataPoints: <?php echo json_encode($video, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();

function toggleDataSeries(e) {
	if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else {
		e.dataSeries.visible = true;
	}
	chart2.render();
}
// var chart = new CanvasJS.Chart("chartContainer", {
// 	exportEnabled: true,
// 	animationEnabled: true,
// 	title:{
// 		text: "Upload File Count",
//         fontFamily:"Times New Roman",
//         fontColor:"blue",
//         fontSize:28,
// 	},
//     subtitles:[{text:"Photos Album / Videos ", fontFamily:"Times New Roman",
//         fontColor:"red",
//         fontSize:14,}],
// 	legend:{
// 		cursor: "pointer",
// 		itemclick: explodePie
// 	},
// 	data: [{
// 		type: "pie",
// 		showInLegend: true,
// 		toolTipContent: "{name}: <strong>{y}</strong>",
// 		indexLabel: "{name} - {y}",
//         legendText:"{name} - {y}",
// 		dataPoints: <?php //echo json_encode($response, JSON_NUMERIC_CHECK); ?>
// 	}]
// });
// chart.render();
// function explodePie (e) {
// 	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
// 		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
// 	} else {
// 		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
// 	}
// 	e.chart.render();
//     }
}
</script>
<script src="../Style/canvasjs.min.js"></script>