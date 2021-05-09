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
                                        <a href="booking_request.php" style="color:red"> Quotation Request List</a>&nbsp;|&nbsp;
                                        <a href="rpt_request.php" style="color:black">Quotation Report</a>&nbsp;|&nbsp;
                                        <a href="rpt_requestchart.php" style="color:black">Graphical Analysis</a>
                                    </div>
                                </div>                              
                                <!-- End Page Header -->
                                <div class="row">
                                    <div class="col-xl-12">
                                        <!-- Sorting -->
                                        <div class="widget has-shadow">
                                            <div class="widget-body">
                                                <div class="table-responsive">
                                                <table id="sorting-table" class="table mb-0">                                          
                                                <thead>
                                                <tr align="center">
                                                    <th> Id</th>
                                                    <th>User </th>
                                                    <th>Event Name</th>
                                                    <th>Booking Date</th>
                                                    <th>Response</th>
                                                    <th>Rate</th>                                                    
                                                    <th>View More</th>
                                                </tr>
                                                </thead>
                                                 <tbody style="color:black">
                                                <?php 
                                                $id=$_SESSION['venue_id'];
                                            $sql="select *,register_user.name as customer_name from venue_enquires,register_user where venue_enquires.user_id=register_user.user_id and venue_enquires.venue_id='$id' order by id desc";
                                            $result=mysqli_query($connect,$sql);
                                            while($row=mysqli_fetch_array($result))
                                            {
                                                $id=$row['id'];
                                                $user=$row['customer_name'];
                                                $event=$row['event_name'];
                                                $date=$row['booking_date'];
                                                $rate=$row['quotation_rate'];
                                                $token=$row['token'];
                                            ?>                                             
                                                        <tr align="center">
                                                          <td><?php echo $id; ?></td> 
                                                          <td><?php echo $user; ?></td> 
                                                          <td><?php echo $event; ?></td> 
                                                          <td><?php echo $date; ?></td>  
                                                          <td><?php if(isset($rate)!=''){?> <span style="width:100px;"><span class="badge-text badge-text-small success">Done</span></span>
                                                            </td>
                                                        <?php } else{?><span style="width:100px;"><span class="badge-text badge-text-small danger">Not Done</span></span>
                                                                </td> <?php }?>
                                                          <td><?php if(isset($rate)!=''){echo $rate;}else{ echo '-';} ?></td>  
                                                        <td><a href="viewquotation.php?id=<?php echo $id;?>&token=<?php echo $token;?>" data-toggle="tooltip" data-placement="bottom" title="View Quotation"><i class="la la-eye" style="color:blue; font-size:30px;"></i></a> </td>
                                                        </tr>
                                                        <?php } ?>
                                                </tbody>
                                
                                            </table>
                                            </form>
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