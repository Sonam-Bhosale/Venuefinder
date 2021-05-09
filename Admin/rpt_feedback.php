
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
                                        <a href="feedback.php" > View Feedback</a>&nbsp;/&nbsp;
                                        <a href="rpt_feedback.php" style="color:red" class="page-header-title"> Report Feedback</a>
    	                        </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <!-- Begin Row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                               
                                <div class="widget has-shadow" style="width: 1200px">
                                    <div style="background-color:cornflowerblue"><br>
                                     <h1 align="center">Feedback Report </h1><hr>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="export-table" class="table mb-0" >
                                                <thead>
                                                    <tr align="center">
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Mobile</th>
                                                        <th>Sent_Date</th>
                                                        <th>Message</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody style="color:black">
                                                <?php 
                                                    $sql = "SELECT *,date(contact.date)  as date FROM contact order by id";
													$result=$connect->query($sql);
													while($row = $result->fetch_array())
													{
                                                            $id=$row['id'];
                                                            $name=$row['name'];
                                                            $email=$row['email'];
                                                            $contact=$row['phone'];
                                                            $date=$row['date'];
                                                            $msg=$row['message'];
                                                           
                                                ?>
                                                    <tr align="center">
                                                        <td><?php echo $id;?></td>
                                                        <td><?php echo $name;?></td>
                                                        <td><?php echo $email;?></td>
                                                        <td><?php echo $contact;?></td>
                                                        <td><?php echo $date;?></td>  
                                                        <td><?php echo $msg;?></td>  
                                                                                                             
                                                    </tr>
                                                    
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
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