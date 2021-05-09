
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
                                        <a href="userreport.php"> User Report</a>&nbsp;/&nbsp; 
                                        <a href="dateinbetweenu.php"> Date In Between</a>&nbsp;/&nbsp;
                                        <a href="weeklyu.php" style="color:red"> Weekly</a>
    	                        </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                       
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="widget has-shadow">
                                    <div style="background-color:cornflowerblue"><br>
                                        <h2 align="center">  Weekly User Report</h2><hr>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="export-table" class="table mb-0">
                                                <thead>			
                                                    <tr align="center">								
                                                        <th>ID</th>
                                                        <th>Name </th>
                                                        <th>Email</th>
                                                        <th>Mobile</th>
                                                        <th>Creation Date</th>                                         
                                                    </tr>
                                                </thead>
                                                <tbody style="color:black">
                                                <?php  
                                               
                                            $sql = "SELECT *,date(created_at) as cdate FROM register_user where YEARWEEK(created_at) = YEARWEEK(NOW())  order by user_id";
                                            //echo $sql;
                                            $result=$connect->query($sql);if(mysqli_num_rows($result)>0){
                                               while($row = $result->fetch_array())
                                             {  
                                                $userid=$row['user_id'];
                                                $name= $row['name'];
                                                $date=$row['cdate'];
                                                $mobile=$row['mobile'];
                                                $email=$row['email'];
                                              ?>
                                               <tr align="center">
                                                        <td><?php echo $userid;?></td>
                                                        <td><?php echo $name;?></td>
                                                        <td><?php echo $email;?></td>
                                                        <td><?php echo $mobile;?></td>
                                                        <td><?php echo $date;?></td>
                                                    </tr>
                                                <?php } }?>
                                                </tbody>
                                            </table>
                                        </div>
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