
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
                                        <a href="user_notify.php" style="color:red" class="page-header-title"> View User Notification</a>
    	                        </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <!-- Begin Row -->
                        <div class="row ">
                            <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow" style="width: 1150px">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Registerd User Notification</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr align="center">
                                                        <th>ID</th>
                                                        <th>User Name</th>
                                                        <th>Contact</th>                                                        
                                                        <th>Email</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                              
                                                <tbody style="color:black">
                                                <?php 
                                                    $sql = "SELECT *,date(user.created_at) as date1 FROM register_user user,notification noti where 
                                                    noti.id=user.user_id  and noti.notification='User' order by  noti.notification_id desc";
													$result=$connect->query($sql);
													while($row = $result->fetch_array())
													{
                                                        $id=$row['id'];
                                                        $user_name=$row['name'];
                                                        $contact=$row['mobile'];
                                                        $add=$row['address'];
                                                        $email=$row['email'];
                                                        $date=$row['date1'];
                                                ?>
                                                    <tr align="center">
                                                        <td><?php if($id==null){echo '';}else{echo $id;}?></td>
                                                        <td><?php if($user_name==null){echo '';}else{echo $user_name;}?></td>
                                                        
                                                        <td><?php if($contact==null){echo '';}else{echo $contact;}?></td>
                                                        <td><?php if($email==null){echo '';}else{echo $email;}?></td>
                                                        <td><?php if($date==null){echo '';}else{echo $date;}?></td>
                                                        
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