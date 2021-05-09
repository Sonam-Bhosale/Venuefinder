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
                                        <h2 class="page-header-title">Subscription Plan </h2>
                                    </div>
                                </div>                          
                                <!-- End Page Header -->
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="widget has-shadow">
                                                <!-- Begin Widget Header -->
                                                <div class="widget-header bordered no-actions d-flex align-items-center">
                                                    <h2>Activated Plan Details</h2>
                                                </div>
                                                    <div class="widget-body">
                                                    <div class="table-responsive">
                                                        <table  class="table mb-0">
                                                            <thead>
                                                                <tr align="center">
                                                                    <th>ID</th>
                                                                    <th>Plan Name</th>
                                                                    <th>Type</th>
                                                                    <th>Start Date</th>
                                                                    <th>Expire Date</th>
                                                                    <th>Remain Days Count</th>
                                                                </tr>
                                                            </thead>
                                                    
                                                        <tbody>
                                                    <?php 
                                                        $id=$_SESSION['venue_id'];
                                                        $sql="select *,date(venue_plan.start_date) as sdate,date(venue_plan.expire_date) as edate from venue_plan,subscription_plan where venue_plan.status='Active' and venue_plan.venue_id='$id' and venue_plan.plan_id =subscription_plan.plan_id";
                                                        $result=mysqli_query($connect,$sql);
                                                        $count=mysqli_num_rows($result);
                                                        if($count>0){
                                                        while($row=mysqli_fetch_array($result))
                                                        {
                                                            $plan_name=$row['plan_name'];
                                                            $id=$row['id'];
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
                                                            
                                                        }
                                            ?>
                                                    <tr align="center" style="color:black;">
                                                        <td><?php echo $id; ?></td>
                                                        <td><?php echo $plan_name; ?></td>
                                                        <td><?php echo $type; ?></td>
                                                        <td><?php echo $activated_date; ?></td>
                                                        <td><?php echo $end_date; ?></td>
                                                        <td><?php echo $remain.' Days'; ?></td>

                                                    </tr>
                                                    <?php } else{
                                                        echo '<tr><td colspan="6" align="center"><h3>Yet no any plan activated.</h3></td></tr>';
                                                        }?>
                                                </tbody>
                                            </table>
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
                         <!-- Begin Row -->
                        <div class="row">
                        <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <div class="widget has-shadow">
                                    <!-- Begin Widget Header -->
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h2>Purchase Plan Details</h2>
                                    </div>
                                    <!-- End Widget Header -->
                                    <!-- Begin Widget Body -->
                                    <div class="widget-body">
                                        <div class="pricing-tables-fixed">
                                            <div class="row">
                                                <?php
                                                $sql="select * from subscription_plan";
                                                $result=mysqli_query($connect,$sql);
                                                while($row=mysqli_fetch_array($result))
                                                {
                                                    $plan_name=$row['plan_name'];
                                                    $month=$row['three_month'];
                                                    $year=$row['yearly'];
                                                    $pid=$row['plan_id'];
                                            ?>
                                                <div class="col-lg-4 no-padding">
                                                    <div class="pricing-tables-01 pricing-wrapper">
                                                        <div class="inner-container">
                                                            <div class="pricing-image">
                                                                <img src="../layout/assets/img/icone-01.png" alt="...">
                                                            </div>
                                                            <div class="title"><?php echo $plan_name;?></div><br>
                                                             <div ><h5 style="color:blue;font-size:18px">Three Month:<?php echo $month;?></h5></div><br>
                                                             <div ><h5 style="color:red;font-size:18px">Yearly:<?php echo $year;?></h5></div>
                                                            <br><?php if($plan_name=='Premium'){?>
                                                            <div class="pricing-list">
                                                                <p>Get all Lite services.</p>                                                               
                                                                <p>Add images of your venue. </p>
                                                                <p><br></p> 
                                                            </div>
                                                            <?php } else if($plan_name=='Lite'){
                                                                ?>  <div class="pricing-list">
                                                                 <p>Add & manage venue .</p> 
                                                                 <p>Add & manage venue details.</p> 
                                                                 <p>Show Venue on front of the website.</p>                       
                                                                </div>
                                                        <?php } else{
                                                                ?>  <div class="pricing-list">
                                                                 <p>Get all Premium services.</p>
                                                                   <p>Show contact details on website.</p>
                                                                <p>Add videos of your venue. </p>
                                                           <?php }?>
                                                          </div>
                                                        <button class="openModal" title="Purchase" style="color:blue" data-id="<?php echo $pid;?>" data-toggle="modal" data-target="#modal-centered" href="#">Purchase</button>
                                                    </div>
                                                </div>
                                                
                                               <?php } ?>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <!-- End Widget Body -->
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <?php include('includes/footer.php');?>
                </div>
         <!-- End Content -->
    </div>
  <!-- End Page Content -->
                                                <!-- Begin Centered Modal -->
                                                <div id="modal-centered" class="modal fade">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Centered Modal -->
  <script>
  $('.openModal').click(function(){
      var id = $(this).attr('data-id');
      $.ajax({url:"planmodel.php?id="+id,cache:false,success:function(result){
          $(".modal-content").html(result);
      }});
  });
</script>