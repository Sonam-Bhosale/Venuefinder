
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
                                        <a href="purchaseplan.php"> Purchase Plan Report</a>&nbsp;/&nbsp;
                                        <a href="dateinbetweenp.php"> Date In Between</a>&nbsp;/&nbsp;
                                        <a href="weeklyp.php"> Weekly</a>&nbsp;/&nbsp;
                                        <a href="monthlyp.php"> Monthly</a>&nbsp;/&nbsp;
                                        <a href="purchasecount.php" >Purchase Plan Count</a>&nbsp;/&nbsp;
                                        <a href="rpt_purchaseplan.php" style="color:red">Graphical Analysis</a>
    	                        </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                       
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="widget has-shadow">
                            <div style="background-color:cornflowerblue"><br>
                                     <h2 align="center">Graphically Plan Analysis Report </h2><hr>
                                    </div>  
                                    <div class="widget-body">
                                    <?php
                                  
                                    $sql="SELECT count(vp.id)as count FROM venue_plan vp WHERE vp.plan_id='1' and vp.status='Active'";
                                    $result=mysqli_query($connect,$sql);while($row=mysqli_fetch_array($result))
                                    {     
                                        $p1=$row['count'];
                                    }
                                    $sql="SELECT count(vp.id)as count FROM venue_plan vp WHERE vp.plan_id='2' and vp.status='Active'";
                                    $result=mysqli_query($connect,$sql);while($row=mysqli_fetch_array($result))
                                    {     
                                            $p2=$row['count'];
                                    }
                                    $sql="SELECT count(vp.id)as count FROM venue_plan vp WHERE vp.plan_id='3' and vp.status='Active'";
                                    $result=mysqli_query($connect,$sql);while($row=mysqli_fetch_array($result))
                                    {     
                                             $p3=$row['count'];
                                    }
                                    $active_plan=array(
                                        array("y"=>$p1,"name"=>"Lite","exploded"=> true),array("y"=>$p2,"name"=>"Premium"),array("y"=>$p3,"name"=>"Top")
                                    );
							
							?>
                                         <div class="row">
                            <div class="col-xl-6"><div id="chartContainer" style="height: 370px; width: 100%;"></div></div>

                        
                        <?php
                                    $sql="SELECT count(vp.id)as count FROM venue_plan vp WHERE vp.plan_id='1' and vp.status='Deactive'";
                                    $result=mysqli_query($connect,$sql);while($row=mysqli_fetch_array($result))
                                    {     
                                        $p1=$row['count'];
                                    }
                                    $sql="SELECT count(vp.id)as count FROM venue_plan vp WHERE vp.plan_id='2' and vp.status='Deactive'";
                                    $result=mysqli_query($connect,$sql);while($row=mysqli_fetch_array($result))
                                    {     
                                            $p2=$row['count'];
                                    }
                                    $sql="SELECT count(vp.id)as count FROM venue_plan vp WHERE vp.plan_id='3' and vp.status='Deactive'";
                                    $result=mysqli_query($connect,$sql);while($row=mysqli_fetch_array($result))
                                    {     
                                             $p3=$row['count'];
                                    }
							$deactive_plan = array(
								array("label"=> "Lite", "y"=>$p1),
								array("label"=> "Premium", "y"=>$p2),
								array("label"=> "Top", "y"=>$p3),
							);
                            ?>
                            <div class="col-xl-6">   <div id="chartContainer1" style="height: 370px; width: 100%;"></div></div>
                        </div><br><br>
                       
                        <?php
                                                              $sql1 ="SELECT count(vendor_id) as count from tbl_vendor";
                                                              $result1 = mysqli_query($connect,$sql1);
                                                              while($row=mysqli_fetch_array($result1))
                                                              {
                                                                  $user=$row['count'];
                                                              }
                                                              $sql2 ="SELECT count(distinct(venue_plan.venue_id)) as count from venue_plan where venue_plan.payment_status='TXN_SUCCESS' ";
                                                              $result2= mysqli_query($connect,$sql2);
                                                              while($row=mysqli_fetch_array($result2))
                                                              {
                                                                  $user_book=$row['count'];
                                                              }
                                                              $user_response=array(
                                                                  array("y"=>$user,"name"=>"Total Vendor","exploded"=> true),array("y"=>$user_book,"name"=>"Vendor Purchase")
                                                              )
                                              ?>
                                              <div class="row">
                  
                  <div class="col-xl-6">   <div id="chartContainer2" style="height: 370px; width: 100%;"></div></div>
                  <?php
                  $sql="SELECT COUNT(id) as Count,MONTHNAME(vp.create_at) as 'Month Name'
                  FROM venue_plan vp,subscription_plan sp WHERE vp.plan_id='1' and vp.plan_id=sp.plan_id and YEAR(vp.create_at) = YEAR(CURDATE())
                  GROUP BY YEAR(vp.create_at),MONTH(vp.create_at)";
                  $result=mysqli_query($connect,$sql);
                  $lite=array();
                  while($r=mysqli_fetch_array($result)){
                      $count=$r['Count'];
                      $month=$r['Month Name'];
                      $point = array("label" => $r['Month Name'] , "y" => $r['Count']);
                      array_push($lite, $point);                              
                     
                  } 
                  $sql="SELECT COUNT(id) as Count,MONTHNAME(vp.create_at) as 'Month Name'
                  FROM venue_plan vp,subscription_plan sp WHERE vp.plan_id='2' and vp.plan_id=sp.plan_id and YEAR(vp.create_at) = YEAR(CURDATE())
                  GROUP BY YEAR(vp.create_at),MONTH(vp.create_at)";
                  $result=mysqli_query($connect,$sql);
                  $premium=array();
                  while($r=mysqli_fetch_array($result)){
                      $count=$r['Count'];
                      $month=$r['Month Name'];
                      $point = array("label" => $r['Month Name'] , "y" => $r['Count']);
                      array_push($premium, $point);                              
                     
                  } 
                  $sql="SELECT COUNT(id) as Count,MONTHNAME(vp.create_at) as 'Month Name'
                  FROM venue_plan vp,subscription_plan sp WHERE vp.plan_id='3' and vp.plan_id=sp.plan_id and YEAR(vp.create_at) = YEAR(CURDATE())
                  GROUP BY YEAR(vp.create_at),MONTH(vp.create_at)";
                  $result=mysqli_query($connect,$sql);
                  $top=array();
                  while($r=mysqli_fetch_array($result)){
                      $count=$r['Count'];
                      $month=$r['Month Name'];
                      $point = array("label" => $r['Month Name'] , "y" => $r['Count']);
                      array_push($top, $point);                              
                     
                  }                         
              ?>
                  <div class="col-xl-6">   <div id="chartContainer3" style="height: 370px; width: 100%;"></div></div>
                </div>
                                </div>
                                <!-- End Export -->
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

var chart1 = new CanvasJS.Chart("chartContainer1", {
    theme:"light1",
    exportEnabled: true,
    exportFileName: "Deactive Purchase Plan",
	animationEnabled: true,
	title:{
		text: "Deactive Purchase Plan Report",
        fontFamily:'Times New Roman',
        fontSize:22,
        fontColor:'red',
		horizontalAlign: "center"
	},
    subtitles:[{
        text: "Lite / Premium / Top",
        fontFamily:'Times New Roman',
        fontSize:18,
        fontColor:'brown',
    }],
    legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "doughnut",        
		showInLegend: true,
		startAngle: 60,
		innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - {y}",
        legendText:"{label} - {y}",
		toolTipContent: "<b>{label}:</b> {y} ",
		dataPoints: <?php echo json_encode($deactive_plan, JSON_NUMERIC_CHECK); ?>
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
var chart = new CanvasJS.Chart("chartContainer", {
	exportEnabled: true,
    exportFileName: "Active Purchase Plan",
	animationEnabled: true,
	title:{
		text: "Active Purchase Plan Report",
        fontFamily:'Times New Roman',
        fontSize:22,
        fontColor:'blue',
	},subtitles:[{text: "Lite / Premium / Top",
        fontFamily:'Times New Roman',
        fontSize:18,
        fontColor:'orange',}],
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data:  [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y}</strong>",
		indexLabel: "{name} - {y}",
        legendText:"{name} - {y}",
		dataPoints: <?php echo json_encode($active_plan, JSON_NUMERIC_CHECK); ?>
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
var chart2 = new CanvasJS.Chart("chartContainer2", {
	exportEnabled: true,
    exportFileName: "User Response",
	animationEnabled: true,
	title:{
		text: "Vendor Response",
        fontFamily:'Times New Roman',
        fontSize:22,
        fontColor:'blue',
	},subtitles:[{text: "Vendor Registered / Plan Purchase",
        fontFamily:'Times New Roman',
        fontSize:18,
        fontColor:'orange',}],
	legend:{
		cursor:"pointer",
		itemclick: explodePie
	},
	data:  [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y}</strong>",
		indexLabel: "{name} - {y}",
        legendText:"{name} - {y}",
		dataPoints: <?php echo json_encode($user_response, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();

function explodePie2 (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.chart2.render();

}
var chart3 = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
    exportEnabled: true,
	title:{
		text: "Monthly Analysis Report",
        fontFamily:'Times New Roman',
        fontSize:22,
        fontColor:'blue',

	},	subtitles:[{
        text: "Active / Deactive",
        fontFamily:'Times New Roman',
        fontSize:18,
        fontColor:'orange',
    }],
	axisY: {
		title: "Purchase Plan Count",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	axisY2: {
		title: "Purchase Plan Count",
		titleFontColor: "#C0504E",
		lineColor: "#C0504E",
		labelFontColor: "#C0504E",
		tickColor: "#C0504E"
	},	
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		itemclick: toggleDataSeries
	},
	data: [
        {
		type: "column",
		name: "Lite Count",
		legendText: " Lite Plan",
		showInLegend: true, 
		dataPoints: <?php echo json_encode($lite, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Premium Count",
		legendText: "Premium Plan",
		showInLegend: true, 
		dataPoints: <?php echo json_encode($premium, JSON_NUMERIC_CHECK); ?>
	},
	{
		type: "column",	
		name: "Top Count",
		legendText: "Top Plan",
		axisYType: "secondary",
		showInLegend: true,
		dataPoints: <?php echo json_encode($top, JSON_NUMERIC_CHECK); ?>
	}]
});
chart3.render();

function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart3.render();
}



 }

 </script>
<script src="../Style/canvasjs.min.js"></script>